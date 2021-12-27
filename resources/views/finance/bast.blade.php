@extends('layouts.main')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header mb-2">
            <h4 class="d-inline"><i class="nav-icon fab fa-buffer"></i> <b>Bast</b></h4>
            <a href="{{ url('http://127.0.0.1:8000/finance/bast/create') }}"
                class="btn btn-primary float-right d-inline" style="border-radius: 8px"><i class="fas fa-plus"></i>
                Create Bast</a>
        </div>

        <div class="card-body">
            <form class="form-inline float-right my-3 my-lg-0" method="POST"
                action="{{ route('finance.bast.search') }}">
                @csrf
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search"
                    aria-label="Search" style="width: 1050px">
                <button type="submit" class="btn btn-outline-success my-2 my-sm-0 mx-2 d-none" type="submit"
                    style="border-radius: 8px">Search</button>
            </form>
        </div>

        <table  class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">No. Bast</th>
                    <th scope="col">Client Name</th>
                    <th scope="col">Item</th>
                    <th scope="col">Quantity</th>
                    <th scope="col" style=width: 210px>Action</th>
                </tr>
            </thead>
            <tbody>
            @php
                        $i = 1;
                    @endphp
                    @foreach ($bast1 as $bast)

                        <tr>
                            <th scope="row">{{ $i }}</th>
                            <td>{{ $bast->no_inv }}</td>
                            <td>{{ $bast->Cname }}</td>
                            <td>{{ $bast->perihal }}</td>
                            <td>{{ $bast->Quan }}</td>
                            <td>
                                <a href="{{ route('bast.edit', $bast->id) }}" class="btn btn-info d-inline"><i
                                        class="fas fa-edit fa-1x"></i></a>
                                <a href="{{ route('bast.show', $bast->id) }}" class="btn btn-success" style="border-radius: 8px; margin-left: 15px;">
                                <i class="fas fa-print"></i>
                                </a>
                                <form method="POST" action="{{ route('bast.destroy', $bast->id) }}"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style="height: 35px; margin-left: 15px;"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex float-right">
    {!! $bast1->links('pagination::bootstrap-4') !!}
    </div>

</div>
@endsection
