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
                    Nouveau Stock</a>
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
                        <h4 class="card-title mg-b-0">Stock List</h4>
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
                                    <th class="wd-15p border-bottom-0">Quantity</th>
                                    <th class="wd-20p border-bottom-0">Price</th>
                                    <th class="wd-25p border-bottom-0">Category</th>
                                    <th class="wd-25p border-bottom-0">Fournisseur</th>
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->category }}</td>
                                        <td>{{ $item->fournisseur_name }}</td>
                                        {{-- <td>{{ $item->created_at->diffForHumans() }}</td> --}}
                                        <td>
                                            <div class="btn-group">
                                                <a href="#" class="modal-effect btn btn-md btn-info rounded mr-2"
                                                    data-effect="effect-scale" data-target="#editModal{{ $item->id }}"
                                                    data-toggle="modal">Edit</a>
                                                <form action="{{ route('admin.stock.destroy', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="modal-effect btn btn-md btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                                </form>
                                            </div>
                                        </td>

                                    </tr>
                                    @include('admin.pages.stock.edit')
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
    @include('admin.pages.stock.create')
    {{-- @include('messages.messages') --}}
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
