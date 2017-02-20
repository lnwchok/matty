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

</head>
<body>

    <div class="container">
        @yield('content')
    </div>
 
    @include('_shared.footer')

</body>
</html>