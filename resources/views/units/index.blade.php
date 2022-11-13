@extends('base')


@section('content')
    

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Units</h1>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="bg-primary">
                        <th>Unit ID</th>
                        <th>Unit Type</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($units as $u): ?>
                        <tr>
                            <td><?= $u->id ?> </td>
                            <td><?= $u->unit_type ?> </td>
                            <td><?= $u->description ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection