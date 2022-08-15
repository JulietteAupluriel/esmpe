@extends('layouts.backend')

@section('content')
	
<div class="mainTitle"><h3>{{ $participant->name . ' ' . $participant->firstname }}</h3></div>

<form action="{{ route('admin.participants.update', $participant) }}" method="post">
	@method('PATCH')
	@include('admin.participants.form')	
</form>

@endsection