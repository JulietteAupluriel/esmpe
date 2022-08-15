@extends('layouts.backend')

@section('content')
	
<div class="mainTitle"><h3>Contenu général</h3></div>


<form action="{{ route('admin.generals.update', $general) }}" method="post">
	@method('PATCH')
	@include('admin.generals.form')	
</form>

@endsection