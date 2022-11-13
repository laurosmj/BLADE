@extends('base')


@section('content')
    


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1>Categories</h1>

            <table class="table table-bordered table-striped ">
                <thead>
                    <tr class="bg-primary">
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody class="table-striped">
                    <?php foreach($categories as $c): ?>
                        <tr>
                            <td><?= $c->id ?> </td>
                            <td><?= $c->category ?> </td>
                            <td><?= $c->description ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection