@extends('layouts.backend')

@section('content')

<div class="mainTitle"><h3>Ajouter un participant</h3></div>
	
<form action="{{ route('admin.participants.store') }}" method="post">
	@include('admin.participants.form')	
</form>

@endsection