@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li><a href="/home">Home</a></li>
        <li><a href="/nueva-donacion/paso-1">Entregar Donacion - Paso 1</a></li>
        <li class="active">Entregar Donacion - Paso 2</li>
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
                        <th>Estado</th>
                    </thead>
                    <tbody>
                        @if($donaciones)
                            @foreach($donaciones as $donacion)
                            	@foreach($donacion->productos as $producto)
                                <tr>
                                	<td>{{$producto->donante->dni}}</td>                                    
                                	<td>{{$producto->codigo}}</td>                                    
                                	<td>{{$producto->categoria->nombre}}</td>                                    
                                	<td>{{$producto->subcategoria->nombre}}</td>                                    
                                	<td>{{$producto->cantidad}}</td>                                    
                                	<td>{{$producto->created_at}}</td>
                                	<td>{{($producto->entregado == 1) ? "entregado" : "no entregado"}}</td>                                                                    	
                                </tr>
                                @endforeach
                            @endforeach
                        @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
