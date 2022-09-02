@extends('layouts.backend')

@section('content')

<div class="d-flex justify-content-between align-items-center my-5">
	<h3>{{ $participants->first()?->event->title ?? 'Ajouter un participant' }}</h3>
	<div>
		<a href="{{ route('admin.participants.create', ['event' => request()->query('event')]) }}" class="btn btn-success text-uppercase">Ajouter</a>
		@if ($participants->count())
			<a href="{{ route('export', ['event' => request()->query('event')]) }}" class="btn btn-primary text-uppercase">Export CSV</a>
		@endif
	</div>
</div>

<table class="table table-sm table-striped table-hover align-middle">
	<thead>
		<tr>
		<th scope="col">Date</th>
		  <th scope="col">Nom</th>
		  <th scope="col">Email</th>
		  <th scope="col">Téléphone</th>
		  <th></th>
		</tr>
	</thead>
	<tbody>
	@foreach ($participants as $item)
	<tr>
	<td><small>{{ $item->created_at }}</small></td>

		<td><a href="{{ route('admin.participants.edit', $item) }}" class="text-decoration-none">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="me-1" viewBox="0 0 16 16">
					<path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
			  	</svg>
				{{ $item->name . ' ' . $item->firstname }}
			</a>
		</td>
		<td><a href="mailto:{{ $item->email }}" target="_blank" class="text-decoration-none">{{ $item->email }}  <i>{{ $item->noemail ? 'pas d\'email' : '' }}</i> </a></td>
		<td><a href="tel:{{ $item->phone }}" class="text-decoration-none">{{ $item->phone }}</a></td>
		<td class="text-end">
			<form action="{{ route('admin.participants.destroy', $item) }}" method="POST">
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