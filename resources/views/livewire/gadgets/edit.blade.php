<div>
   <div class="container col-md-6 offset-md-3 mt-5">
    <div class="card">
        <div class="card-header bg-primary text-center">
            <h2>Edit Gadget</h2>
        </div>
        <div class="card-body bg-primary bg-opacity-75">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="name">
                <label for="name">Name</label>
                @error('name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="brand">
                <label for="brand">Brand</label>
                @error('brand')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="model">
                <label for="model">Model</label>
                @error('model')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="price">
                <label for="price">Price</label>
                @error('price')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-floating mb-3">
                <select name="types" class="form-select" wire:model.defer="types">
                    <option hidden="true">Types</option>
                    <option selected disabled>Select Types</option>
                    <option value="Communication & Media">Communication & Media</option>
                    <option value="Computer">Computer</option>
                    <option value="Apple">Apple</option>
                    <option value="Toys">Toys</option>
                    <option value="Smart Home">Smart Home</option>
                    <option value="Transportation">Transportation</option>
                    <option value="Health & Personal">Health & Personal</option>
                    <option value="Pet">Pet</option>
                </select>
                <label for="types">Kinds of Gadget</label>
                @error('types')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-group mb-3 grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-success btn-sm" type="submit" wire:click="editGadget()">
                    Edit Music
                </button>
                <button class="btn btn-primary btn-sm mx-2" wire:click="back()"  >
                    Back
                </button>
            </div>
        </div>
    </div>
   </div>
</div>
<style>
    .form-floating{
        color: rgb(249, 14, 54);
    }
</style>
