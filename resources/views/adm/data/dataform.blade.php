@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Data Formulir Logbook</h5>
                        </div>
                        <form method="POST" action="{{ route('logbook_export') }}">
                            @csrf
                            <label class="mr-4 text-sm" for="bulan">Pilih Bulan:</label>
                            <select class="rounded text-center py-2 px-2" name="bulan" id="bulan">
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                                <!-- Tambahkan opsi bulan lainnya -->
                            </select>
                            <button type="submit" class="btn  bg-gradient-dark btn-primary">Unduh Excel</button>
                        </form>
                       
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        @include('adm.data.tableform')
                        <div  class="px-3 mt-4">{{ $form->links('pagination::bootstrap-4') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection