@extends('layouts.backend')

@section('content')

<div class="mainTitle"><h3>Filtres</h3></div>


<table class="table table-borderless table-sm align-middle">
	<tr>
		<td>
			<form action="{{ route('admin.filters.store') }}" method="POST">
				@csrf
				<div class="input-group">
					<label>FR </label> <input type="text" class="form-control" name="name_fr">
					<label>NL </label>  <input type="text" class="form-control" name="name_nl">
					<button class="btn btn-success" type="submit">Ajouter</button>
				</div>
			</form>
		</td>
	</tr>
	@foreach ($filters as $item)
	<tr>
		<td>
			<form action="{{ route('admin.filters.update', $item) }}" method="POST">
				@csrf
				@method('PATCH')
				<div class="input-group">
				<label>FR </label> <input type="text" class="form-control" name="name_fr" value="{{ $item->name_fr }}">
				<label>NL </label> <input type="text" class="form-control" name="name_nl" value="{{ $item->name_nl }}">

					<button class="btn btn-outline-success" type="submit">Actualiser</button>
				</div>
			</form>
		</td>
		<td>
			<form action="{{ route('admin.filters.destroy', $item) }}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit" class="text-danger btn btn-sm" onclick="return confirm('Supprimer?')">X</button>
			</form>
		</td>
	</tr>
	@endforeach
</table>
    
@endsection