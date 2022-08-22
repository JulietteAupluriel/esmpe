@extends('layouts.main')

@section('content')


<div class="decoElts">

</div>


<section class="hp_intro">



    <div class="wrapper">
       
    @if(app()->isLocale('fr'))
        <h1>Etterbeek se mobilise<br/> pour l'<b><span>emploi</span></b></h1>
        <div class="intro"><p>{!! $content->intro_fr !!}</p>
        @else
          
        <h1>Etterbeek mobiliseert<br/> voor de <b><span>werkgelegenheid</span></b></h1>
        <div class="intro"><p>{!! $content->intro_nl !!}</p>
        @endif


        @if($content->hideprog==='non') <div> <a href="{{ route('programme', App::getLocale()) }}" class="btn">{{ __('text.voirleprogramme') }}</a></div>        @endif


    </div>
    
       
    </div>

<div class="mainVisual">
    <img class="deco2" src="{{ asset('img/deco2.svg') }}"/>
    <img class="deco1" src="{{ asset('img/deco1.svg') }}"/>
    <img class="decoHand" src="{{ asset('img/hand.png') }}"/>
    <img class="deco3" src="{{ asset('img/deco3.svg') }}"/>
</div>
</section>

<section class="partners">
    <div class="wrapper">
        <ul> 
            
        @foreach ($logos as $item)
        <li><a href="{{ app()->isLocale('fr')? $item->url_fr : $item->url_nl }}" target="_blank"><img src="{{ asset('uploads/'.$item->image) }}"/></a></li>
       @endforeach

       </ul>
</div>
</section>


@endsection