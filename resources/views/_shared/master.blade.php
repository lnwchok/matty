<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MATTY&nbsp;::&nbsp;{{ $pj->name }}
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

    <style type="text/css">
        footer {
            color: #555;
            border-top: 2px solid #ddd;
            padding-top: 20px;
            padding-bottom: 20px;
        }
        a.list-group-item {
            border-radius: 6px;
            display: inline-block;
            padding: 3px 15px;
        }
        th {
            text-align: center;
            font-size: larger;
        }

/*        .td {
            padding-left: 30px;
            padding-right: 30px;
        }
        .table .td1 { width: 100px; }
        .table .td2 { 
            width: 100px; 
            padding-right: 20px;
        }
        .table .td3 { width: 120px; }*/


    </style>

</head>
<body>

@include('_shared.nav')

    <div class="container">
        @if(isset($title))
            <div class="page-header">
                <h2>{{ $title }}</h2>
            </div>
        @endif

        @include('_shared.sb_customize')
        
        @yield('content')

    </div>

    @include('_shared.footer')

</body>
</html>