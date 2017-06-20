@extends('layout.base')

@section('body')
<div class="row">
	<div class="col-lg-6 col-lg-offset-3">
		<h1 class="text-center">Donante</h1>
		<form>
		  <div class="form-group">
		    <label for="myDNI">N° DNI</label>
		    <input type="text" class="form-control" id="myDNI">
		  </div>
		  <button type="submit" class="btn btn-default">Mostrar Donaciones</button>
		</form>
		<br>
	</div>
</div>
<div class="row">
	<div class="col-lg-10 col-lg-offset-1">
		<table class="table table-bordered">
		  <thead>
		  	<tr>
			  	<th>Código</th>
			  	<th>Categoría</th>
			  	<th>Cantidad</th>
			  	<th>Fecha</th>
			  	<th>Entregado a</th>
			  	<th>Lugar de Acopio</th>
		  	</tr>
		  </thead>
		  <tbody>
            @foreach ($donations as $donacion)
                @foreach($donacion->productos as $producto)
                <tr>
                    <td>{{$producto->codigo}}</td>
                    <td>{{$producto->categoria->nombre}}</td>
                    <td>{{$producto->cantidad}}</td>
                    <td>{{$donacion->created_at}}</td>
                    <td>{{$donacion->donante->dni}}</td>
                    <td>{{$donacion->acopio->nombre}}</td>
                </tr>
                @endforeach
            @endforeach
		  </tbody>
		</table>
        {{$donations->links()}}
	</div>
</div>
@endsection