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
			  	<th>Hora</th>
			  	<th>Entregado a</th>
		  	</tr>
		  </thead>
		  <tbody>
		  	<tr>
		  		<td></td>
		  		<td>Agua 1L</td>
		  		<td>5</td>
		  		<td>30-05-2017</td>
		  		<td>15:56</td>
		  		<td>44444444</td>
		  	</tr>
		  	<tr>
		  		<td>12345</td>
		  		<td>Carpa</td>
		  		<td>1</td>
		  		<td>30-05-2017</td>
		  		<td>15:56</td>
		  		<td>44444444</td>
		  	</tr>
            @foreach ($donations as $donation)
                <tr>
                    <td></td>
                    <td>Agua 1L</td>
                    <td>5</td>
                    <td>30-05-2017</td>
                    <td>15:56</td>
                    <td>44444444</td>
                </tr>
            @endforeach
		  </tbody>
		</table>
	</div>
</div>
@endsection