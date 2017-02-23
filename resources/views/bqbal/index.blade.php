@extends('_shared.master')

@section('content')
	<h1>{{ $pj->name }}</h1>
	<p>{{ $pj->descr }}</p>
	<h2>Material Balance</h2>
	<table class="table table-condensed table-hover">
		<thead>
			<tr>
				<th>GRP</th>
				<th>CODE</th>
				<th>SIZE-1</th>
				<th>SIZE-2</th>
				<th>DESCRIPTION</th>
				<th>QT'Y</th>
			</tr>
		</thead>
		<tbody>
			@foreach($bqs as $bq)
			<tr>
				<td style='text-align: center'>{{ $bq->bqcat }}</td>
				<td>{{ $bq->bqcode }}</td>
				<td style='text-align: center'>{{ $bq->size1 }}</td>
				<td style='text-align: center'>{{ $bq->size2 }}</td>
				<td>{{ $bq->descr }}</td>
				<td style='text-align: right'>{{ $bq->qty }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection