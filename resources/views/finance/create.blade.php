@extends('layouts.main')

@section('content')

<div class="container">
	<div class="card">
		<div class="card-header"><b><i class="fas fa-shopping-bag"></i> Create New Invoice</b></div>
		<div class="card-body">
			<form method="POST" action="{{ route('invoice.store') }}">
				@csrf
				{{-- row 1 --}}
				<div class="form-row">
					{{-- no invoice --}}
					<div class="col">
						<input id="no_inv" type="text" class="form-control{{ $errors->has('no_inv') ? ' is-invalid' : '' }}" name="no_inv" value="{{ old('no_inv') }}" placeholder="No. Invoice" required>

						@if ($errors->has('no_inv'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('no_inv') }}</strong>
						</span>
						@endif
					</div>
					{{-- s_code --}}
					<div class="col">
						<input id="s_code" type="text" class="form-control{{ $errors->has('s_code') ? ' is-invalid' : '' }}" name="s_code" value="{{ old('s_code') }}" placeholder="Swift Code" required>

						@if ($errors->has('s_code'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('s_code') }}</strong>
						</span>
						@endif
					</div>
					{{-- date --}}
					<div class="col">
						<input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ old('date') }}" placeholder="Due Date" required>

						@if ($errors->has('date'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('date') }}</strong>
						</span>
						@endif
					</div>
				</div>

				<div class="form-row mt-4">
					{{-- no po --}}
					<div class="col">
						<input id="no_po" type="text" class="form-control{{ $errors->has('no_po') ? ' is-invalid' : '' }}" name="no_po" value="{{ old('no_po') }}" placeholder="No. PO" required>

						@if ($errors->has('no_po'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('no_po') }}</strong>
						</span>
						@endif
					</div>
					{{-- address --}}
					<div class="col">
						<input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" placeholder="Address" required>

						@if ($errors->has('address'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('address') }}</strong>
						</span>
						@endif
					</div>
					{{-- email --}}
					<div class="col">
						<input id="mail" type="text" class="form-control{{ $errors->has('mail') ? ' is-invalid' : '' }}" name="mail" value="{{ old('mail') }}" placeholder="Email" required>

						@if ($errors->has('mail'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('mail') }}</strong>
						</span>
						@endif
					</div>
				</div>

				<div class="form-row mt-4">
					{{-- client name --}}
					<div class="col">
						<input id="client" type="text" class="form-control{{ $errors->has('client') ? ' is-invalid' : '' }}" name="client" value="{{ old('client') }}" placeholder="Client Name" required>

						@if ($errors->has('client'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('client') }}</strong>
						</span>
						@endif
					</div>
					{{-- paayment --}}
					<div class="col">
						<input id="payment" type="text" class="form-control{{ $errors->has('payment') ? ' is-invalid' : '' }}" name="payment" value="{{ old('payment') }}" placeholder="Down Payment" required>

						@if ($errors->has('payment'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('payment') }}</strong>
						</span>
						@endif
					</div>
					{{-- tax --}}
					<div class="col">
						<input type="text" class="form-control" readonly placeholder="Tax">
					</div>
				</div>

				<div class="form-row mt-4">
					{{-- account --}}
					<div class="col">
						<input id="account" type="text" class="form-control{{ $errors->has('account') ? ' is-invalid' : '' }}" name="account" value="{{ old('account') }}" placeholder="Account" required>

						@if ($errors->has('account'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('account') }}</strong>
						</span>
						@endif
					</div>
					{{-- date --}}
					<div class="col">
						<input type="date" class="form-control" readonly placeholder="Invoice Date">
					</div>
					<div class="col">
						<input type="text" class="form-control" readonly placeholder="No. Rekening">
					</div>
				</div>
				{{-- row 2 --}}
				<div class="card mt-4">
					<div class="card-body">
						<div class="form-row mt">
							{{-- job desc --}}
							<div class="col">
								<input id="job_desc" type="text" class="form-control{{ $errors->has('job_desc') ? ' is-invalid' : '' }}" name="job_desc" value="{{ old('job_desc') }}" placeholder="Job Description" required>

								@if ($errors->has('job_desc'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('job_desc') }}</strong>
								</span>
								@endif
							</div>
							{{-- vol --}}
							<div class="col">
								<input id="vol" type="text" class="form-control{{ $errors->has('vol') ? ' is-invalid' : '' }}" name="vol" value="{{ old('vol') }}" placeholder="Volume" required>

								@if ($errors->has('vol'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('vol') }}</strong>
								</span>
								@endif
							</div>
							{{-- unit --}}
							<div class="col">
								<input id="unit" type="text" class="form-control{{ $errors->has('unit') ? ' is-invalid' : '' }}" name="unit" value="{{ old('unit') }}" placeholder="Unit" required>

								@if ($errors->has('unit'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('unit') }}</strong>
								</span>
								@endif
							</div>
							{{-- price --}}
							<div class="col">
								<input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" placeholder="Unit Price IDR" required>

								@if ($errors->has('price'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('price') }}</strong>
								</span>
								@endif
							</div>
							<div class="col">
								<input id="total" type="text" class="form-control" readonly placeholder="Amount IDR">
							</div>
						</div>
					</div>
				</div>

				{{-- row 3 --}}

				<div class="row mt-4">
					<div class="col">
						<div class="card">
							<div class="card-body">
								<h2><i class="fas fa-print"></i> Print PDF?</h2>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card-body">
							
							{{-- total --}}
							<div class="form-group row">
								<label for="staticEmail" class="col-sm-6 col-form-label">Total Cost</label>
								<div class="col-sm-6">
									<input type="text" id="stotal" readonly class="form-control-plaintext stotal"  value="0">
								</div>
							</div>
							<hr>
							{{-- pph --}}
							<div class="form-group row">
								<label for="staticEmail" class="col-sm-6 col-form-label">pph 23 (-2%)</label>
								<div class="col-sm-6">
									<input type="text" readonly class="form-control-plaintext stotal" value="0">
								</div>
							</div>
							<hr>
							{{-- grand total --}}
							<div class="form-group row">
								<label for="staticEmail" class="col-sm-6 col-form-label"><b>Grand Total</b></label>
								<div class="col-sm-6">
									<input type="text" readonly class="form-control-plaintext stotal" value="0">
								</div>
							</div>
							<hr>
							
						</div>
					</div>
				</div>
				<div style="text-align: center;">
					<button style="width: 200px;" type="submit" class="btn btn-primary mx-auto">save</button>
				</div>

			</form>
		</div>
	</div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#vol, #price").keyup(function() {
			var price  = $("#price").val();
			var vol = $("#vol").val();

			var total = parseInt(price) * parseInt(vol);
			$("#total").val(total);
			$("#stotal").val(total);
		});
	});
</script>
@endsection