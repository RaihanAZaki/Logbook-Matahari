@extends('layouts.user_type.auth')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="multisteps-form mb-5">
                <div class="row">
                    <div class="col-12 col-lg-8 m-auto">
                        <form class="multisteps-form__form mb-8 add-edit-user" method="POST" action="{{ route('insert-siswa') }}" >
                            @csrf
                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" id="parsley-form" data-animation="FadeIn">
                                <h5 class="font-weight-bolder mb-0">Siswa Insert</h5>
                                <p class="mb-0 text-sm">Mandatory informations</p>
                                <div class="multisteps-form__content">
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>NIK</label>
                                            <select class="form-control mb-4" name="nik_siswa" id="role_id">
                                                <option value="">Choose</option>
                                                @foreach($user as $item)
                                                <option value="{{ $item->nik }}">{{ $item->email}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>Nama Lengkap</label>
                                            <input class="multisteps-form__input form-control" value="" ??="" ''="" type="text" id="last_name" name="nama_siswa" placeholder="eg. Prior" onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" ">
                                            <div class="row">
                                                <div class="">
                                                    <label>Jabatan</label>
                                                    <select class="form-control mb-4" name="jabatan_siswa" id="role_id">
                                                        <option value="">Choose</option>
                                                        @foreach($jabatan as $item)
                                                        <option value="{{ $item->jabatan }}">{{ $item->jabatan}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="">
                                                    <label>Toko</label>
                                                    <select class="form-control mb-4" name="toko_siswa" id="role_id">
                                                        <option value="">Choose</option>
                                                        @foreach($toko as $item)
                                                        <option value="{{ $item->kode_toko }}">{{ $item->kode_toko}} - {{$item -> nama_toko}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                    <div class="button-row d-flex mt-4">
                                        <button class="btn bg-gradient-dark ms-auto mb-0" id="next" type="submit" title="Submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection