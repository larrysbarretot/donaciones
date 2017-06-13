@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li><a href="/home">Home</a></li>
        <li><a href="/nueva-donacion/paso-1">Nueva Donacion - Paso 1</a></li>
        <li class="active">Nueva Donacion - Paso 2</li>
    </ol>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <form class="form-horizontal" role="form" method="GET" action="/nueva-donacion/paso-2">
                    {{ csrf_field() }}
                    <br/>
                    <div class="form-group">
                        <div class="col-md-2 ">
                            <label class="label-control " for="codigo" required="true">Código de producto: </label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="codigo"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2 ">
                            <label class="label-control " for="cantidad" required="true">Cantidad: </label>
                        </div>
                        <div class="col-md-3">
                            <input type="number" class="form-control" name="cantidad"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2 ">
                            <label class="label-control " for="categoria" required="true">Categoría: </label>
                        </div>
                        <div class="col-md-3">
                            <select name="categoria" class="form-control" id="">
                                <option value="0">Otros</option>
                                @foreach($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2 ">
                            <label class="label-control " for="subcategoria" required="true">Subcategoría: </label>
                        </div>
                        <div class="col-md-3">
                            <select name="subcategoria" class="form-control" id="">
                                <option value="0">Otros</option>
                                @foreach($subcategorias as $subcategoria)
                                <option value="{{$subcategoria->id}}">{{$subcategoria->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-2">
                            <button type="submit" class="btn btn-primary">Terminar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="panel-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-xs-2 col-md-1 col-md-offset-9" for="dni" required="true">DNI: </label>
                        <div class="col-md-2 col-xs-10">
                            <input type="text" class="form-control" name="" value="{{$dni}}" disabled/>
                        </div>
                    </div>
                </form>

                <table class="table table-bordered ">
                    <thead>
                        <th>DNI</th>
                        <th>Código</th>
                        <th>Categoría</th>
                        <th>Subcategoría</th>
                        <th>Cantidad</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Estado</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>47676481</td>
                            <td>01231</td>
                            <td>Abarrotes</td>
                            <td>Aceite</td>
                            <td>2</td>
                            <td>2017/10/06</td>
                            <td>12:53:00</td>
                            <td>entregado</td>
                        </tr>
                        {{--@foreach($donaciones as $donacion)
                            <tr>
                                <td>$donacion->dni</td>
                                <td>$donacion->codigo</td>
                                <td>$donacion->categoria</td>
                                <td>$donacion->cantidad</td>
                                <td>$donacion->fecha</td>
                                <td>$donacion->hora</td>
                            </tr>
                        @endforeach--}}
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
