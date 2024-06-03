 <!-- Basic modal -->

 <div class="modal" id="modaldemo1">
     <div class="modal-dialog" role="document">
         <div class="modal-content modal-content-demo">
             <div class="modal-header">
                 <h6 class="modal-title">Add Supply</h6><button aria-label="Close" class="close" data-dismiss="modal"
                     type="button"><span aria-hidden="true">&times;</span></button>
             </div>
             <div class="modal-body">
                 <form method="POST" action="{{ route('admin.stock.store') }}" autocomplete="off">
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
                         <label for="quantity">Quantity</label>
                         <input type="number" name="quantity" class="form-control" id="quantity">
                         @error('quantity')
                             <span class="text-danger">{{ $message }}</span>
                         @enderror
                     </div>

                     <div class="form-group">
                         <label for="price">Price</label>
                         <input type="text" name="price" class="form-control" id="price">
                         @error('price')
                             <span class="text-danger">{{ $message }}</span>
                         @enderror
                     </div>
                     <div class="form-group">
                         <label for="category">Category</label>
                         <input type="text" name="category" class="form-control" id="category">
                         @error('category')
                             <span class="text-danger">{{ $message }}</span>
                         @enderror
                     </div>

                     <div class="form-group">
                         <label for="fournisseur">Fournisseur</label>
                         <select class="form-control" name="fournisseur_id" id="">
                             <option selected disabled>Select Fournisseur</option>
                             @foreach ($items as $fournisseur)
                                 <option value="{{ $fournisseur->id }}">{{ $fournisseur->name }}</option>
                             @endforeach
                         </select>
                         @error('fournisseur')
                             <span class="text-danger">{{ $message }}</span>
                         @enderror
                     </div>



                     <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
             </div>
         </div>
     </div>
 </div>
