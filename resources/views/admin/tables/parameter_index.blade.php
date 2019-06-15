@extends('admin.admin')

@section('admin_content')

    <div class="row mb-3 justify-content-end">
        <div class="col-auto">
            <a href="{{ route('parameter.create') }}" class="btn btn-success">Новый</a>
        </div>
    </div>

    <div class="row">
        <div class="col-8">
            <table class="table table-bordered" id="parameter-table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Название</th>
                    <th>Action</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>

@endsection

@push('stylesheets')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

@endpush

@push('scripts')
    <script>
        $(function() {
            $('#parameter-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('datatable.getparameters') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'action', name: 'action' }
                ]
            });
        });
    </script>

@endpush