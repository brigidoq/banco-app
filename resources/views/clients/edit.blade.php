@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Editar Cliente</div>

                    <div class="card-body">
                        <form action="{{ route('clients.update', $client->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control"
                                    value="{{ $client->nombre }}" required>
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido</label>
                                <input type="text" name="apellido" id="apellido" class="form-control"
                                    value="{{ $client->apellido }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    value="{{ $client->email }}" required>
                            </div>
                            <div class="form-group">
                                <label for="telefono">Teléfono</label>
                                <input type="text" name="telefono" id="telefono" class="form-control"
                                    value="{{ $client->telefono }}" required>
                            </div>
                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <textarea name="direccion" id="direccion" class="form-control" required>{{ $client->direccion }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="dpi">DPI</label>
                                <input type="text" name="dpi" id="dpi" class="form-control"
                                    value="{{ $client->dpi }}" required>
                            </div>
                            <div class="form-group">
                                <label for="genero">Género</label>
                                <input type="text" name="genero" id="genero" class="form-control"
                                    value="{{ $client->genero }}" required>
                            </div>
                            <div class="form-group">
                                <label for="empresa">Empresa</label>
                                <input type="text" name="empresa" id="empresa" class="form-control"
                                    value="{{ $client->empresa }}">
                            </div>
                            <div class="form-group">
                                <label for="ciudad">Ciudad</label>
                                <input type="text" name="ciudad" id="ciudad" class="form-control"
                                    value="{{ $client->ciudad }}">
                            </div>
                            <div class="form-group">
                                <label for="pais">País</label>
                                <input type="text" name="pais" id="pais" class="form-control"
                                    value="{{ $client->pais }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
