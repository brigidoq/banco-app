@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Ver Cliente</div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>ID:</strong>
                            {{ $client->id }}
                        </div>

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $client->nombre }}
                        </div>

                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $client->email }}
                        </div>

                        <div class="form-group">
                            <strong>Teléfono:</strong>
                            {{ $client->telefono }}
                        </div>

                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $client->direccion }}
                        </div>

                        <a href="{{ route('clients.index') }}" class="btn btn-primary">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
