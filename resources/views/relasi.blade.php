<tbody>
	@foreach($relasi as $a)
	<ul>
		<li>{{ $a->type }}</li>
		<li>{{ $a->p_name }}</li>
		<li>{{ $a->no_inv }}</li>
		<li>{{ $a->date }}</li>
		<li>{{ $a->address }}</li>
		<li>{{ $a->mail }}</li>
		<li>{{ $a->client }}</li>
		<li>{{ $a->indate }}</li>
		<li>{{ $a->norek }}</li>
		<li>{{ $a->amount }}</li>
		<ul>
			@foreach($a->subinvoice as $t)
			<li>{{ $t->job_desc }} >> {{ $t->vol }} : {{ $t->total }}</li>
			@endforeach
		</ul>
		<li>{{ $a->totalcost }}</li>
		<li>{{ $a->totaltax }}</li>
		<li>{{ $a->stotal }}</li>
	</ul>
	@endforeach
</tbody>