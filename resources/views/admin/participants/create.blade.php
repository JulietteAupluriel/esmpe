@extends('layouts.backend')

@section('content')

<h3 class="my-5">Ajouter un participant</h3>
	
<form action="{{ route('participants.store') }}" method="post">
	@include('participants.form')	
</form>

@endsection