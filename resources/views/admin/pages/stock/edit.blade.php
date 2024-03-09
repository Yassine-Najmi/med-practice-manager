    <!-- Basic modal -->
    <div class="modal" id="editModal{{ $item->id }}">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Edit Supply</h6><button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.stock.update', $item->id) }}">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Section Name</label>
                            <input type="text" name="name" class="form-control" id="name"
                                value="{{ $item->name }}" placeholder="Section Name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="quantity">Section Quantity</label>
                            <input type="number" name="quantity" class="form-control" id="quantity"
                                value="{{ $item->quantity }}" placeholder="Section quantity">
                            @error('quantity')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="price">Section Price</label>
                            <input type="text" name="price" class="form-control" id="price"
                                value="{{ $item->price }}" placeholder="Section price">
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="category">Section Category</label>
                            <input type="text" name="category" class="form-control" id="category"
                                value="{{ $item->category }}" placeholder="Section category">
                            @error('category')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="category">Section Fournisseur</label>
                            <select class="form-control" name="fournisseur_id" id="fournisseur">
                                @foreach ($items as $fournisseur)
                                    <option value="{{ $fournisseur->id }}"
                                        {{ $fournisseur->id == $item->fournisseur_id ? 'selected' : '' }}>
                                        {{ $fournisseur->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('fournisseur_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
