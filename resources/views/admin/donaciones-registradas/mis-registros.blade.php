@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li><a href="/home">Home</a></li>
        <li class="active"><a href="/mis-registros">Mis Registros</a></li>
    </ol>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Productos registrados</div>

                    <div class="panel-body">
                        <div class="col-lg-10 col-lg-offset-1">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Donador(DNI)</th>
                                    <th>Código</th>
                                    <th>Categoria</th>
                                    <th>Subcategoria</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($productos as $producto)
                                    <tr>
                                        <td>{{$producto->donante->dni}}</td>
                                        <td>{{$producto->codigo}}</td>
                                        <td>{{$producto->categoria->nombre}}</td>
                                        <td>{{$producto->subcategoria->nombre}}</td>
                                        <td>{{$producto->created_at->format('d/m/Y')}}</td>
                                        <td>{{$producto->created_at->format('H:m:s')}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
