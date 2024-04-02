    <!-- Basic modal -->
    <div class="modal" id="editModal{{ $item->id }}">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Edit Section</h6><button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.appointments.update', $item->id) }}">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Section Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $item->name }}" placeholder="Section Name">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="phone" class="form-control" id="phone"
                                value="{{ $item->phone }}" placeholder="Section Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email"
                                value="{{ $item->email }}" placeholder="Section Email">
                        </div>
                        <div class="form-group">
                            <label for="address">Adresse</label>
                            <input type="text" name="address" class="form-control" id="address"
                                value="{{ $item->adresse }}" placeholder="Section Address">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
