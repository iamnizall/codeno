	<div class="wrapper">
		<!-- Main content -->
		<div class="invoice p-3 mb-3">
			<!-- title row -->
			<div class="row">
				<div class="col-sm-7">
					<img class="float-right" src="{{ asset('') }}assets/star.png" alt="star" style="width: 200px;"">
					</div>
					<div class="col-sm-5">

						<h5 class="float-left mt-3">Software <br>
							Translation <br>
							Network <br>
							Recording 
						</h5>
					</div>
				</div>
				<!-- info row -->
				<div class="row invoice-info">
					<div class="col-sm-4 invoice-col mt-2" style="margin-left: 58%; font-size: 14px">
						<address>
							<strong>PT Star Software Indonesia</strong><br>
							Citylofts Sudirman # 1512<br>
							Jl.K.H.Mas Mansyur No.121<br>
							Jakarta 10220<br>
							Indonesia<br><br>
							Tel: +62 21 2555 8856<br>
							Fax: +62 21 2555 8767<br>
							Email: kusuma.adiwijaya@star-group.net<br>
							Web: www.star-group.net<br>
						</address>
					</div>

				</div>

				<h3 style="text-align: center"> <b>INVOICE</b></h3><br>
				<div class="row">
					<div class="col-sm">

						<address>
							<strong>{{ $invc->client }}</strong><br>

							{{ $invc->address }} 
						</address>
					</div>
					<div class="col-sm">
						<h5 class="text-center">{{ date('d-M-Y') }}</h5>
						<h5 class="text-center"> <b><u>Invoice No. {{ $invc->no_inv }}</b></u> </h5><br>
						<h5 class="text-center"><b>PO No. {{ $invc->no_inv }}</b></h5>
					</div>
				</div>              

				<!-- Table row -->
				<div class="row">
					<div class="col-12 table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Job Description</th>
									<th>Volume Hour</th>
									<th>Unit Price</th>
									<th>Amount</th>
								</tr>
							</thead>
							<tbody>
								@php
								$i = 1;
								@endphp
								@foreach ($invc->subinvoice as $in)
								<tr>
									<td>{{ $i }}</td>
									<td>{{ $in->job_desc }}</td>
									<td>{{ $in->vol }}</td>
									<td>{{ $in->price }}</td>
									<td>{{ $in->total }}</td>
								</tr>
								@php
								$i++;
								@endphp
								@endforeach
								<tr>
									<td></td>
									<td class="text-right">Subtotal</td>
									<td></td>
									<td></td>
									<td>{{ $invc->totalcost }}</td>
								</tr>
								<tr>
									<td></td>
									<td class="text-right">
										@php
										if($invc->tax == '0.12'){
											echo 'PPN 10% + PPh 23';
										}elseif($invc->tax == '0.12'){
											echo 'PPh 21 (freelancer NPWP)';
										}elseif($invc->tax == '0.06'){
											echo 'PPh 21 (freelancer non NPWP)';
										}elseif($invc->tax == '0.025'){
											echo 'PPh 21 (expert NPWP)';
										}elseif($invc->tax == '0.03'){
											echo 'PPh 21 (expert non NPWP)';
										}elseif($invc->tax == '0.02'){
											echo 'PPh 23 (vendor)';
										}
										@endphp
									</td>
									<td></td>
									<td></td>
									<td>{{ $invc->totaltax }}</td>
								</tr>
								<tr >
									<td colspan="2" class="text-center"><b>TOTAL</b></td>
									<td colspan="2" class="text-center"><b>Please Pay</b></td>
									<td ><b>Rp.{{ $invc->stotal }}</b></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				@php
				$diff = strtotime($invc->indate);
				@endphp
				<p> Payment : {{ $diff }}</p> 
				<p> Transfer to:</p>
				<div class="row">

					<div class="col-sm-3 text-center border border-dark ml-5" >
						<strong>
							@php
							if($invc->norek == 'financedept@bintang‐35.net'){
								echo 'PT Bintang Panca Tridasa';
							}else{
								echo 'PT Star Software Indonesia';
							}
							@endphp	
							
						</strong> <br>
						<strong>
							@php
							if($invc->norek == '3590119073'){
								echo 'Bank Danamon';
							}elseif($invc->norek == 'financedept@bintang‐35.net'){

							}else{
								echo 'Permata Bank, Mid Plaza Branch';
							}
							@endphp							
						</strong> <br>
						@if ($invc->norek == 'financedept@bintang‐35.net')
						@else
						<strong>Jakarta, Indonesia</strong> <br>
						@endif
						<strong>Swift Code : {{ $invc->s_code }}</strong> <br>
						<strong>RP Account {{ $invc->norek }}</strong> <br>
					</div>
					<div class="col-sm-3">

					</div>
					<div class="col-sm-4 text-center ml-5">
						PT Star Software Indonesia <br><br><br><br>
						Kusuma
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
