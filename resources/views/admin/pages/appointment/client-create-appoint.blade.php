    <!-- Basic modal -->
    <div class="modal" id="appointmentModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Add Appointement</h6><button aria-label="Close" class="close"
                        data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" placeholder="Section Name" class="form-control"
                                id="name" aplaceholder="Section Name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email"
                                placeholder="Section Email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="phone" class="form-control" id="phone"
                                placeholder="Section Phone Number">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="adresse">Adress</label>
                            <input type="text" name="address" class="form-control" id="adresse"
                                placeholder="Section Adress">
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="cnie">CNIE</label>
                            <input type="text" name="cnie" class="form-control" id="cnie"
                                placeholder="Section CNIE">
                            @error('cnie')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="date_of_birth">Date of Birth</label>
                            <input type="date" name="date_of_birth" class="form-control" id="date_of_birth"
                                placeholder="Section Date of Birth">
                            @error('date_of_birth')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
