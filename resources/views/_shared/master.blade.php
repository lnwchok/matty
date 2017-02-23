<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
    	@if(isset($pj))
    		{{ $pj->name }}
        @else
            MATTY
    	@endif    	
    &nbsp;::&nbsp; 
    	@if(isset($title))
    		{{ $title }}
    	@endif
    </title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

    <style type="text/css">
        body {
            font: 400 15px Lato, sans-serif;
            line-height: 1.8;
        }
        th {
            text-align: center;
        }
    </style>

</head>
<body>

    <div class="container-fluid">
        @yield('content')
    </div>
 
    @include('_shared.footer')

</body>
</html>