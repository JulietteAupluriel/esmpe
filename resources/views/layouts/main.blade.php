<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Etterbeek se mobilise pour l'emploi</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/cookieBubble.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.png') }}"></link>
    <meta name="description" content=""/>
	@livewireStyles
</head>

<body>
	@include('includes.header')
	<main>
		@yield('content')
    </main>
	@include('includes.footer')
	
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/cookieBubble.min.js') }}"></script>
      <script src="{{ asset('js/global.js') }}"></script>
	@livewireScripts


</body>

</html>