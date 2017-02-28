@if(isset($custs))
	<div>
	    <h4>Customize</h4>
	    <div class="list-group">
	    	@foreach($custs as $c)
	    		<a href="{{ $c['link'] }}" class="list-group-item">{{ $c['name'] }}</a>
	    	@endforeach
	    </div>
	</div>
@endif