@extends('layouts.main')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header mb-2">
            <h4 class="d-inline"><i class="nav-icon fab fa-buffer"></i> <b>Bast</b></h4>
            <button class="btn btn-success mx-2" style="float: right; border-radius: 8px"><i class="fas fa-print"></i>
                Print</button>
            <a href="/newbast"
                class="btn btn-primary float-right d-inline" style="border-radius: 8px"><i class="fas fa-plus"></i>
                Create Bast</a>
        </div>

        <div class="card-body">
            <form class="form-inline float-right my-3 my-lg-0" method="POST"
                action="{{ route('finance.invoice.search') }}">
                @csrf
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search"
                    aria-label="Search">
                <button type="submit" class="btn btn-outline-success my-2 my-sm-0 mx-2" type="submit"
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
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">XXX</th>
                    <td scope="row">XXX</td>
                    <td scope="row">XXX</td>
                    <td scope="row">XXX</td>
                    <td scope="row">XXX</td>
                    <td scope="row">
                        <a href="/editbast" class="btn btn-info d-inline"><i
                            class="fas fa-edit fa-1x"></i></a>
                        <button type="submit" class="btn btn-danger" style="height: 35px; margin-left: 15px"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    </td>
                </tr>
                <tr>
                    <th scope="row">XXX</th>
                    <td scope="row">XXX</td>
                    <td scope="row">XXX</td>
                    <td scope="row">XXX</td>
                    <td scope="row">XXX</td>
                    <td scope="row">
                        <a href="/editbast" class="btn btn-info d-inline"><i
                            class="fas fa-edit fa-1x"></i></a>
                        <button type="submit" class="btn btn-danger" style="height: 35px; margin-left: 15px"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="d-flex float-right">
<!--paginantion here-->
    </div>

</div>
@endsection
