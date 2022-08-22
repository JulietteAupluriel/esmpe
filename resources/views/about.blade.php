@extends('layouts.main')

@section('content')

<div class="page_about">
   
<section class="about">
<div class="decorations">

<img class="deco7" src="{{ asset('img/deco7.svg') }}"/>

</div>
     <div class="wrapper">
      

        @if(app()->isLocale('fr'))
        <h1><b><span>Qui</span></b> sommes-nous ?</h1>
        @else
        <h1><b><span>Wie</span></b> zijn we ?</h1>
        @endif

        <div class="intro">
            
        @if(app()->isLocale('fr')) 
          {!! $content->aboutintro_fr !!}
		@else
         {!! $content->aboutintro_nl !!}
		@endif

        <div class="mainVisual">
            <img class="deco2" src="{{ asset('img/deco2.svg') }}"/>
            <img class="deco1" src="{{ asset('img/deco1.svg') }}"/>
            <img class="decoHand" src="{{ asset('img/hand2.png') }}"/>
            <img class="deco3" src="{{ asset('img/deco3.svg') }}"/>
        </div>
        </div>
        <div class="content fromWYSIWYG cols2">
        @if(app()->isLocale('fr')) 
        {!! $content->about_fr !!}
		@else
        {!! $content->about_nl !!}
		@endif
        </div>
    </div>
    </section>


    <section class="partners">
    <div class="wrapper">
    @if(app()->isLocale('fr')) 
    <h3>Les partenaires de la <b><span>maison de l'emploi</span></b></h3>
    @else
    <h3>De partners van het  <b><span>jobhuis</span></b></h3>
	@endif
        
    <ul>   @foreach ($logos as $item)
        <li><a href="{{ app()->isLocale('fr')? $item->url_fr : $item->url_nl }}" target="_blank"><img src="storage/{{ asset($item->image) }}"/></a></li>
       @endforeach
     </ul>
</div>
</section>
</div>
	
@endsection