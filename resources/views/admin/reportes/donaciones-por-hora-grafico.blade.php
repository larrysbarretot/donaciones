@extends('layouts.app')

@section('content')
    {!! Charts::assets() !!}
    <ol class="breadcrumb">
        <li><a href="/home">Home</a></li>
        <li><a href="/reportes">Reportes</a></li>
        <li class="active">Reporte de Productos por hora</li>
    </ol>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <ul class="nav nav-tabs">
                    <li role="presentation"><a href="/reportes/donaciones-por-hora">Reporte</a></li>
                    <li role="presentation" class="active"><a href="#">Reporte Gráfico</a></li>
                </ul>
                <div class="panel panel-default">
                    <div class="panel-heading">Reporte de Productos</div>

                    <div class="panel-body">
                        <div class="col-lg-12">
                            <center>
                                {!! $chart->render() !!}
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
