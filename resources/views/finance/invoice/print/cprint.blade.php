@php
// mengubah format data tanggal, dan melakukan perhitungan antar 2 tanggal.
function genDate($date){
	$datetime = DateTime::createFromFormat('d/m/Y', $date);
	return $datetime->format('Y/m/d');
}
$days = abs((strtotime(genDate($invc->indate)))-(strtotime(genDate($invc->date))))/86400;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Print invoice {{ $invc->type }}</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('') }}assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('') }}assets/dist/css/adminlte.min.css">
	<style>
	@media print {
		body {
			-webkit-print-color-adjust: exact;
		}
	}

	@page {
		size: A4;
		margin: 0 10px 0 0;
	}

	.bg-luar{
		background-image: url('{{ asset('') }}assets/images/bg-luar.jpg') !important;
		background-size: 620px 100% !important; 
		background-repeat: no-repeat !important;
		padding-left: 5%;
		margin: 0 0 0 0;
	}
	.bg-local{
		background-image: url('{{ asset('') }}assets/images/bg-local.png') !important;
		background-repeat: repeat-y;
		background-size: 7% !important;
		padding-left: 10%;
		padding-right: 7%;
	}
	.bg-spq{
		padding: 0 6% 0 6%;
	}
</style>
</head>
<body onload="window.print()">
	<div class="@if ($invc->type == 'luar')
		bg-luar
		@elseif($invc->type == 'local')
		bg-local
		@else
		bg-spq
		@endif">
		@if ($invc->type == 'local')
		@include('finance.invoice.print.local')
		@elseif($invc->type == 'luar')
		@include('finance.invoice.print.luar')
		@elseif($invc->type == 'spq')
		@include('finance.invoice.print.spq')
		@endif
	</div>
	<!-- jQuery -->
	<script src="{{ asset('') }}assets/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="{{ asset('') }}assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('') }}assets/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{ asset('') }}assets/dist/js/demo.js"></script>
</body>
</html>
