@extends('admin.layouts.master')

@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Tables</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Data
                    Tables</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
                <a class="btn ripple btn-primary" data-target="#modaldemo1" data-toggle="modal" href="">Ajouter un
                    Nouveau Fournisseur</a>
            </div>
        </div>
    </div>

    {{-- Search  --}}
    <div class="card-body pb-0  ">
        <div class="input-group mb-3">
            <form action="{{ route('fournisseur.search') }}" method="GET">
                <div class="input-group input-group-md ">
                    <input type="text" name="query" value="{{ request()->query('query') }}"
                        class="form-control input-search" placeholder="Chercher un Fournisseur..." />
                    <span class="input-group-append">
                        <button class="btn ripple btn-primary" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <!-- breadcrumb -->

    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">Fournisseur List</h4>
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
                                    <th class="wd-15p border-bottom-0">Name</th>
                                    <th class="wd-25p border-bottom-0">Phone</th>
                                    <th class="wd-25p border-bottom-0">Email</th>
                                    <th class="wd-25p border-bottom-0">Adresse</th>
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->adresse }}</td>
                                        {{-- <td>{{ $item->created_at->diffForHumans() }}</td> --}}
                                        <td>
                                            <div class="btn-group">
                                                <a href="#" class="modal-effect btn btn-md btn-info rounded mr-2"
                                                    data-effect="effect-scale" data-target="#editModal{{ $item->id }}"
                                                    data-toggle="modal">Edit</a>
                                                <form action="{{ route('admin.fournisseur.destroy', $item->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="modal-effect btn btn-md btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                                </form>
                                            </div>
                                        </td>

                                    </tr>
                                    @include('admin.pages.fournisseur.edit')
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center mt-5 text-danger">Pas de Fournisseur</td>
                                    </tr>
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
    @include('admin.pages.fournisseur.create')
    {{-- @include('messages.messages') --}}
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
