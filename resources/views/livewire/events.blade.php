<section class="events">
<div id="sect-events-top">
	
	<div class="wrapper">
		<h1>{{ __('text.leprogramme') }}</h1>
	
	<div class="filters">
		<h5>{{ __('text.filtrer') }}</h5>


		<button wire:click="$set('tag', 'none')" class="filter {{ $tag === 'none' ? 'active' : '' }}">{{ __('text.nofilter') }}</button>
		@foreach ($filters as $item)
			<button wire:click="$set('tag', {{ $item->id }})" class="filter {{ $tag === $item->id ? 'active' : '' }}">
			
			@if(app()->isLocale('FR'))  {{ $item->name_fr }} @else {{ $item->name_nl }} @endif
			</button>
		@endforeach
	</div>

</div>
</div>

<div class="events">
<div class="decorations">
<img class="deco7" src="{{ asset('img/deco7.svg') }}"/>
<img class="deco5" src="{{ asset('img/deco5.svg') }}"/>
<img class="deco6" src="{{ asset('img/deco6.svg') }}"/>
</div>
<div class="wrapper">

	
	
	
	@forelse ($events as $item)
	<div class="event"><a href="{{ route('events.show', $item) . '-' . Str::slug($item->title_fr) }}" class="pill">
			<div class="date"> 
				<?php 
				$month = $item->date?->isoFormat('MMM'); 
				$month = substr($month, 0, -1);
				?>
				<span class="day">{{ $item->date?->isoFormat('DD') }} <span class="month">{{ $month }}</span></span>
				<span class="schedule">@if(app()->isLocale('FR'))  {{ $item->schedule_fr }} @else {{ $item->schedule_nl }} @endif</span>
			</div>

			<div class="title">
				
					<h4>    @if(app()->isLocale('FR'))  {{ $item->title_fr }} @else {{ $item->title_nl }} @endif
 </h4>
				
					@if( $filters->firstWhere('id', $item->filter) )
					<span class="filter">
					@if(app()->isLocale('FR')) 
						{{ $filters->firstWhere('id', $item->filter)?->name_fr }}
						@else
						{{ $filters->firstWhere('id', $item->filter)?->name_nl }}
						@endif
						</span>
					@endif
					

				
			</div>
			</a>
		</div>

		
	@empty
		<h3>
		{{ __('text.noresult') }}
		</h3>	
	@endforelse
	
</div>
</div>
</section>