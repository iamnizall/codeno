@extends('layouts.main')

@section('content')

<div class="container">
	<div class="card">

		@php
		$scode = 'BBBAIDJA';
		if($npo == null){
			$hs = 'KEB-00' . (0 + 1) . date('/m/Y');
		}else {
			$hs = 'KEB-00' . ($npo->id + 1) . date('/m/Y');
		}
		@endphp

		<div class="card-header"><b><i class="fas fa-shopping-bag"></i> Create New Invoice</b></div>
		<div class="card-body">
			<form method="POST" action="{{ route('invoice.store') }}">
				@csrf
				{{-- row 1 --}}
				<div class="form-row">
					{{-- no invoice --}}
					<div class="col">
						<input id="no_inv" type="text" class="form-control" name="no_inv" readonly value="{{ $hs }}">
					</div>
					{{-- s_code --}}
					<div class="col">
						<input id="s_code" type="text" class="form-control" name="s_code" value="{{ $scode }}" readonly>
					</div>
					{{-- date --}}
					<div class="col">
						<input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ old('date') }}" placeholder="Due Date">

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
						<input id="no_po" type="text" class="form-control" name="no_po" value="{{ $hs }}" readonly>
					</div>
					{{-- address --}}
					<div class="col">
						<input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" placeholder="Address">

						@if ($errors->has('address'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('address') }}</strong>
						</span>
						@endif
					</div>
					{{-- email --}}
					<div class="col">
						<input id="mail" type="text" class="form-control{{ $errors->has('mail') ? ' is-invalid' : '' }}" name="mail" value="{{ old('mail') }}" placeholder="Email">

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
						<input id="client" type="text" class="form-control{{ $errors->has('client') ? ' is-invalid' : '' }}" name="client" value="{{ old('client') }}" placeholder="Client Name">

						@if ($errors->has('client'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('client') }}</strong>
						</span>
						@endif
					</div>
					{{-- paayment --}}
					<div class="col">
						<input id="payment" type="text" class="form-control{{ $errors->has('payment') ? ' is-invalid' : '' }}" name="payment" value="{{ old('payment') }}" placeholder="Down Payment">

						@if ($errors->has('payment'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('payment') }}</strong>
						</span>
						@endif
					</div>
					{{-- tax --}}
					<div class="col">
						<select class="form-control">
							<option>Tax</option>
							<option>PPN 10%</option>
							<option>PPh 21 (freelancer NPWP)</option>
							<option>PPh 21 (freelancer non NPWP)</option>
							<option>PPh 21 (expert NPWP)</option>
							<option>PPh 21 (expert non NPWP)</option>
							<option>PPh 23 (vendor)</option>
						</select>
					</div>
				</div>

				<div class="form-row mt-4">
					{{-- account --}}
					<div class="col">
						<input id="account" type="text" class="form-control" name="account" id="account" readonly>
					</div>
					{{-- date --}}
					<div class="col">
						<input type="text" class="form-control" readonly placeholder="Invoice Date">
					</div>
					<div class="col">
						<select id="norek" class="form-control">
							<option value="">No. Rekening</option>
							<option value="070 1137302">IDR</option>
							<option value="0902211411">Dollar</option>
							<option value="090 2212221">Euro</option>
							<option value="3590119073">IDR(Danamon Bank)</option>
							<option value="financedept@bintang‐35.net">Paypal</option>
						</select>
					</div>
				</div>
				{{-- row 2 --}}
				<div class="card mt-4">
					<div class="card-body">
						<div class="form-row mt">
							{{-- job desc --}}
							<div class="col">
								<input id="job_desc" type="text" class="form-control{{ $errors->has('job_desc') ? ' is-invalid' : '' }}" name="job_desc" value="{{ old('job_desc') }}" placeholder="Job Description">

								@if ($errors->has('job_desc'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('job_desc') }}</strong>
								</span>
								@endif
							</div>
							{{-- vol --}}
							<div class="col">
								<input id="vol" type="text" class="form-control{{ $errors->has('vol') ? ' is-invalid' : '' }}" name="vol" value="{{ old('vol') }}" placeholder="Volume">

								@if ($errors->has('vol'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('vol') }}</strong>
								</span>
								@endif
							</div>
							{{-- unit --}}
							<div class="col">
								<input id="unit" type="text" class="form-control{{ $errors->has('unit') ? ' is-invalid' : '' }}" name="unit" value="{{ old('unit') }}" placeholder="Unit">

								@if ($errors->has('unit'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('unit') }}</strong>
								</span>
								@endif
							</div>
							{{-- price --}}
							<div class="col">
								<input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" placeholder="Unit Price IDR">

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
									<input type="text" readonly class="form-control-plaintext stotal"  value="0">
								</div>
							</div>
							<hr>
							{{-- pph --}}
							<div class="form-group row">
								<label for="staticEmail" class="col-sm-6 col-form-label">pph 23 (-2%)</label>
								<div class="col-sm-6">
									<input type="text" id="fax" readonly class="form-control-plaintext stotal" value="0">
								</div>
							</div>
							<hr>
							{{-- grand total --}}
							<div class="form-group row">
								<label for="staticEmail" class="col-sm-6 col-form-label"><b>Grand Total</b></label>
								<div class="col-sm-6">
									<input type="text" id="stotal" readonly class="form-control-plaintext stotal" value="0">
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

			var fax = total * 0.02;
			$('#fax').val(fax);

			var stotal = total - fax;
			$("#stotal").val(stotal);
		});

		$('#norek').on('change', function(){
			var norek = $(this). children("option:selected"). val()
			$('#account').val(norek);

		});
	});
</script>
@endsection