@extends('layouts.user_type.auth')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="multisteps-form mb-5">

                <div class="row">
                    <div class="col-12 col-lg-8 m-auto">
                        <form class="multisteps-form__form mb-8 add-edit-user" method="POST" action="{{ route('insert-user') }}">
                            @csrf
                            <input type="hidden" name="_token" value="MnxtBiDrLxlB4Ek84gpHLWOWqKVGdnWmWyHv5zcq"> 
                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" id="parsley-form" data-animation="FadeIn">
                                <h5 class="font-weight-bolder mb-0">User Insert</h5>
                                <p class="mb-0 text-sm">Mandatory informations</p>
                                <div class="multisteps-form__content">
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Nomor Induk Kewarganegaraan</label>
                                            <input class="multisteps-form__input form-control field" type="text" name="nik" id="first_name" value="" ??="" ''="" placeholder="eg. Michael">
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>Email</label>
                                            <input class="multisteps-form__input form-control" value="" ??="" ''="" type="email" id="last_name" name="email" placeholder="eg. Prior">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class=" ">
                                            <div class="row mt-3">
                                                <div class="">
                                                    <p class="mb-2">Kategori Banner</p>
                                                    <select name="role" class="multisteps-form__input form-control field p-2 rounded border-2 w-96">
                                                        <option value="">Choose Role</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="mentor">Mentor</option>
                                                        <option value="siswa">Siswa</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>     
                                    {{-- <div class="row ">
                                        <div class="col-12 col-sm-6">
                                            <label>Password</label>
                                            <input class="multisteps-form__input form-control field password" value="" ??="" ''="" type="password" name="password" id="password" placeholder="******" onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                    </div> --}}
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

    <footer class="footer pt-3  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        © <script>
                        document.write(new Date().getFullYear())
                        </script>2023, made with <i class="fa fa-heart" aria-hidden="true"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>&amp; <a style="color: #252f40;" href="https://www.updivision.com" class="font-weight-bold ml-1" target="_blank">UPDIVISION</a>
                        for a better web.
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                        <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                        <a href="https://www.updivision.com" class="nav-link text-muted" target="_blank">UPDIVISION</a>
                        </li>
                        <li class="nav-item">
                        <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                        <a href="https://creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                        <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection