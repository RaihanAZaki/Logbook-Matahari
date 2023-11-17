@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Data Toko</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kode Toko
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama Toko
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Creation Date
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($toko as $item)
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{$item -> kodetoko}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$item -> namatoko}}</p>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{$item -> created_at}}</span>
                                    </td>                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div  class="px-3 mt-4">{{ $toko->links('pagination::bootstrap-4') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
  <div class="row">
      <div class="col-12">
          <div class="card mb-4 mx-4">
              <div class="card-header pb-0">
                  <div class="d-flex flex-row justify-content-between">
                      <div>
                          <h5 class="mb-0">Data Jabatan</h5>
                      </div>
                  </div>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0">
                          <thead>
                              <tr>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      ID
                                  </th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      Jabatan
                                  </th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      Creation Date
                                  </th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($jabatan as $item)
                              <tr>
                                  <td class="ps-4">
                                      <p class="text-xs font-weight-bold mb-0">{{$item -> id}}</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$item -> jabatan}}</p>
                                  </td>
                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold">{{$item -> created_at}}</span>
                                  </td>                    
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                      <div  class="px-3 mt-4">{{ $toko->links('pagination::bootstrap-4') }}</div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<div>
  <div class="row">
      <div class="col-12">
          <div class="card mb-4 mx-4">
              <div class="card-header pb-0">
                  <div class="d-flex flex-row justify-content-between">
                      <div>
                          <h5 class="mb-0">Data Mentor</h5>
                      </div>
                  </div>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0">
                          <thead>
                              <tr>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      NIK
                                  </th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      Nama Mentor
                                  </th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Kode Toko
                                  </th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      Creation Date
                                  </th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($mentor as $item)
                              <tr>
                                  <td class="ps-4">
                                      <p class="text-xs font-weight-bold mb-0">{{$item -> NIK}}</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$item -> nama}}</p>
                                  </td>
                                  <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{$item -> toko}}</p>
                                  </td>
                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold">{{$item -> created_at}}</span>
                                  </td>                    
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                      <div  class="px-3 mt-4">{{ $toko->links('pagination::bootstrap-4') }}</div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<div>
  <div class="row">
      <div class="col-12">
          <div class="card mb-4 mx-4">
              <div class="card-header pb-0">
                  <div class="d-flex flex-row justify-content-between">
                      <div>
                          <h5 class="mb-0">Data Siswa</h5>
                      </div>
                  </div>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0">
                          <thead>
                              <tr>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      NIK
                                  </th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      Nama Siswa
                                  </th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Jabatan
                                  </th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Kode Toko
                                  </th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      Creation Date
                                  </th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($siswa as $item)
                              <tr>
                                  <td class="ps-4">
                                      <p class="text-xs font-weight-bold mb-0">{{$item -> nik}}</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$item -> nama}}</p>
                                  </td>
                                  <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{$item -> jabatan}}</p>
                                </td>
                                <td class="text-center">
                                  <p class="text-xs font-weight-bold mb-0">{{$item -> kodetoko}}</p>
                                </td>
                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold">{{$item -> created_at}}</span>
                                  </td>                    
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                      <div  class="px-3 mt-4">{{ $toko->links('pagination::bootstrap-4') }}</div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>



@endsection