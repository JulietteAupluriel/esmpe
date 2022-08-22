<header>
	<a href="{{ route('index') }}" class="logo"><img src="{{ asset('img/logo.jpg') }}" /></a>
<nav>
	<ul class="nav">
		<li class="{{ request()->routeIs('index') ? 'active' : '' }}"><a href="{{ route('index') }}">{{ __('text.home') }}</a></li>
		@if($content->hideprog==='non') <li class="{{ request()->routeIs('programme') ? 'active' : '' }}"><a href="{{ route('programme') }}">{{ __('text.programme') }}</a></li>@endif
		<li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{ route('about') }}">{{ __('text.about') }}</a></li>

	</ul>
	<ul class="lang">
		<li class="{{ app()->isLocale('fr') ? 'active' : '' }}" ><a href="/locale/fr" >FR</a></li>
        <li class="{{ app()->isLocale('nl') ? 'active' : '' }}" ><a href="/locale/nl"  >NL</a></li>         
     
	</ul>
</nav>


<a href="javascript:void(0);" class="icon" onclick="toResponsiveMenu()">
            <div class="menu-burger" id="menu-burger" style="display: flex;">
                <div></div>
            </div>
        </a>
        <div class="responsive-menu" id="responsive-menu">
            <div class="moblogo">
			<a href="{{ route('index') }}"><img src="{{ asset('img/logo.jpg') }}" /></a>

            </div>
            <div class="mobnav">
                <ul><li class="{{ request()->routeIs('index') ? 'active' : '' }}"><a href="{{ route('index') }}">{{ __('text.home') }}</a></li>
                @if($content->hideprog==='non') <li class="{{ request()->routeIs('programme') ? 'active' : '' }}"><a href="{{ route('programme') }}">{{ __('text.programme') }}</a></li>@endif
						<li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{ route('about') }}">{{ __('text.about') }}</a></li>
				</ul>
				<div class="lang">
                    <ul class="">
                <li class="{{ app()->isLocale('fr') ? 'active' : '' }}" ><a href="/locale/fr">FR</a></li>
                <li class="{{ app()->isLocale('nl') ? 'active' : '' }}" ><a href="/locale/nl">NL</a></li>
				</ul>
</div>
            </div>
        </div>
        <!-- MOBILE NAV -->



</header>