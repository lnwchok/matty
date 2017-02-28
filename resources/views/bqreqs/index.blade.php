@extends('_shared.master')

@section('content')

	<p class="text-right">Total : {{ $count }} record(s)</p>
	<table class="table table-condensed table-hover">
		<thead>
			<tr>
				<th>CODE</th>
				<th>SIZE-1</th>
				<th>SIZE-2</th>
				<th>DESCRIPTION</th>
				<th>QTY</th>
			</tr>
		</thead>
		<tbody>
			@foreach($bqs as $bq)
			<tr>
				<td>{{ $bq->bqcode }}</td>
				<td class="text-center">{{ $bq->size1 }}</td>
				<td class="text-center">{{ $bq->size2 }}</td>
				<td>{{ $bq->descr }}</td>
				<td class="text-right">{{ $bq->qty }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection