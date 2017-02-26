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
        body {
            font: 400 14px sans-serif;
            line-height: 1.6;
        }
        th {
            text-align: center;
        }
        /* Remove the navbar's default margin-bottom and rounded borders */ 
        .navbar {
          margin-bottom: 0;
          border-radius: 0;
        }
        
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {height: 800px}
        
        /* Set gray background color and 100% height */
        .sidenav {
          background-color: #f1f1f1;
          height: 100%;
        }
        
        .list-unstyled {
            margin-left: 15px;
        }

        /* Set black background color, white text and some padding */
        footer {
          background-color: #555;
          color: white;
          padding: 15px;
        }
        
        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
          .sidenav {
            height: auto;
            padding: 15px;
          }
          .row.content {height: auto;} 
        }
    </style>

</head>
<body>

@include('_shared.nav')

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            @include('_shared.sb_cat')
            @include('_shared.sb_customize')
        </div>

        <div class="col-sm-10">
            @yield('content')
        </div>  
    </div>
</div>

 
    @include('_shared.footer')

</body>
</html>