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
                <form class="form-horizontal" role="form" method="GET" action="/nueva-donacion/terminado">
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
                            <input type="number" class="form-control" name="cantidad" min="1" value="1"/>
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
                    <input type="hidden" name="dni" value="{{$dni}}">
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
                        @if($donante)
                            @foreach($donante->productos as $producto)
                                <tr>
                                    <td>{{$donante->dni}}</td>
                                    <td>{{$producto->codigo}}</td>
                                    @if($producto->categoria)
                                    <td>{{$producto->categoria->nombre}}</td>
                                    @else
                                    <td></td>
                                    @endif
                                    @if($producto->subcategoria)
                                    <td>{{$producto->subcategoria->nombre}}</td>
                                    @else
                                    <td></td>
                                    @endif
                                    <td>{{$producto->cantidad}}</td>
                                    <td>{{$producto->created_at->format('d/m/Y')}}</td>
                                    <td>{{$producto->created_at->format('H:m:s')}}</td>
                                    @if($producto->entregado == 1)
                                    <td>Entregado</td>
                                    @else
                                    <td>No entregado</td>
                                    @endif
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
