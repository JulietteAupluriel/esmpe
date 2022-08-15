@extends('layouts.backend')

@section('content')
	<div class="mainTitle">
<h3>{{ $event->title_fr }}</h3>
</div>

<form action="{{ route('admin.events.update', $event) }}" method="post">
	@method('PATCH')
	@include('admin.events.form')	
</form>

@endsection