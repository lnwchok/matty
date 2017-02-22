@extends('_shared.master')

@section('content')
	<h1>{{ $pj->name }}</h1>
	<p>{{ $pj->descr }}</p>

	<div class="row">
		<div class="col-md-8">
			<p><h3>Material Procurement</h3></p>			
		</div>
		<div class="col-md-4" style="text-align: right">
			<p><a href="{{ url('/bqprocs/import') }}" class="btn btn-danger" role="button">UPDATE</a></p>
			<p style="text-align: right">Total : {{ $count }} record(s)</p>
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