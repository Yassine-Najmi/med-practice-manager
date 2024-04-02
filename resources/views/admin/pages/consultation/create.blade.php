    <!-- Basic modal -->
    <div class="modal" id="modaldemo1">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Add Consultation</h6><button aria-label="Close" class="close"
                        data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.consultation.store') }}" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label for="patient">Patient</label>
                            <select class="form-control" name="patient">
                                <option selected disabled>Select Patient</option>
                                @foreach ($items as $patient)
                                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                                @endforeach
                            </select>
                            @error('patient')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="antécédent">antécédent</label>
                            <textarea name="antécédents" class="form-control" id="antécédents" placeholder="Section antecedents" cols="30"
                                rows="10"></textarea>
                            @error('antécédents')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="diagnostique">diagnostique</label>
                            <input type="text" name="diagnostique" class="form-control" id="diagnostique"
                                placeholder="Section Diagnostique">
                            @error('diagnostique')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="traitment">traitment</label>
                            <textarea name="traitment" class="form-control" id="traitment" placeholder="Section traitment" cols="30"
                                rows="10"></textarea>
                            @error('traitment')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="motif">Tarif</label>
                            <input type="text" name="motif" class="form-control" id="motif"
                                placeholder="Section tarif">
                            @error('motif')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
