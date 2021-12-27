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
  {{-- <style>
    *{
      border-style: solid;
    }
  </style> --}}
</head>
<body onload="window.print()">

	@if ($invc->type == 'local')
	@include('finance.invoice.print.local')
	@elseif($invc->type == 'luar')
	@include('finance.invoice.print.luar')
	@elseif($invc->type == 'spq')
	@include('finance.invoice.print.spq')
	@endif

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
