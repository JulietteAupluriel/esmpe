@extends('layouts.frontend')

@section('content')

<section class="page_title">
	<div class="headings no_background" style="background-color:
	@switch($event->commune)
		@case(1150) #fca91c @break
		@case(1160) #ec008d @break
		@case(1170) #6fcee5 @break
		@case(1200) #acc337 @break
	@endswitch">
		<div class="calendar">
			<span class="day">{{ $event->date?->isoFormat('DD') }}</span>
			<br>
			<span class="month">{{ $event->date?->isoFormat('MMM') }}</span>
		</div>
		<h1>{{ $event->title }}</h1>
		<a href="#form" class="btn to_form">S'inscrire<span>↓</span></a>
	</div>
</section>

<section class="show">
	<div class="content">
		<a href="{{ route('programme') }}" class="back">← Retour</a>
		{!! $event->body !!}
	</div>
	<aside class="info">
		<a href="{{ route('programme', ['commune' => $event->commune]) }}" class="commune"><div class="dot" style="background-color: 
			@switch($event->commune)
			@case(1150) #fca91c @break
			@case(1160) #ec008d @break
			@case(1170) #6fcee5 @break
			@case(1200) #acc337 @break
			@endswitch"></div><span>{{ $event->commune }}</span>| 
			@switch($event->commune)
			@case(1150) Woluwe-Saint-Pierre @break
			@case(1160) Auderghem @break
			@case(1170) Watermael-Boitsfort @break
			@case(1200) Woluwe-Saint-Lambert @break
			@endswitch
		</a>
		<h3>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
				<path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/>
				<path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z"/>
			</svg>
			{{ $filters->firstWhere('id', $event->filter)?->name }}
		</h3>
		@if ($event->schedule)
			<h3>Horaire</h3>
			<p>{{ $event->schedule }}</p>
		@endif
		@if ($event->venue)
			<h3>Lieu</h3>
			<p>{!! $event->venue !!}</p>
		@endif
		@if ($event->speaker)
			<h3>Intervenant(s)</h3>
			<p>{!! $event->speaker !!}</p>
		@endif
		@if ($event->website)
			<h3>Site web</h3>
			<a href="//{{ $event->website }}" target="_blank">{{ $event->website }}</a>
		@endif
	</aside>
</section>

<section id="form">
	<h2>S'inscrire</h2>
	@if (today()->format('y-m-d') >= date('22-02-28'))
		<p>Une fois le formulaire envoyé, un message vous parviendra dans la boîte mail dont vous avez renseigné l’adresse précisant que votre demande nous est parvenue mais que cela ne signifie pas que vous êtes inscrit. La commune organisatrice de l'activité vous confirmera ensuite personnellement votre inscription définitive soit par mail, soit par téléphone.</p>
		<span>* Tous les champs sont obligatoires</span>
		@if ($event->participants->count() < $event->places)
			@livewire('register', ['event' => $event])
		@else
			<h4>Désolé, il n'y a actuellement plus de places disponibles pour cette formation.</h4>
		@endif
	@else
		<h4>Les inscriptions en ligne seront ouvertes à partir du 28 février 2022.</h4>
	@endif
</section>
	
@endsection