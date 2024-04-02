@extends('admin.layouts.master')

@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Consultations</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/
                    Tables des Consultations</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
                <a class="btn ripple btn-primary" data-target="#modaldemo1" data-toggle="modal" href="">Ajouter une
                    Nouvelle Consultation</a>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->

    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">List des Consultations</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                        <div>
                            @include('layouts._message')
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">patient Name</th>
                                    <th class="wd-25p border-bottom-0">antécedents</th>
                                    <th class="wd-15p border-bottom-0">diagnostique</th>
                                    <th class="wd-20p border-bottom-0">traitement</th>
                                    <th class="wd-5p border-bottom-0">Tarif</th>
                                    <th class="wd-25p border-bottom-0 text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $item)
                                    <tr>
                                        <td>{{ $item->patient->name }}</td>
                                        <td>{{ \Illuminate\Support\Str::words($item->antécédents, $words = 10, $end = '...') }}
                                        </td>
                                        <td>{{ $item->diagnostique }}</td>
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
                                                <a href="#" class="modal-effect btn btn-md btn-info rounded mr-2"
                                                    data-effect="effect-scale" data-target="#editModal{{ $item->id }}"
                                                    data-toggle="modal">Edit</a>
                                                <form action="" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="modal-effect btn btn-md btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                                </form>
                                            </div>
                                        </td>

                                    </tr>
                                    @include('admin.pages.consultation.edit')
                                @empty
                                    no data found
                                @endforelse
                            </tbody>
                        </table>
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->

    </div>
    <!-- /row -->
    @include('admin.pages.consultation.create')
    {{-- @include('messages.messages') --}}
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
