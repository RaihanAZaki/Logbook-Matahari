@extends('layouts.user_type.auth')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="multisteps-form mb-5">
                <div class="row">
                    <div class="col-12 col-lg-8 m-auto">
                        <form class="multisteps-form__form mb-8 add-edit-user" method="POST" action="{{ route('insert-toko') }}" >
                            @csrf
                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" id="parsley-form" data-animation="FadeIn">
                                <h5 class="font-weight-bolder mb-0">Toko Insert</h5>
                                <p class="mb-0 text-sm">Mandatory informations</p>
                                <div class="multisteps-form__content">
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Kode Toko</label>
                                            <input class="multisteps-form__input form-control field" type="text" name="kode_toko" id="first_name" value="" ??="" ''="" placeholder="eg. 207" onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>Nama Toko</label>
                                            <input class="multisteps-form__input form-control" value="" ??="" ''="" type="text" id="last_name" name="nama_toko" placeholder="eg. Hypermart Lippo Karawaci Utara" onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
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