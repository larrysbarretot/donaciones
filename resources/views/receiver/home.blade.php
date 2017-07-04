@extends('layout.base')

@section('body')
<div class="row">
	<div class="col-lg-6 col-lg-offset-3">
		<h1 class="text-center">Donar</h1>
		<form method="GET" action="/receiver/create">
		  <div class="form-group">
		    <label for="dni">N° DNI</label>
		    <input type="text" class="form-control" id="dni" name="dni" required>
		  </div>
		  <button type="submit" class="btn btn-default">Siguiente</button>
		</form>
		<br>
	</div>
</div>
@endsection