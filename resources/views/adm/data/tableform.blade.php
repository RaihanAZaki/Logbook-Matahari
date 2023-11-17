<table class="table align-items-center mb-0">
    <thead>
        <tr>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Tanggal
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Toko
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Siswa
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Jabatan
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Aktifitas
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Hal
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Mentor
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Komentar
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($form as $item)
        <tr>
            <td class="ps-4">
                <p class="text-xs font-weight-bold mb-0">{{$item -> tanggal}}</p>
            </td>
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">{{$item -> toko}} - {{$item -> nama_toko}}</p>
            </td>
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">{{$item -> siswa}}</p>
            </td>
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">{{$item -> jabatan}}</p>
            </td>
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">{{$item -> aktifitas}}</p>
            </td>
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">{{$item -> hal}}</p>
            </td>         
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">{{$item -> mentor}}</p>
            </td>  
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">{{$item -> komentar}}</p>
            </td>  
        </tr>
        @endforeach
    </tbody>
</table>
