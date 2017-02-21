<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Test page!!!</h1>

	<!-- @if (isset($msg)) -->
		<h2> {{ $msg }} </h2>
		<h2> {{ session::get('msg') }} </h2>
	<!-- @endif -->

</body>
</html>