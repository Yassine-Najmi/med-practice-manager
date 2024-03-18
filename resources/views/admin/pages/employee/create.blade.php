    <!-- Basic modal -->
    <div class="modal" id="modaldemo1">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Add Employee</h6><button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.employee.store') }}" autocomplete="off">
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
                            <label for="job">Job</label>
                            <select class="form-control" name="job" id="">
                                <option selected disabled>Select Job</option>
                                @foreach (['doctor', 'nurse', 'pharmacist'] as $job)
                                    <option value="{{ $job }}">{{ $job }}</option>
                                @endforeach
                            </select>
                            @error('job')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="work_time">Work Time</label>
                            <select class="form-control" name="work_time" id="">
                                <option selected disabled>Select Work Time</option>
                                @foreach (['08:00:00', '09:00:00', '10:00:00'] as $work_time)
                                    <option value="{{ $work_time }}">{{ $work_time }}</option>
                                @endforeach
                            </select>
                            @error('work_time')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="salary">Salary</label>
                            <input type="number" name="salary" class="form-control" id="salary"
                                placeholder="Section Salary">
                            @error('salary')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="hiring_date">Hiring Date</label>
                            <input type="date" name="hiring_date" class="form-control" id="hiring_date"
                                placeholder="Section Hiring Date">
                            @error('hiring_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" name="status" id="">
                                <option selected disabled>Select Status</option>
                                @foreach (['active', 'inactive'] as $status)
                                    <option value="{{ $status }}">{{ $status }}</option>
                                @endforeach
                            </select>
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
