@extends('layouts.main')

@section('content')

<div class="container">
	<div class="card">

		
		<form method="POST" action="{{ route('invoice.update', $invc->id) }}"> @csrf @method('PUT')
			<div class="card-header">
				<div class="row">
					<div class="col-sm-10">
						<b><i class="fas fa-shopping-bag"></i> Create New Invoice</b> 						
					</div>
					<div class="col-sm-2">
						<select name="type" class="form-control" onchange="location = this.value;">
							<option value="luar" @if ($invc->type == 'luar')selected @endif>Invoice Luar</option>
							<option value="luar2" @if ($invc->type == 'luar2')selected @endif>Invoice Luar 2</option>
							<option value="local" @if ($invc->type == 'local')selected @endif>Invoice Local</option>
							<option value="spq" @if ($invc->type == 'spq')selected @endif>Invoice SPQ</option>
							<option value="spq2" @if ($invc->type == 'spq2')selected @endif>Invoice SPQ 2</option>
						</select>
					</div>
				</div>
			</div>
			<div class="card-body">
				{{-- row 0 --}}
				<div class="form-row">
					{{-- project name --}}
					<div class="col">
						<label for="p_name">Project Name</label>
						<input id="p_name" type="text" class="form-control{{ $errors->has('p_name') ? ' is-invalid' : '' }}" name="p_name" value="{{ $invc->p_name }}" >

						@if ($errors->has('p_name'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('p_name') }}</strong>
						</span>
						@endif
						<input type="text" class="d-none" name="invoice_id" value="{{ $invc->id }}">
					</div>
					{{-- type --}}
				</div>
				{{-- row 1 --}}
				<div class="form-row mt-2">
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
						<input id="payment" type="text" class="mny form-control{{ $errors->has('payment') ? ' is-invalid' : '' }}" name="payment" value="{{ $invc->payment }}" >

						@if ($errors->has('payment'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('payment') }}</strong>
						</span>
						@endif
					</div>
					{{-- tax --}}
					<div class="col">
						<label for="tax">Tax</label>
						<select name="tax" id="tax" class="form-control tax" required>
							<option>Tax</option>
							<option value="0.12" @if ($invc->tax == '0.12')selected @endif>PPN 10% + PPh 23(vendor)</option>
							<option value="0.05" @if ($invc->tax == '0.05')selected @endif>PPh 21 (freelancer NPWP)</option>
							<option value="0.06" @if ($invc->tax == '0.06')selected @endif>PPh 21 (freelancer non NPWP)</option>
							<option value="0.025" @if ($invc->tax == '0.025')selected @endif>PPh 21 (expert NPWP)</option>
							<option value="0.03" @if ($invc->tax == '0.03')selected @endif>PPh 21 (expert non NPWP)</option>
							<option value="0.02" @if ($invc->tax == '0.02')selected @endif>PPh 23 (vendor)</option>
						</select>
					</div>
				</div>

				<div class="form-row mt-4">
					{{-- account --}}
					<div class="col">
						<label for="account">Account</label>
						<input id="account" type="text" class="form-control" value="{{ $invc->amount }}" readonly>
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
							<option value="PT STAR Software Indonesia" @if ($invc->norek == 'PT STAR Software Indonesia')selected @endif>PT STAR Software Indonesia</option>							
						</select>
					</div>
				</div>
				{{-- row 2 --}}
				<div class="card mt-4">
					@if ($invc->type == 'local')
					<table class="table">
						<thead>
							<tr>
								<th>Job Description</th>
								<th>Volume</th>
								<th>Unit</th>
								<th>Unit price IDR</th>
								<th>
									<select id="amount" name="amount" required>
										<option>Amount</option>
										<option value="070 1137302" @if ($invc->amount == '070 1137302')selected @endif>Amount IDR</option>
										<option value="0902211411" @if ($invc->amount == '0902211411')selected @endif>Amount Dollar</option>
										<option value="090 2212221" @if ($invc->amount == '090 2212221')selected @endif>Amount Euro</option>
										<option value="3590119073" @if ($invc->amount == '3590119073')selected @endif>Amount IDR(Danamon Bank)</option>
										<option value="financedept@bintang‐35.net" @if ($invc->amount == 'financedept@bintang‐35.net')selected @endif>Paypal(PT Bintang Panca Tridasa)</option>
									</select>
								</th>
								<th></th>
							</tr>
						</thead>
						<tbody id="form-body">
							<tr>
								<td>
									<input id="job_desc" type="text" class="form-control" name="job_desc[]">
								</td>
								<td>
									<input type="text" class="vol form-control" name="vol[]">
								</td>
								<td>
									<input id="unit" type="text" class="form-control" name="unit[]">
								</td>
								<td>
									<input type="text" class="price form-control" name="price[]">
								</td>
								<td>
									<input type="text" class="form-control tot total" name="total[]" readonly>
								</td>
								<td>
									<button type="button" onclick="add_form()" class="btn btn-success"><i class="fas fa-plus"></i></button>
								</td>
							</tr>
						</tbody>
					</table>
					@endif
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
							<a href="/finance/printlocal" class="btn btn-success mx-3" style="width: 150px;" type="submit"><i class="fas fa-print"></i> Print</a>
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
									<input type="text" id="cost" readonly class="form-control-plaintext stotal"  value="{{ $invc->totalcost }}">
								</div>
							</div>
							<hr>
							{{-- pph --}}
							<div class="form-group row">
								<label for="staticEmail" class="col-sm-6 col-form-label"><span id="vtax">Tax</span></label>
								<div class="col-sm-6">
									<input type="text" id="fax" readonly class="form-control-plaintext stotal" value="{{ $invc->totaltax }}">
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

			</div>
		</div>
	</form>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">

	$('#amount').on('change', function(){
		var amount = $(this). children("option:selected"). val()
		$('#account').val(amount);
	});

	$('#tax').on('change', function(){
		var tax = $(this). children("option:selected"). text()
		$('#vtax').text(tax);
	});

	$('.b-on').click(function(){
		$('.b-on').toggleClass('d-none');
		$('.b-of').toggleClass('d-none');
	})

	// test

	$(".vol, .price").keyup(function() {
		var price  = $(".price").val();
		var vol = $(".vol").val();

		var total = parseInt(price) * parseInt(vol);
		if ( price != "" && vol != "" ) {
			$('.total').val(total);
		};
	});

	var i = 0;
	function add_form()
	{
		var sum = 0;

		$('.tot').each(function(){
			var value = $(this).val();
			if(value.length != 0)
			{
				sum += parseFloat(value);
			}
		});
		// console.log(sum);
		$('#cost').val(sum);
		// console.log(i)

		i++;
		var html = '';
		html += '<tr>';
		html += '<td><input type="text" class="form-control" name="job_desc[]"></td>';
		html += '<td><input type="text" class="form-control vol' + i +'" name="vol[]"></td>';
		html += '<td><input type="text" class="form-control" name="unit[]"></td>';
		html += '<td><input type="text" class="form-control price'+i+'" name="price[]"></td>';
		html += '<td><input type="text" class="form-control tot total'+i+'" name="total[]" readonly></td>';
		html += '<td><button type="button" class="btn btn-danger" onclick="del_form(this)"><i class="fas fa-minus"></i></button></td>';
		html += '</tr>';

		$('#form-body').prepend(html);

		$(".vol"+i+", .price"+i).keyup(function() {
			var price  = $(".price"+i).val();
			var vol = $(".vol"+i).val();

			var total = parseInt(price) * parseInt(vol);
			if ( price != "" && vol != "" ) {
				$('.total'+i).val(total);
			};
		});
	};

	function del_form(id)
	{
		id.closest('tr').remove();
	};

	$('#tax, #cost').on('change', function(){
		var tax = $(this). children("option:selected"). val();
		var tot = $('#cost').val();
		console.log(tot);
		tax = parseFloat(tax)*parseInt(tot);
		var hasil = tot - tax;
		if ( tot != "" && tax != "" ) {
			$('#fax').val(tax);
			$('#stotal').val(hasil);
		};
		

		// $('#vtax').val(tax);
		// console.log(tax);
	});

</script>

@endsection