@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a class="" href="/nueva-donacion/paso-1">Nueva donación</a>
                        </li>
                        <li class="list-group-item">
                            <a class="" href="#">Donaciones que he registrado</a>
                        </li>
                        <li class="list-group-item">
                            <a class="" href="#">Entregar donación</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
