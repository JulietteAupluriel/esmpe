@extends('layouts.backend')

@section('content')

<div class="mainTitle"><h3>Ajouter un événement</h3></div>
	
<form action="{{ route('admin.events.store') }}" method="post">
	@include('admin.events.form')	
</form>

@endsection