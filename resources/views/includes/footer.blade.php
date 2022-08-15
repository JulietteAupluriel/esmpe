<footer>
<div class="copyright">
	<span>{{ __('text.maintitle') }} 2022</span>
</div>
<div class="footNav">
	<ul>
	<li class="{{ request()->routeIs('index') ? 'active' : '' }}"><a href="{{ route('index') }}">{{ __('text.home') }}</a></li>
		<li class="{{ request()->routeIs('programme') ? 'active' : '' }}"><a href="{{ route('programme') }}">{{ __('text.programme') }}</a></li>
		<li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{ route('about') }}">{{ __('text.about') }}</a></li>
		<li class="{{ request()->routeIs('legal') ? 'active' : '' }}"><a href="{{ route('legal') }}">{{ __('text.legal') }}</a></li>

	</ul>
</div>

</footer>