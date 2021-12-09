@extends('layouts.main2')

@section('content')

<div class="container">
    <div class="card">


        <div class="card-header"><i class="nav-icon fab fa-buffer"></i> Create New BAST</div>
        <div class="card-body">
            <form action="" method="post">
                {{-- row 1 --}}
				<div class="form-row">
					{{-- no bast --}}
					<div class="col">		
						<label for="no_bast">No. Bast</label>
						<input id="no_bast" type="text" class="form-control" name="no_bast" readonly value="">
					</div>
					{{-- type of work --}}
					<div class="col">
						<label for="t_work">Type of Work</label>
						<input id="t_work" type="text" class="form-control" name="t_work" value="" >
					</div>
					{{-- date --}}
					<div class="col">
						<label for="date">Date</label>
						<input id="date" type="text" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ old('date') }}" autocomplete="off" >

						@if ($errors->has('date'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('date') }}</strong>
						</span>
						@endif
					</div>
				</div>

                {{-- row 2 --}}
                <div class="form-row mt-4">
					{{-- no invoice --}}
					<div class="col">
						<label for="no_inv">No. Invoice</label>
						<input id="no_inv" type="text" class="form-control" name="no_inv" value="" readonly>
					</div>
					{{-- project name --}}
					<div class="col">
						<label for="Pname">Project Name</label>
						<input id="Pname" type="text" class="form-control" name="Pname" value="" >
					</div>
					{{-- PIC Client --}}
					<div class="col">
						<label for="pClient">PIC Client</label>
						<input id="pClient" type="text" class="form-control" name="pClient" value="" >
					</div>
				</div>

                {{-- row 3 --}}
                <div class="form-row mt-4">
					{{-- subjek --}}
					<div class="col">
						<label for="perihal">Subject</label>
						<input id="perihal" type="text" class="form-control" name="perihal" value="">
					</div>
					{{-- company name --}}
					<div class="col">
						<label for="Cname">Company Name</label>
						<input id="Cname" type="text" class="form-control" name="Cname" value="" >
					</div>
					{{-- email --}}
					<div class="col">
						<label for="mail">Email</label>
						<input id="mail" type="text" class="form-control{{ $errors->has('mail') ? ' is-invalid' : '' }}" name="mail" value="{{ old('mail') }}" >

						@if ($errors->has('mail'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('mail') }}</strong>
						</span>
						@endif
					</div>
				</div>

				{{-- Table Form --}}
				<div class="card mt-4">
					<div class="card-body">
						<div class="form-row mt">
							{{-- job desc --}}
							<div class="col">
								<label for="job">
									<select name="pilih" id="job" class="form-control label">
										<option value="">Item</option>
										<option value="">Volume</option>
									</select>
								</label>
								<input id="job_desc" type="text" class="form-control" name="job_desc" value="">
							</div>
							{{-- quantity --}}
							<div class="col">
								<label for="Quan" style="margin-top: 14px">Quantity</label>
								<input id="Quan" type="text" class="form-control" name="Quan" value="" >
							</div>
							{{-- unit --}}
							<div class="col">
								<label for="unit" style="margin-top: 14px">Unit</label>
								<input id="unit" type="text" class="form-control" name="unit" value="">
							</div>
							{{-- status --}}
							<div class="col">
								<label for="status" style="margin-top: 14px">Status</label>
									<div class="form-check" style="text-align: center">
										<input class="form-check-input" type="checkbox" value="" id="status" style="">
									</div>
							</div>
						</div>
					</div>
				</div>
				
				{{-- row party --}}
				<div class="row mt-4">
					{{-- tabel party --}}
					<div class="col">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col">
										<label for="text">The First Party</label>
										<input type="text" class="form-control" name="notes" value="{{ old('note') }}" >
									</div>
									<div class="col">
										<label for="signature">The Second Party</label>
										<input id="signature" type="text" class="form-control" name="signature" value="{{ old('signature') }}">
									</div>
								</div>
							</div>
						</div>
					</div>

					{{-- tombol --}}
					<div class="col">
						<div class="text-center mt-4">
							<button style="width: 150px;" type="submit" class="btn btn-primary b-on mx-auto"><i class="far fa-save fa-lg"></i> save</button>
							<button class="btn btn-primary d-none b-of" type="button" disabled>
								<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
								Loading...
							</button>
						</div>
					</div>
				</div>

            </form>
        </div>

    </div>
</div>

@endsection