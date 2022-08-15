@extends('layouts.backend')

@section('content')



<div class="mainTitle">
	<h3>Programme</h3>
	<a href="{{ route('admin.events.create') }}" class="btn btn-success text-uppercase">Ajouter</a>
</div>



<table class="table table-sm table-striped table-hover align-middle">
	<thead>
		<tr>
		  <th scope="col">Date</th>
		  <th scope="col">Événement</th>
		  <th scope="col">Inscriptions</th>
		  <th scope="col">CSV</th>
		  <th></th>
		</tr>
	</thead>
	<tbody>
	@foreach ($events as $item)
	<tr>
		<td class="font-monospace text-nowrap" style="font-size: .8rem">{{ $item->date?->isoFormat('DD-MM-YY') }}</td>
		
		<td>
				<a href="{{ route('admin.events.edit', $item) }}" class="text-decoration-none">{{ Str::limit($item->title_fr, 100) }}</a>
				
		</td>
		<td><a href="{{ route('admin.participants', ['event' => $item->id]) }}" class="text-decoration-none">
				<svg style="display:inline" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
					<path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
				</svg>
				<span class="ms-1">{{ $item->participants->count() . '/' . $item->places }}</span>
			</a>
		</td>
		<td>
			@if ($item->participants->count())
				<a href="{{ route('export', ['event' => $item->id]) }}">
					<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16">
						<path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
						<path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
					</svg>
				</a>
			@endif
		</td>
		<td class="text-end">
				<form action="{{ route('admin.events.destroy', $item) }}" method="POST">
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