@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li><a href="/home">Home</a></li>
        <li><a href="/reportes">Reportes</a></li>
        <li class="active">Reporte de Donaciones</li>
    </ol>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Reporte de Productos sin donar</div>

                    <div class="panel-body">
                        <div class="col-lg-10 col-lg-offset-1">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Donador(DNI)</th>
                                    <th>Lugar de Acopio</th>
                                    <th>Siniestro</th>
                                    <th>Fecha</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($donaciones as $donacion)
                                    <tr>
                                        <td>{{$donacion->donante->dni}}</td>
                                        <td>{{$donacion->acopio->nombre}}</td>
                                        <td>{{$donacion->siniestro->nombre}}</td>
                                        <td>{{$donacion->created_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{--{{$donations->links()}}--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
