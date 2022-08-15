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
        <h1><b><span>Qui</span></b> sommes-nous ? NL</h1>
        @endif

        <div class="intro">
            
        @if(app()->isLocale('fr')) 
        {!! $content->aboutIntro_fr !!}
		@else
        {!! $content->aboutIntro_nl !!}
		@endif

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
    <h3>Les partenaires de la <b><span>maison de l'emploi</span> NL</b></h3>
	@endif
        
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
</div>
	
@endsection