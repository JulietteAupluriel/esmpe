<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.png') }}"></link>

	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ESMPE</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<style>
		.input-group label{ display:inline-block; font-weight:bold; margin: 5px 20px!important}
	</style>
	<script src="{{ asset('js/app.js') }}" crossorigin="anonymous"></script>

	<script src="https://cdn.tiny.cloud/1/96egb2icoog9az1m34p5z3xgwe1ctfealo64o9jhoj7o1sit/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>	<script>
		tinymce.init({
			selector: 'textarea',
			plugins: 'link lists hr wordcount emoticons paste code',
			toolbar: 'h1 h2 hr bold italic numlist bullist link emoticons forecolor code',
			menubar: false,
			paste_as_text: true,
		})
	</script>
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">

	@auth
	
             
                @include('layouts.navigation')
                <!-- Navigation Links -->
             
              
	@endauth

	<main class="container-lg my-4">
		@yield('content')

		
	</main>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>