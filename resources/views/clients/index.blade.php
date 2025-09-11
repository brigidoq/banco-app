@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Clientes</div>

                    <div class="card-body">
                        <a href="{{ route('clients.create') }}" class="btn btn-primary mb-3">Nuevo Cliente</a>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Teléfono</th>
                                    <th>Dirección</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr>
                                        <td>{{ $client->id }}</td>
                                        <td>{{ $client->nombre }}</td>
                                        <td>{{ $client->email }}</td>
                                        <td>{{ $client->telefono }}</td>
                                        <td>{{ $client->direccion }}</td>
                                        <td>
                                            <a href="{{ route('clients.show', $client->id) }}"
                                                class="btn btn-sm btn-info">Ver</a>
                                            <a href="{{ route('clients.edit', $client->id) }}"
                                                class="btn btn-sm btn-warning">Editar</a>
                                            <form action="{{ route('clients.destroy', $client->id) }}" method="POST"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
