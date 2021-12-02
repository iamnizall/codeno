@extends('layouts.main')

@section('content')

<div class="container">
	<div class="card">
		<div class="card-header mb-2">
			<h4 class="d-inline"><i class="fas fa-shopping-bag"></i> <b>Invoice</b></h4> 
			<a href="{{ url('http://127.0.0.1:8000/finance/invoice/create') }}" class="btn btn-primary float-right d-inline"><i class="fas fa-plus"></i> Create Invoice</a>
		</div>

		<table class="table">
			<thead class="thead-light">
				<tr>
					<th scope="col">No.</th>
					<th scope="col">No. Ivoice</th>
					<th scope="col">Client Name</th>
					<th scope="col">Project Name</th>
					<th scope="col">Employee Name</th>
					<th scope="col">Cost in IDR</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@php
				$i = 1;
				@endphp
				@foreach ($invc as $inv)

				<tr>
					<th scope="row">{{ $i }}</th>
					<td>{{ $inv->no_inv }}</td>
					<td>{{ $inv->client }}</td>
					<td>{{ $inv->job_desc }}</td>
					<td>{{ $inv->signature }}</td>
					<td>IDR {{ ($inv->price)*($inv->vol) }},-</td>
					<td>
						<a href="{{ route('invoice.edit', $inv->id) }}" class="btn btn-info d-inline"><i class="fas fa-edit"></i></a>
						<form method="POST" action="{{ route('invoice.destroy', $inv->id) }}" class="d-inline">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
						</form>
					</td>
				</tr>
				@php
				$i++;
				@endphp
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
