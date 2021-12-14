@extends('layouts.main')

@section('content')

<div class="container">
	<div class="card">

		<div class="card-header"><b><i class="fas fa-shopping-bag"></i> Edit Invoice</b></div>
		<div class="card-body">
			<form method="POST" action="{{ route('invoice.update', $invc->id) }}"> @csrf @method('PUT')
				{{-- row 1 --}}
				<div class="form-row">
					{{-- no invoice --}}
					<div class="col">		
						<label for="no_inv">No. Invoice</label>
						<input id="no_inv" type="text" class="form-control" name="no_inv" readonly value="{{ $invc->no_inv }}">
					</div>
					{{-- s_code --}}
					<div class="col">
						<label for="s_code">Swift Code</label>
						<input id="s_code" type="text" class="form-control" name="s_code" value="{{ $invc->s_code }}" readonly>
					</div>
					{{-- date --}}
					<div class="col">
						<label for="date">Due Date</label>
						<input id="date" type="text" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ $invc->date }}" autocomplete="off" >

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
						<label for="no_po">No. PO</label>
						<input id="no_po" type="text" class="form-control" name="no_po" value="{{ $invc->no_po }}" readonly>
					</div>
					{{-- address --}}
					<div class="col">
						<label for="address">Address</label>
						<input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ $invc->address }}" >

						@if ($errors->has('address'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('address') }}</strong>
						</span>
						@endif
					</div>
					{{-- email --}}
					<div class="col">
						<label for="mail">Email</label>
						<input id="mail" type="text" class="form-control{{ $errors->has('mail') ? ' is-invalid' : '' }}" name="mail" value="{{ $invc->mail }}" >

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
						<label for="client">Client</label>
						<input id="client" type="text" class="form-control{{ $errors->has('client') ? ' is-invalid' : '' }}" name="client" value="{{ $invc->client }}">

						@if ($errors->has('client'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('client') }}</strong>
						</span>
						@endif
					</div>
					{{-- paayment --}}
					<div class="col">
						<label for="payment">Down Payment</label>
						<input id="payment" type="text" class="form-control{{ $errors->has('payment') ? ' is-invalid' : '' }}" name="payment" value="{{ $invc->payment }}" >

						@if ($errors->has('payment'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('payment') }}</strong>
						</span>
						@endif
					</div>
					{{-- tax --}}
					<div class="col">
						<label for="tax">Tax</label>
						<select name="tax" id="tax" class="form-control" required value="{{ $invc->tax }}">
							<option>Tax</option>
							<option value="0.12" @if ($invc->tax == '0.12')selected @endif>PPN 10%</option>
							<option value="0.05" @if ($invc->tax == '0.05')selected @endif>PPh 21 (freelancer NPWP)</option>
							<option value="0.06" @if ($invc->tax == '0.06')selected @endif>PPh 21 (freelancer non NPWP)</option>
							<option value="0.025"  @if ($invc->tax == '0.025')selected @endif>PPh 21 (expert NPWP)</option>
							<option value="0.03" @if ($invc->tax == '0.03')selected @endif>PPh 21 (expert non NPWP)</option>
							<option value="0.02" @if ($invc->tax == '0.02')selected @endif>PPh 23 (vendor)</option>
						</select>
					</div>
				</div>

				<div class="form-row mt-4">
					{{-- account --}}
					<div class="col">
						<label for="account">Account</label>
						<input id="account" type="text" class="form-control" value="{{ $invc->norek }}" readonly>
					</div>
					{{-- date --}}
					<div class="col">
						<label for="text">Invoice Date</label>
						<input type="text" name="indate" value="{{ $invc->indate }}" class="form-control" readonly>
					</div>
					<div class="col">
						<label for="norek">No. Rekening</label>
						<select id="norek" name="norek" class="form-control" required>
							<option value="">No. Rekening</option>
							<option value="070 1137302" @if ($invc->norek == '070 1137302')selected @endif>IDR</option>
							<option value="090 2211411" @if ($invc->norek == '090 2211411')selected @endif>Dollar</option>
							<option value="090 2212221" @if ($invc->norek == '090 2212221')selected @endif>Euro</option>
							<option value="3590119073" @if ($invc->norek == '3590119073')selected @endif>IDR(Danamon Bank)</option>
							<option value="financedept@bintang‐35.net" @if ($invc->norek == 'financedept@bintang‐35.net')selected @endif>Paypal</option>							
						</select>
					</div>
				</div>
				{{-- row 2 --}}
				<div class="card mt-4">
					<div class="card-body">
						<div class="form-row mt">
							{{-- job desc --}}
							<div class="col">
								<label for="job_desc">Job Description</label>
								<input id="job_desc" type="text" class="form-control{{ $errors->has('job_desc') ? ' is-invalid' : '' }}" name="job_desc" value="{{ $invc->job_desc }}">

								@if ($errors->has('job_desc'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('job_desc') }}</strong>
								</span>
								@endif
							</div>
							{{-- vol --}}
							<div class="col">
								<label for="vol">Volume</label>
								<input id="vol" type="text" class="form-control{{ $errors->has('vol') ? ' is-invalid' : '' }}" name="vol" value="{{ $invc->vol }}" >

								@if ($errors->has('vol'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('vol') }}</strong>
								</span>
								@endif
							</div>
							{{-- unit --}}
							<div class="col">
								<label for="unit">Unit</label>
								<input id="unit" type="text" class="form-control{{ $errors->has('unit') ? ' is-invalid' : '' }}" name="unit" value="{{ $invc->unit }}">

								@if ($errors->has('unit'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('unit') }}</strong>
								</span>
								@endif
							</div>
							{{-- price --}}
							<div class="col">
								<label for="price">Price</label>
								<input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ $invc->price }}">

								@if ($errors->has('price'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('price') }}</strong>
								</span>
								@endif
							</div>
							<div class="col">
								<label for="total">Amount</label>
								<input id="total" type="text" class="form-control" readonly>
							</div>
						</div>
					</div>
				</div>

				{{-- row 3 Note n Signature --}}

				<div class="row mt-4">
					<div class="col">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col">
										<label for="text">Note</label>
										<input type="text" class="form-control" name="notes" value="{{ $invc->notes }}" >
									</div>
									<div class="col">
										<label for="signature">Signature</label>
										<input id="signature" type="text" class="form-control" name="signature" value="{{ $invc->signature }}">
									</div>
								</div>
							</div>
						</div>

						{{-- submit --}}
						<div class="text-center mt-4">
							<a	href="/finance/printlocal" target="_blank" class="btn btn-success mx-3" style="width: 150px;" type="submit"><i class="fas fa-print"></i> Print</a>
							<button style="width: 150px;" type="submit" class="btn btn-primary b-on mx-auto"><i class="far fa-save fa-lg"></i> save</button>
							<button class="btn btn-primary d-none b-of" type="button" disabled>
								<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
								Loading...
							</button>
						</div>

					</div>
					<div class="col">
						<div class="card-body">

							{{-- total --}}
							<div class="form-group row">
								<label for="staticEmail" class="col-sm-6 col-form-label">Total Cost</label>
								<div class="col-sm-6">
									<input type="text" id="cost" readonly class="form-control-plaintext stotal"  value="0">
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
									<input type="text" name="stotal" id="stotal" readonly class="form-control-plaintext stotal" value="{{ $invc->stotal }}">
								</div>
							</div>
							<hr>

						</div>
					</div>
				</div>

			</form>
		</div>
	</div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#vol, #price, #tax").keyup(function() {
			var price  = $("#price").val();
			var vol = $("#vol").val();
			// var tax = $('#tax').find('option:selected').val();
			var tax = $('#tax'). children("option:selected").val();

			var total = parseInt(price) * parseInt(vol);
			$("#total").val(total);

			var fax = total * parseFloat(tax);
			$('#fax').val(fax);

			var stotal = total - fax;
			$("#cost").val(total);
			$("#stotal").val(stotal);
		});

		$('#norek').on('change', function(){
			var norek = $(this). children("option:selected"). val()
			$('#account').val(norek);
		});

		$('.btn').click(function(){
			$('.b-on').toggleClass('d-none');
			$('.b-of').toggleClass('d-none');
		})


	});
</script>
@endsection