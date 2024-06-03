@extends('admin.layouts.master')

@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/
                    Profile</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->

    <!-- row -->
    <div class="row row-sm">
        <div class="col-lg-4">
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="pl-0">
                        <div class="main-profile-overview">
                            <div class="d-flex justify-content-between mg-b-20">
                                <div>
                                    <h5 class="main-profile-name">{{ $patient->name }}</h5>
                                    <p class="main-profile-name-text">Telephone : {{ $patient->phone }}</p>
                                    </p>

                                </div>
                            </div>
                            <h6>Adresse</h6>
                            <div class="main-profile-bio">
                                {{ $patient->address ? $patient->address : 'No Address' }}
                            </div>
                            <h6>Email</h6>
                            <div class="main-profile-bio">
                                {{ $patient->email ? $patient->email : 'No Email' }}
                            </div>
                            <h6>CNIE</h6>
                            <div class="main-profile-bio">
                                {{ $patient->cnie ? $patient->cnie : 'No CNIE' }}
                            </div>
                            <h6>Date de naissance</h6>
                            <div class="main-profile-bio">
                                {{ $patient->date_of_birth ? Carbon\Carbon::parse($patient->date_of_birth)->translatedFormat('d F Y') : 'No Date of Birth' }}
                            </div>
                        </div><!-- main-profile-overview -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row row-sm">
                <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <div class="counter-status d-flex md-mb-0">
                                <div class="counter-icon bg-primary-transparent">
                                    <i class="icon-calendar text-primary"></i>
                                </div>
                                <div class="ml-auto">
                                    <h5 class="tx-13">Rendez-vous</h5>
                                    <h2 class="mb-0 tx-22 mb-1 mt-1">{{ $patient->appointments_count }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <div class="counter-status d-flex md-mb-0">
                                <div class="counter-icon bg-danger-transparent">
                                    <i class="ti-pulse text-danger"></i>
                                </div>
                                <div class="ml-auto">
                                    <h5 class="tx-13">Consultation</h5>
                                    <h2 class="mb-0 tx-22 mb-1 mt-1">{{ $patient->consultations_count }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="tabs-menu ">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs profile navtab-custom panel-tabs">
                            <li class="active">
                                <a href="#home" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i
                                            class="las la-user-circle tx-16 mr-1"></i></span> <span
                                        class="hidden-xs">Rendez-vous</span> </a>
                            </li>
                            <li class="">
                                <a href="#consultation" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i
                                            class="las la-images tx-16 mr-1"></i></span> <span
                                        class="hidden-xs">Consultation</span> </a>
                            </li>
                            <li class="">
                                <a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i
                                            class="las la-cog tx-16 mr-1"></i></span> <span class="hidden-xs">Profile</span>
                                </a>
                            </li>
                            {{-- <li class="">
                                <a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i
                                            class="las la-cog tx-16 mr-1"></i></span> <span
                                        class="hidden-xs">SETTINGS</span> </a>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="tab-content border-left border-bottom border-right border-top-0 p-4">
                        <div class="tab-pane active" id="home">
                            <h4 class="tx-15 text-uppercase mb-3">Rendez-vous</h4>
                            <div class="table-responsive">
                                <table class="table text-md-nowrap" id="example1">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="wd-10p border-bottom-0">Rendez-vous - ID</th>
                                            <th class="wd-10p border-bottom-0">Patient - ID</th>
                                            <th class="wd-25p border-bottom-0">Date</th>
                                            <th class="wd-25p border-bottom-0">à partir de</th>
                                            <th class="wd-25p border-bottom-0">mis à jour le</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($patient->appointments as $item)
                                            <tr class="text-center">
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->patient_id }}</td>
                                                <td>{{ Carbon\Carbon::parse($item->date)->translatedFormat('d F Y') }}</td>
                                                <td>{{ $item->time->format('H:i') }}</td>
                                                <td>{{ $item->updated_at->diffForHumans() }}</td>
                                                <td>
                                                    {{-- <div class="btn-group">
                                                        <a href="#"
                                                            class="modal-effect btn btn-md btn-info rounded mr-2"
                                                            data-effect="effect-scale"
                                                            data-target="#editModal{{ $item->id }}"
                                                            data-toggle="modal">Edit</a>
                                                        <form action="{{ route('admin.vocation.destroy', $item->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit"
                                                                class="modal-effect btn btn-md btn-danger"
                                                                onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                                        </form>
                                                    </div> --}}
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center mt-5 text-danger">Pas de rendez-vous
                                                    pour
                                                    {{ $patient->name }}</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="consultation">
                            <h4 class="tx-15 text-uppercase mb-3">Consultations</h4>
                            <div class="table-responsive">
                                <table class="table text-md-nowrap" id="example1">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="wd-5p border-bottom-0">Consultation - ID</th>
                                            <th class="wd-5p border-bottom-0">Patient - ID</th>
                                            <th class="wd-20p border-bottom-0">Situation</th>
                                            <th class="wd-20p border-bottom-0">Diagnostique</th>
                                            <th class="wd-20p border-bottom-0">Traitement</th>
                                            <th class="wd-10p border-bottom-0">Tarif (DH)</th>
                                            <th class="wd-25p border-bottom-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($patient->consultations as $item)
                                            <tr class="text-center">
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->patient_id }}</td>
                                                <td>{{ $item->situation }}</td>
                                                <td>
                                                    {{ \Illuminate\Support\Str::words($item->diagnostique, $words = 10, $end = '...') }}
                                                </td>
                                                <td>{{ \Illuminate\Support\Str::words($item->traitment, $words = 10, $end = '...') }}
                                                </td>
                                                <td>{{ $item->motif }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a class="modal-effect btn btn-md btn-success rounded mr-2 "
                                                            href="{{ route('admin.pdf.generatePdf', ['id' => $item->id]) }}"
                                                            target="_blank">
                                                            <i class="fas fa-file-pdf mr-1"></i> PDF
                                                        </a>
                                                    </div>
                                                <td>
                                                    {{-- <div class="btn-group">
                                                        <a href="#"
                                                            class="modal-effect btn btn-md btn-info rounded mr-2"
                                                            data-effect="effect-scale"
                                                            data-target="#editModal{{ $item->id }}"
                                                            data-toggle="modal">Edit</a>
                                                        <form action="{{ route('admin.vocation.destroy', $item->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit"
                                                                class="modal-effect btn btn-md btn-danger"
                                                                onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                                        </form>
                                                    </div> --}}
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center mt-5 text-danger">Pas de consultation
                                                    pour
                                                    {{ $patient->name }}</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="settings">
                            <form role="form" action="{{ route('admin.patient.update', $patient->id) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="FullName">Full Name</label>
                                    <input type="text" name="name" value="{{ $patient->name }}" id="FullName"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" name="email" value="{{ $patient->email }}" id="Email"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Phone</label>
                                    <input type="text" name="phone" value="{{ $patient->phone }}" id="Email"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Cnie</label>
                                    <input type="text" name="cnie" value="{{ $patient->cnie }}" id="Email"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Email">date of birth</label>
                                    <input type="text" name="date_of_birth" value="{{ $patient->date_of_birth }}"
                                        id="Email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="AboutMe">Adresse</label>
                                    <textarea id="AboutMe" class="form-control" name="address">{{ $patient->address }}</textarea>
                                </div>
                                <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
