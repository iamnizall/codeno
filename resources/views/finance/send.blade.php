@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-2"></div>{{-- div kiri --}}
        <div class="col-8">
            <div class="card" style="width: 40rem">
                <div class="card-body">
                    @if(session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                    <form action=" {{ url('mail/mail') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="mb-3 row">
                            <label for="kepada" class="col-sm-2 col-form-label">To</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kepada" name="penerima">
                            </div>
                        </div>
                            <div class="mb-3 row">
                                <label for="kepada" class="col-sm-2 col-form-label">Cc</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="kepada" name="cc_mail">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="kepada" class="col-sm-2 col-form-label">Subject</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kepada" name="subjek">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="kepada" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="kepada" name="pesan"></textarea>
                                </div>
                            </div>
                            {{-- <div class="mb-3 row">
                                <label for="formFile" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input class="" type="file" id="formFile">
                                </div>
                            </div> --}}
                            <div class="mb-3 row">
                                <label for="formFile" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" value="kirim" class="btn btn-success" style="width: 100px">SEND</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>{{-- div kanan --}}
        </div>
    </div>
    @endsection