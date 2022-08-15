@extends('layouts.main')

@section('content')

<div class="page_about">
   
<section class="about">
<div class="decorations">

<img class="deco7" src="{{ asset('img/deco7.svg') }}"/>

</div>
     <div class="wrapper">
        <h1>{{ __('text.legal') }}</h1>
       
        <div class="content fromWYSIWYG">
        @if(app()->isLocale('FR')) 
        {!! $content->legals_fr !!}
		@else
        {!! $content->legals_nl !!}
		@endif
     
        </div>
    </div>
    </section>


   
</div>
	
@endsection