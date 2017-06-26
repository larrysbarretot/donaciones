@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li><a href="/home">Home</a></li>
        <li><a href="/reportes">Reportes</a></li>
        <li class="active">Reporte de Productos por hora</li>
    </ol>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <ul class="nav nav-tabs">
                    <li role="presentation" class="active"><a href="#">Reporte</a></li>
                    <li role="presentation"><a href="/reportes/donaciones-por-hora-grafico">Reporte Gráfico</a></li>
                </ul>
                <div class="panel panel-default">
                    <div class="panel-heading">Reporte de Productos</div>

                    <div class="panel-body">
                        <div class="col-lg-12">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Hora</th>
                                    <th>#Donaciones</th>
                                    <th>#Productos</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($donaciones as $donacion)
                                    <tr>
                                        <td>{{$donacion->hora}}:00 - {{$donacion->hora + 1}}:00</td>
                                        <td>{{$donacion->donaciones}}</td>
                                        <td>{{$donacion->productos}}</td>
                                    </tr>
                                @endforeach
                                @if(count($donaciones)>0)
                                    <tr>
                                        <td>Totales:</td>
                                        <td>{{$donaciones->sum("donaciones")}}</td>
                                        <td>{{$donaciones->sum("productos")}}</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
