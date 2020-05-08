

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('titre')</title>

	<link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="{{asset('css/error.css')}}" />


</head>

<body>

	<div id="notfound">
		<div class="notfound">
            
            @yield('contenu')

		</div>
	</div>

</body>

</html>
