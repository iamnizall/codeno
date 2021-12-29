@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="card">



            <div class="card-header"><i class="nav-icon fab fa-buffer"></i> Create New BAST</div>
            <div class="card-body">
                <form method="POST" action="{{ route('finance.bast.store') }}">
                    <!-- @csrf -->
                    {{-- row 1 --}}
                    <div class="form-row">
                        {{-- no bast --}}
                        <div class="col">
                            <label for="no_bast">No. Bast</label>
                            <input id="no_bast" type="text" class="form-control" name="no_bast">
                        </div>
                        {{-- type of work --}}
                        <div class="col">
                            <label for="t_work">Type of Work</label>
                            <input id="t_work" type="text" class="form-control" name="t_work" value="">
                        </div>
                        {{-- date --}}
                        <div class="col">
                            <label for="date">Date</label>
                            <input id="date" type="text"
                                class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date"
                                value="{{ old('date') }}" autocomplete="off">

                            @if ($errors->has('date'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('date') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    {{-- row 2 --}}
                    <div class="form-row mt-4">
                        {{-- no invoice --}}
                        <div class="col">
                            <label for="no_inv">No. Invoice</label>
                            <input id="no_inv" type="text" class="form-control" name="no_inv" value="">
                        </div>
                        {{-- project name --}}
                        <div class="col">
                            <label for="Pname">Project Name</label>
                            <input id="Pname" type="text" class="form-control" name="Pname" value="">
                        </div>
                        {{-- PIC Client --}}
                        <div class="col">
                            <label for="pClient">PIC Client</label>
                            <input id="pClient" type="text" class="form-control" name="pClient" value="">
                        </div>
                    </div>

                    {{-- row 3 --}}
                    <div class="form-row mt-4">
                        {{-- subjek --}}
                        <div class="col">
                            <label for="perihal">Perihal</label>
                            <input id="perihal" type="text" class="form-control" name="perihal" value="">
                        </div>
                        {{-- company name --}}
                        <div class="col">
                            <label for="Cname">Company Name</label>
                            <input id="Cname" type="text" class="form-control" name="Cname" value="">
                        </div>
                        {{-- email --}}
                        <div class="col">
                            <label for="mail">Email</label>
                            <input id="mail" type="text"
                                class="form-control{{ $errors->has('mail') ? ' is-invalid' : '' }}" name="mail"
                                value="{{ old('mail') }}">

                            @if ($errors->has('mail'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('mail') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    {{-- Table Form --}}
                    <div class="card mt-4">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <select name="item/volume" id="">
                                            <option value="1">Item</option>
                                            <option value="2">Job Description</option>
                                        </select>
                                    </th>
                                    <th>Quantitiy</th>
                                    <th>Unit</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="form-body">
                                <tr>
                                    <td>
                                        <input id="item" type="text"
                                            class="form-control{{ $errors->has('item') ? ' is-invalid' : '' }}"
                                            name="item" value="{{ old('item') }}">

                                        @if ($errors->has('item'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('item') }}</strong>
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <input id="Quan" type="text"
                                            class="form-control{{ $errors->has('Quan') ? ' is-invalid' : '' }}"
                                            name="Quan" value="{{ old('Quan') }}">

                                        @if ($errors->has('Quan'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('Quan') }}</strong>
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <input id="unit" type="text"
                                            class="form-control{{ $errors->has('unit') ? ' is-invalid' : '' }}"
                                            name="unit" value="{{ old('unit') }}">

                                        @if ($errors->has('unit'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('unit') }}</strong>
                                            </span>
                                        @endif
                                    </td>
                                    <td style="text-align: center">
                                        <input class="form-check-input" type="checkbox" value="1" name="status">
                                    </td>
                                    <td>
                                        <button type="button" onclick="add_row()" class="btn btn-success"><i
                                                class="bi bi-plus-circle-fill"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    {{-- row party --}}
                    <div class="row mt-4">
                        {{-- tabel party --}}
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <label for="text">The First Party</label>
                                            <input type="text" class="form-control" name="notes"
                                                value="{{ old('note') }}">
                                        </div>
                                        <div class="col">
                                            <label for="signature">The Second Party</label>
                                            <input id="signature" type="text" class="form-control" name="signature"
                                                value="{{ old('signature') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- tombol --}}
                        <div class="col">
                            <div class="text-center mt-4">
                                <button style="width: 150px;" type="submit" class="btn btn-primary b-on mx-auto"><i
                                        class="far fa-save fa-lg"></i> save</button>
                                <a href="/printbast" class="btn btn-success" style="border-radius: 6px; margin-left: 20px;">
                                    <i class="fas fa-print"></i> print
                                </a>
                                <button class="btn btn-primary d-none b-of" type="button" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Loading...
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>

    <script>
        function add_row() {
            var html = '';

            html += '<tr>';
            html += '<td><input type="text" class="form-control" name="item[]"></td>';
            html += '<td><input type="text" class="form-control" name="Quan[]"></td>';
            html += '<td><input type="text" class="form-control" name="unit[]"></td>';
            html +=
                '<td style="text-align: center"><input class="form-check-input" type="checkbox" value="" name="status"></td>';
            html +=
                '<td><button type="button" class="btn btn-danger" onclick="del_row(this)"><i class="bi bi-dash-circle-fill"></i></button></td>';
            html += '</tr>';

            $('#form-body').prepend(html);
        }

        function del_row(id) {
            id.closest('tr').remove();
        }
    </script>

@endsection
