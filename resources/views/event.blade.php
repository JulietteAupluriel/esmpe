@extends('layouts.main')

@section('content')

<section id="sect-eventDetail">

	
	
<div class="wrapper">
    <div class="back"><a class="backLink" href="{{ route('programme') }}">{{ __('text.back') }}</a></div>
    
    <div class="titleWrap">
        <h2>  @if(app()->isLocale('fr'))  {{ $event->title_fr }} @else {{ $event->title_nl }} @endif</h2>
        <a href="#sect-subscribe" class="btn">{{ __('text.subscribe') }}</a>
    </div>

    <div class="eventContent">
        <div class="contentText">
        <div class="fromWYSIWYG">@if(app()->isLocale('fr'))  {!! $event->body_fr !!} @else {!! $event->body_nl !!} @endif</div>
        </div>
<div class="aside">
    <div class="box">
        <div class="top">
            <div class="date"> 
				<span class="day">{{ $event->date?->isoFormat('DD') }} {{ $event->date?->isoFormat('MMM') }}</span>
				<span class="schedule"> @if(app()->isLocale('fr'))  {{ $event->schedule_fr }} @else {{ $event->schedule_nl }} @endif</span>
			</div>
            @if( $filters->firstWhere('id', $event->filter) ) <span class="filter">
            @if(app()->isLocale('fr')) 
						{{ $filters->firstWhere('id', $event->filter)?->name_fr }}
						@else
						{{ $filters->firstWhere('id', $event->filter)?->name_nl }}
						@endif

            </span>
            @endif
        </div>
        <div class="inside">

        @if ($event->venue_fr)
		<div><strong>{{ __('text.lieu') }}
            
        </strong>
        <div><p>
        @if(app()->isLocale('fr'))  {!! $event->venue_fr !!} @else {!! $event->venue_nl !!} @endif
        </p></div>
        </div>
		@endif

		@if ($event->speaker_fr)
        <div><strong>{{ __('text.intervenant') }}</strong>
        <div><p>
        @if(app()->isLocale('fr'))  {!! $event->speaker_fr !!} @else {!! $event->speaker_nl !!} @endif

        </p></div>
        </div>
		@endif

		@if ($event->website)
        <div><strong>{{ __('text.website') }}</strong>
        <div><a href="{{ $event->website }}" target="_blank">{{ $event->website }}</a></div>
         </div>
		@endif

        </div>
    </div>
    </div>
    </div>
    </section>
    @if($event->places > 0)	
<section class="form" id="sect-subscribe">
    <div class="wrapper">
        <h2>{{ __('text.subscribe') }}</h2>
       
        <div class="intro">
        @if(app()->isLocale('fr'))  {!! $content->formintro_fr !!} @else {!! $content->formintro_nl !!} @endif
        </div>
       
		@if ($event->participants->count() < $event->places)
 
		@livewire('register', ['event' => $event])
        
		@else
			<h4>{{ __('text.noplaces') }}</h4>
		@endif
       
	
       
    </div>
</section>
@endif
@endsection