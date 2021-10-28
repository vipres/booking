@extends('layouts.main', ['activePage' => 'users', 'title' => 'Usuarios'])
@push('css-plugins')
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css"> --}}
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Usuarios</h4>
                                <p class="card-category">Usuarios Registrados</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{ route('users.create') }}" class="btn btn-sm btn-facebook">Añadir Usuario</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover dt-responsive nowrap" style="width: 100%" id="user-table">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Username</th>
                                            <th>Fecha de alta</th>
                                            <th class="text-right">Acciones</th>
                                        </tr>
                                        </thead>
                                      {{-- <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user->id }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->username }}</td>
                                                    <td>{{ $user->created_at }}</td>
                                                    {{-- <td>{{__('Acciones')}}</td> --}}
                                               {{-- </tr>
                                            @endforeach
                                        </tbody> --}}
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Correo</th>
                                                <th>Username</th>
                                                <th>Fecha de alta</th>
                                                <th class="text-right">Acciones</th>
                                            </tr>
                                            </tfoot>
                                    </table>
                                </div>
                            </div>
                            {{-- <div class="card-footer mr-auto">
                                {{ $users->links() }}
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')


<script>

    $('#user-table').DataTable({
        responsive:true,
        autoWidth:false,
        "language": {
            /* "lengthMenu": "Mostrar _MENU_ registros por página", */
            "lengthMenu": "Mostrar "+
                     `<select class="custom-select custom-select-sm form-control form-control-sm">
                        <option value='10'>10</option>
                        <option value='25'>25</option>
                        <option value='50'>50</option>
                        <option value='100'>100</option>
                        <option value='-1'>All</option>
                        </select>` +
                     " registros por página",
            "zeroRecords": "No hay resultados",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)",
            "search": "Buscar:",
            "paginate": {
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
        "ajax": "{{ route('users.data') }}",
        "columns": [
            {data:'id'},
            {data:'name'},
            {data:'email'},
            {data:'username'},
            {data:'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]

    });


</script>
@endpush
