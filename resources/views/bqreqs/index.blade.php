@extends('_shared.master')

@section('content')
	<h1>{{ $pj->name }}</h1>
	<p>{{ $pj->descr }}</p>
	<h2>Material Take-Off</h2>
	<p style="text-align: right">Total : {{ $count }} record(s)</p>
	<table class="table table-condensed table-hover">
		<thead>
			<tr>
				<th style='text-align: center'>GRP</th>
				<th style='text-align: center'>CODE</th>
				<th style='text-align: center'>SIZE-1</th>
				<th style='text-align: center'>SIZE-2</th>
				<th style='text-align: center'>DESCRIPTION</th>
				<th style='text-align: center'>QT'Y</th>
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