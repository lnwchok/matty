@extends('_shared.master')

@section('content')
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
				<td class="text-center">{{ $bq->size1 }}</td>
				<td class="text-center">{{ $bq->size2 }}</td>
				<td>{{ $bq->descr }}</td>
				<td class="text-right">{{ number_format($bq->req_qty, 0, '.', ',') }}</td>
				<td class="text-right">{{ number_format($bq->po_qty, 0, '.', ',') }}</td>
				<td class="text-right">{{ number_format($bq->diff, 0, '.', ',') }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection