@extends('agen.templateAgen')

@section('isi')
    <div class="container">

        <div class="col-xs-12 h-full p-3 d-flex justify-content-end">
            <a href="/agen/properti/add" class="col-3 filter-label btn btn-outline-primary rounded fw-bold ">
                Add Properti
            </a>
        </div>


        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Tipe</th>
                    <th>Transaksi</th>
                    <th>Alamat</th>
                    {{-- <th>Kamar Mandi</th>
                    <th>Kamar Tidur</th>
                    <th>Luas Tanah</th>
                    <th>Luas Bangunan</th> --}}
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($properti as $prop)
                    <tr>
                        <td>{{ $prop['properti_id'] }}</td>
                        <td>{{ $prop['judul'] }}</td>
                        <td>{{ $prop->tipe->nama }}</td>
                        <td>{{ $prop['transaksi'] }}</td>
                        <td>{{ $prop['alamat'] }} </td>
                        {{-- <td>{{ $prop['kamar_mandi'] }}</td>
                        <td>{{ $prop['kamar_tidur'] }}</td>
                        <td>{{ $prop['luas_tanah'] }}</td>
                        <td>{{ $prop['luas_bangunan'] }}</td> --}}
                        <td>{{ $prop['harga'] }}</td>
                        <td>
                            <a href="/agen/properti/{{ $prop['properti_id'] }}"
                                class="btn btn-outline-primary rounded">Ubah</a>
                            <a href="/agen/properti/delete/{{ $prop['properti_id'] }}"
                                class="btn btn-outline-primary rounded">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://eraindonesia.com/js/all.js"></script>
    <script>
        $(document).ready(function() {
            // loadProperti();
        })
    </script>
@endsection
