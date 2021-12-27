@extends('layouts.main')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header mb-2">
            <h4 class="d-inline"><i class="fas fa-shopping-bag"></i> <b>Invoice</b></h4>
            <a href="/finance/print" target="_blank" class="btn btn-success mx-2" style="float: right; border-radius: 8px"><i class="fas fa-print"></i>
            Print</a>
            <a href="{{ url('finance/create-invoice/local') }}"
            class="btn btn-primary float-right d-inline" style="border-radius: 8px"><i class="fas fa-plus"></i>
        Create Invoice</a>
    </div>

    <div class="card-body">
        <form class="form-inline float-right" method="POST"
        action="{{ route('finance.invoice.search') }}">
        @csrf
        <input class="form-control mx-2" type="search" name="search" placeholder="Search"
        aria-label="Search" style="width: 1050px">
        <button type="submit" class="btn btn-outline-success my-2 my-sm-0 mx-2 d-none" type="submit"
        style="border-radius: 8px">Search</button>
    </form>
</div>


<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">No.</th>
            <th scope="col">No. Ivoice</th>
            <th scope="col">Client Name</th>
            <th scope="col">Project Name</th>
            <th scope="col">Cost in IDR</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i = 1;
        @endphp
        @foreach ($invc as $inv)

        <tr>
            <th scope="row">{{ $i }}</th>
            <td>{{ $inv->no_inv }}</td>
            <td>{{ $inv->client }}</td>
            <td>{{ $inv->p_name }}</td>
            <td>IDR {{ $inv->stotal }},-</td>
            <td>
                <a href="{{ route('invoice.show', $inv->id) }}" class="btn btn-success d-inline"><i class="fas fa-print fa-1x"></i></a>
                <a href="{{ route('invoice.edit', $inv->id) }}" class="btn btn-info d-inline"><i class="fas fa-edit fa-1x"></i></a>
                <form method="POST" action="{{ route('invoice.destroy', $inv->id) }}"
                    class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="height: 35px"><i class="fas fa-trash-alt"></i></button>
                </form>
            </td>
        </tr>
        @php
        $i++;
        @endphp
        @endforeach
    </tbody>
</table>
<div class="d-flex float-right">
    {!! $invc->links('pagination::bootstrap-4') !!}
</div>
</div>
</div>
@endsection
