<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Matty::</title>

    <!-- Referencing Bootstrap CSS that is hosted locally -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />

</head>
<body>

    <div class="container">
      <div class="row">
        <h2>This template is using locally hosted Bootstrap!</h2>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

    <!-- Referencing Bootstrap JS that is hosted locally -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
</body>
</html>