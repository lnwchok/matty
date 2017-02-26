@extends('_shared.master')

@section('content')
	<h2>Material Balance</h2>

	<table class="table table-condensed table-hover">
		<thead>
			<tr>
				<th>CODE</th>
				<th>SIZE-1</th>
				<th>SIZE-2</th>
				<th>DESCRIPTION</th>
				<th>REQ</th>
				<th>PO</th>
				<th>(Diff)</th>
			</tr>
		</thead>
		<tbody>
			@foreach($bqs as $bq)
			<tr>
				<td><a href="?item={{ $bq->bqcode }}">{{ $bq->bqcode }}</a></td>
				<td style='text-align: center'>{{ $bq->size1 }}</td>
				<td style='text-align: center'>{{ $bq->size2 }}</td>
				<td>{{ $bq->descr }}</td>
				<td style='text-align: right'>{{ $bq->req_qty }}</td>
				<td style='text-align: right'>{{ $bq->po_qty }}</td>
				<td style='text-align: right'>{{ $bq->diff }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection