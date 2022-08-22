@extends('layouts.backend')

@section('content')



<div class="mainTitle">
	<h3>Logos partenaires</h3>
	<a href="{{ route('admin.logos.create') }}" class="btn btn-success text-uppercase">Ajouter +</a>

</div>



<table class="table table-sm table-striped table-hover align-middle">
	<thead>
		<tr>
		  <th scope="col">Page</th>
		  <th scope="col">Ordre</th>
		  <th scope="col">Titre</th>
		  
		  <th></th>
		</tr>
	</thead>
	<tbody>
	@foreach ($logos as $item)
	<tr>
	<td>
				<a href="{{ route('admin.logos.edit', $item) }}" class="text-decoration-none">{{ Str::limit($item->page, 100) }}</a>
				
		</td>
	<td>
		{{ $item->order }}
</td>
		<td>
				<a href="{{ route('admin.logos.edit', $item) }}" class="text-decoration-none">{{ Str::limit($item->title, 100) }}</a>
				
		</td>
	
		
		
		<td class="text-end">
				<form action="{{ route('admin.logos.destroy', $item) }}" method="POST">
					@csrf
					@method('DELETE')
					<button type="submit" class="text-danger btn btn-sm" onclick="return confirm('Supprimer?')">X</button>
				</form>
		</td>
	</tr>
	@endforeach
	</tbody>
</table>
    
@endsection