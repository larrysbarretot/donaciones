@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Home</div>

                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a class="" href="/reportes/productos">Reporte de productos</a>
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
