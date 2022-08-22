@extends('layouts.backend')

@section('content')

<div class="mainTitle"><h3>Ajouter un événement</h3></div>
	
<form action="{{ route('admin.logos.store') }}" method="post">
	@include('admin.logos.form')	
</form>

@endsection