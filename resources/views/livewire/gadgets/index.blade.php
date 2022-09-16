<div>
    <table class="table table-striped">
        <thead class="bg-primary">
            <tr>
                <th>id no.</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Price</th>
                <th>Types</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gadgets as $gad)
                <tr>
                    <th>{{$gad->id}}</th>
                    <th>{{$gad->name}}</th>
                    <th>{{$gad->brand}}</th>
                    <th>{{$gad->model}}</th>
                    <th>{{$gad->price}}</th>
                    <th>{{$gad->types}}</th>
                    <td >
                        <a href="{{url('edit', ['devices' => $gad->id])}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{url('delete', ['devices' => $gad->id])}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
