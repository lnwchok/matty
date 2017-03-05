@if(isset($filters))
	<div>
	    <h4>Filter</h4>   
		<div class="list-group">
	    	@foreach($filters as $f)
	    		<a href="?filter={{ $f['descr'] }}" class="list-group-item">{{ $f['descr'] }}</a>
	    	@endforeach
	    	<a href="{{ url()->current() }}" class="list-group-item">Clear</a>
	    </div>     
	</div>
@endif