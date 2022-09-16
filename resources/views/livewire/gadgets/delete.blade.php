<div>
    <div class="container col-md-6 offset-md-3 mt-5">
        <div class="card">
            <div class="card-header bg-primary text-center">
                <h2>Delete Gadget</h2>
            </div>
            <div class="card-body bg-primary bg-opacity-75">
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <td>{{$this->gadget->name}}</td>
                    </tr>
                    <tr>
                        <th>Model</th>
                        <td>{{$this->gadget->model}}</td>
                    </tr>
                    <tr>
                        <th>Types</th>
                        <td>{{$this->gadget->types}}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer ">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-danger btn-sm" wire:click="deleteGadget()">
                        Delete
                    </button>
                    <button class="btn btn-primary btn-sm mx-2" wire:click="back()"  >
                        Back
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
