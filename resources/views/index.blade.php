@extends('_shared.master')

@section('content')

	<h2>Hello, Boss.</h2>
	<p>I would like to report you. The piping material in our project , it seem like this</p>

	<ul>
		<li>Total Required Material {{ $req_total }}pcs</li>
		<li>Total Purchased Material {{ $po }} pcs</li>
		<li>Total Deliveried Material  pcs</li>
	</ul>

@endsection