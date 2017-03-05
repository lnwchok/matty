@extends('_shared.master')

@section('content')

	<div class="row text-right">

	<p><a href="{{ url('/bqprocs/import') }}" class="btn btn-danger" role="button">UPDATE</a></p>		
		
			<p style="padding-right: 5px">Total : {{ $count }} record(s)</p>

	</div>

	<table class="table table-condensed table-hover">
		<thead>
			<tr>
				<th>PO&nbsp;No.</th>
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
				<td>{{ $bq->pono }}</td>
				<td>{{ $bq->code }}</td>
				<td class="text-center">{{ $bq->size1 }}</td>
				<td class="text-center">{{ $bq->size2 }}</td>
				<td>{{ $bq->descr }}</td>
				<td class="text-right">{{ number_format($bq->qty, 0, '.', ',') }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection