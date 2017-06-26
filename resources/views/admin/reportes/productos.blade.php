@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li><a href="/home">Home</a></li>
        <li><a href="/reportes">Reportes</a></li>
        <li class="active">Reporte de Productos</li>
    </ol>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Reporte de Productos</div>

                    <div class="panel-body">
                        <div class="col-lg-10 col-lg-offset-1">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Categoría</th>
                                    <th>Subcategoría</th>
                                    <th>Cantidad</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($productos as $producto)
                                    <tr>
                                        <td>{{$producto->codigo}}</td>
                                        <td>{{$producto->categoria}}</td>
                                        <td>{{$producto->subcategoria}}</td>
                                        <td>{{$producto->cantidad}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$productos->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
