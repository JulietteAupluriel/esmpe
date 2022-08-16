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
        <h1>Etterbeek NL se mobilise<br/> pour l'<b><span>emploi</span></b></h1>
        <div class="intro"><p>{!! $content->intro_nl !!}</p>
        @endif


       <div> <a href="{{ route('programme', App::getLocale()) }}" class="btn">@lang('validation.boolean') {{ __('text.voirleprogramme') }}</a></div>


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
        <ul> <li><a href="https://www.actiris.brussels" target="_blank"><img src="{{ asset('img/partner/actiris.png') }}"/></a></li>
       
        @if(app()->isLocale('fr'))
        <li><a href="https://www.alepwabru.be/" target="_blank"><img src="{{ asset('img/partner/ale_ETT_FR.jpg') }}"/></a></li>
        @else
        <li><a href="https://www.alepwabru.be/" target="_blank"><img src="{{ asset('img/partner/ale_ETT_NL.jpg') }}"/></a></li>
        @endif

        <li><a href="https://etterbeek.brussels/" target="_blank"><img src="{{ asset('img/partner/commune.jpg') }}"/></a></li>
        <li><a href="https://cpas.etterbeek.be/" target="_blank"><img src="{{ asset('img/partner/cpas.jpg') }}"/></a></li>
        <li><a href="http://mlett.brussels/" target="_blank"><img src="{{ asset('img/partner/mlet.png') }}"/></a></li>
    </ul>
</div>
</section>


@endsection