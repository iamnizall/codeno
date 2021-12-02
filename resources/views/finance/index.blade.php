@extends('layouts.main')

@section('content')

<div class="container">
	<div class="row">

		{{-- invoice --}}
		<div class="col-sm">
			<div class="card">
				<div class="card-body">
					<h5><i class="fas fa-shopping-bag"></i> Invoice</h5>
					<h2 class="d-inline">{{ $invc }}</h2> 
					<span class="badge badge-success float-right d-inline">+3.5 %</span>
				</div>
			</div>
		</div>

		{{-- bast --}}
		<div class="col-sm">
			<div class="card">
				<div class="card-body">
					<h5><i class="fas fa-archive"></i> BAST</h5>
					<h2 class="d-inline">value</h2> 
					<span class="badge badge-success float-right d-inline">+3.5 %</span>
				</div>
			</div>
		</div>

		{{-- project --}}
		<div class="col-sm">
			<div class="card">
				<div class="card-body">
					<h5><i class="fas fa-file-code"></i> Project</h5>
					<h2 class="d-inline">{{ $invcvol }}</h2> 
					<span class="badge badge-success float-right d-inline">+3.5 %</span>
				</div>
			</div>
		</div>

	</div>
	<div class="card mt-4">
		<div class="card-header"><i class="fas fa-file-code"></i> <b>Project</b></div>
		<div class="card-body">
			<h1>chart</h1>
		</div>
	</div>
</div>

@endsection