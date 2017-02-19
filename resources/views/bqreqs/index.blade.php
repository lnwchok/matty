@extends('_shared.master')

@section('content')
	<h1>{{ $pj->name }}</h1>
	<p>{{ $pj->descr }}</p>
	<h2>Material Take-Off</h2>
	<p style="text-align: right">Total : {{ $count }} record(s)</p>
	<table class="table table-condensed table-hover">
		<thead>
			<tr>
				<th>Category</th>
				<th>Code</th>
				<th>Size-1</th>
				<th>Size-2</th>
				<th>Description</th>
				<th>Qty</th>
			</tr>
		</thead>
		<tbody>
			@foreach($bqs as $bq)
			<tr>
				<td>{{ $bq->bqcat }}</td>
				<td>{{ $bq->bqcode }}</td>
				<td>{{ $bq->size1 }}</td>
				<td>{{ $bq->size2 }}</td>
				<td>{{ $bq->descr }}</td>
				<td>{{ $bq->qty }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection