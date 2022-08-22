@extends('layouts.backend')

@section('content')
	<div class="mainTitle">
<h3>{{ $logo->title }}</h3>
</div>

<form action="{{ route('admin.logos.update', $logo) }}" method="post" enctype="multipart/form-data">
	@method('patch')
	@include('admin.logos.form')	
</form>

@endsection