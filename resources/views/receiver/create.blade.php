@extends('layout.base')

@section('body')
<div class="row">
	<div class="col-lg-6 col-lg-offset-3">
		<h1 class="text-center">Donar</h1>
		<form method="POST" action="/receiver">
			{{csrf_field()}}
		  <input type="hidden" value="{{ app('request')->input('dni') }}" name="dni">	
		  <div class="form-group">
		    <label for="code">Código (opcional)</label>
		    <input type="text" class="form-control" id="code" name="code">
		  </div>
		  <div class="form-group">
		    <label for="category">Categoría</label>
		    <select class="form-control" name="category">
			  <option>Agua 1L</option>
			  <option>Conserva</option>
			  <option>Otro</option>
			</select>
		  </div>
		  <div class="form-group">
		    <label for="quantity">Cantidad</label>
		    <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1">
		  </div>
		  <button type="submit" class="btn btn-default">Siguiente</button>
		</form>
		<br>
	</div>
</div>
@endsection