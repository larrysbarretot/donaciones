@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li><a href="/home">Home</a></li>
        <li class="active">Nueva Donacion - Paso 1</li>
    </ol>
    <div class="container">
        <form class="navbar-form navbar-left" role="form" method="GET" action="/nueva-donacion/paso-2">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="dni" required="true">DNI: </label>
                <input type="text" class="form-control" name="dni" required autofocus/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Siguiente</button>
            </div>
        </form>
    </div>
@endsection
