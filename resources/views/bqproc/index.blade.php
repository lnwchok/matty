@extends('_shared.master')

@section('content')
	<h2>Material Procurement</h2>

	<div class="row text-right">
		<div class="col-md-9">
			<p><a href="{{ url('/bqprocs/import') }}" class="btn btn-danger" role="button">UPDATE</a></p>			
		</div>
		<div class="col-md-3">
			<p style="padding-right: 5px">Total : {{ $count }} record(s)</p>
		</div>
	</div>

	<table class="table table-condensed table-hover">
		<thead>
			<tr>
				<th style='text-align: center'>PO&nbsp;No.</th>
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
				<td style='text-align: center'>{{ $bq->pono }}</td>
				<td>{{ $bq->code }}</td>
				<td style='text-align: center'>{{ $bq->size1 }}</td>
				<td style='text-align: center'>{{ $bq->size2 }}</td>
				<td>{{ $bq->descr }}</td>
				<td style='text-align: right'>{{ $bq->qty }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection