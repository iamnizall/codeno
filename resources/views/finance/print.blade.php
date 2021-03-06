<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Print Table</title>
</head>

{{-- Print Priview --}}
<body onload="window.print();">
    <div class="container-fluid">
        <h2 class="text-center my-4"> Table Invoice</h2>
    </div>

    {{-- Table Print --}}
    <div class="container-fluid">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">No. Ivoice</th>
                    <th scope="col">Client Name</th>
                    <th scope="col">Project Name</th>
                    <th scope="col">Employee</th>
                    <th scope="col">Cost in IDR</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($invc as $inv)
                    {{-- Menampilkan inputan pada tabel --}}
                    <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>{{ $inv->no_inv }}</td>
                        <td>{{ $inv->client }}</td>
                        <td>{{ $inv->p_name }}</td>
                        <td>{{ $inv->signature }}</td>
                        <td>IDR {{ $inv->stotal }},-</td>
                    </tr>
                    @php
                        $i++; //perulangan untuk penomoran 
                    @endphp
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- End Table Print --}}
</body>

</html>
