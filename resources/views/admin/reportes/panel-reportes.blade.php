@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li><a href="/home">Home</a></li>
        <li class="active">Reportes</li>
    </ol>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Home</div>

                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a class="" href="/reportes/productos">Reporte de productos</a>
                            </li>
                            <li class="list-group-item">
                                <a class="" href="/reportes/productos-sin-donar">Reporte de productos no entregados</a>
                            </li>
                            <li class="list-group-item">
                                <a class="" href="/reportes/donaciones">Reporte de donaciones</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
