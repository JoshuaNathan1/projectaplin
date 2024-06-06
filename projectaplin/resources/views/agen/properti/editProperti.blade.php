@extends('agen.templateAgen')
@section('isi')
    <div class="page-content pt-5">
        <div class="container">
            <h2 class="fw-bold">ID Properti : {{ $properti['properti_id'] }}</h2>
            <form method="post">
                @csrf
                <div class="p-4 my-3">
                    <div class="row pb-3">
                        <div class="px-1 col">
                            <div class="row container justify-content-between">
                                <p class="col-auto filter-label my-auto">Judul</p>
                                <input type="text" name="judul" id="judul" class="form-control col"
                                    value="{{ $properti['judul'] }}"" required>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="px-1 col">
                            <div class="row container justify-content-between">
                                <p class="col-auto filter-label my-auto">Deskripsi</p>
                                <textarea type="text" name="deskripsi" id="deskripsi" class="form-control col" required>{{ $properti['deskripsi'] }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="px-1 col">
                            <div class="row container">
                                <p class="filter-label col-auto my-auto">Tipe</p>
                                <select name="proptype" id="proptype" class="form-control filter-select col mx-5">
                                    @foreach ($proptype as $pt)
                                        <option value="{{ $pt['proptype_id'] }}"
                                            @if ($properti['proptype_id'] == $pt['proptype_id']) selected @endif>{{ $pt['nama'] }}</option>
                                    @endforeach
                                </select>
                                <select name="transaksi" id="transaksi" class="form-control filter-select col">
                                    <option value="DIJUAL" @if ($properti['transaksi'] == 'DIJUAL') selected @endif>DIJUAL</option>
                                    <option value="DISEWAKAN" @if ($properti['transaksi'] == 'DISEWAKAN') selected @endif>
                                        DISEWAKAN
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="px-1 col">
                            <div class="row container justify-content-between">
                                <p class="col-auto filter-label my-auto">Harga Rp</p>
                                <input type="number" name="harga" id="harga" class="form-control col"
                                    value="{{ $properti['harga'] }}">
                            </div>
                        </div>
                    </div>

                    <hr class="mt-5" style="background-color: black">
                    <h3 class="py-3">Lokasi</h3>

                    <div class="row ps-5 py-2 container justify-content-between">
                        <p class="filter-label col-auto my-auto">Provinsi</p>
                        {{-- <p class="filter-label col-auto my-auto">{{ $kota_id }}</p> --}}
                        <select name="provinsi" id="provinsi" class="form-control filter-select col">
                            @foreach ($provinsi as $prov)
                                <option value="{{ $prov['provinsi_id'] }}"
                                    @if ($prov['provinsi_id'] == $provinsi_id) selected @endif>{{ $prov['provinsi_nama'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="row ps-5 py-2 container justify-content-between">
                        <p class="filter-label col-auto my-0">Kota</p>
                        <select name="kota" id="kota" class="form-control filter-select col"></select>
                        <input type="text" name="kota_id" id="kota_id" value="{{ $kota_id }}" hidden>
                    </div>

                    <div class="row ps-5 py-2 container justify-content-between">
                        <p class="filter-label col-auto my-0">Kecamatan</p>
                        <select name="kecamatan" id="kecamatan" class="form-control filter-select col"></select>
                        <input type="text" name="kecamatan_id" id="kecamatan_id" value="{{ $properti['kecamatan_id'] }}"
                            hidden>

                    </div>


                    <div class="row ps-5 py-2 container justify-content-between">
                        <p class="col-auto filter-label my-auto">Alamat</p>
                        <input type="text" name="alamat" id="alamat" class="form-control col"
                            value="{{ $properti['alamat'] }}" required>
                    </div>

                    <hr class="mt-5" style="background-color: black">
                    <h3 class="py-3">Detail</h3>

                    <div class="row ps-5 py-3 container justify-content-between">
                        <div class="col px-5">
                            <div class="row">
                                <p class="col-auto filter-label my-auto">Luas Tanah</p>
                                <input type="number" min="0" value="{{ $properti['luas_tanah'] }}"
                                    name="luas_tanah" id="luas_tanah" class="form-control col">
                            </div>
                        </div>
                        <div class="col px-5">
                            <div class="row">
                                <p class="col-auto filter-label my-auto">Luas Bangunan</p>
                                <input type="number" min="0" value="{{ $properti['luas_bangunan'] }}"
                                    name="luas_bangunan" id="luas_bangunan" class="form-control col">
                            </div>
                        </div>
                    </div>
                    <div class="row ps-5 py-3 container justify-content-between">
                        <div class="col px-5">
                            <div class="row">
                                <p class="col-auto filter-label my-auto">Kamar Tidur</p>
                                <input type="number" min="0" value="{{ $properti['kamar_tidur'] }}"
                                    name="kamar_tidur" id="kamar-tidur" class="form-control col">
                            </div>
                        </div>
                        <div class="col px-5">
                            <div class="row">
                                <p class="col-auto filter-label my-auto">Kamar Mandi</p>
                                <input type="number" min="0" value="{{ $properti['kamar_mandi'] }}"
                                    name="kamar_mandi" id="kamar_mandi" class="form-control col">
                            </div>
                        </div>
                    </div>

                    <div class="row ps-5 py-3 container justify-content-between">
                        <div class="col px-5">
                            <div class="row">
                                <p class="col-auto filter-label my-auto">Link Foto</p>
                                <input type="text" name="foto" id="link_foto" class="form-control col"
                                    value="{{ $properti['foto'] }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row ps-5 py-3 container justify-content-between">
                        <div class="col px-5">
                            <div class="row justify-content-center">
                                <img id="foto" src="{{ $properti['foto'] }}"
                                    style="height: auto; width: 30vw; object-fit: cover">
                            </div>
                        </div>
                    </div>


                </div>

                <div class="p-4 w-auto row">
                    <div class="container">
                        <input type="submit" id="btn-add" class="btn btn-outline-primary rounded col py-2"
                            value="Save Changes" style="font-size: 100%; font-weight:bold;">
                    </div>
                </div>

            </form>
        </div>
    </div>


    <script>
        const token = $("input[name='_token']").val();

        $(document).ready(function() {
            loadKota();

            $("#provinsi").change(function() {
                loadKota();
            });

            $("#kota").change(function() {
                loadKecamatan();
            });

            setInterval(setPicture, 2000);
        });

        function setPicture() {
            $("#foto").attr("src", $("#link_foto").val())
        }



        function loadKota() {
            $.ajax({
                url: "{{ route('loadKota') }}",
                method: "get",
                data: {
                    _token: token,
                    provinsi_id: $("#provinsi").val(),
                    kota_id: $("#kota_id").val()
                },
                success: function(response) {
                    $("#kota").html(response);
                    loadKecamatan();
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.status + ': ' + xhr.statusText;
                    console.log('Error - ' + errorMessage);
                    alert(errorMessage);
                }
            });
        }

        function loadKecamatan() {
            // alert($("#kota").val());
            $.ajax({
                url: "{{ route('loadKecamatan') }}",
                method: "get",
                data: {
                    _token: token,
                    kota_id: $("#kota").val(),
                    kecamatan_id: $("#kecamatan_id").val()
                },
                success: function(response) {
                    // alert(response);
                    $("#kecamatan").html(response);
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.status + ': ' + xhr.statusText;
                    console.log('Error - ' + errorMessage);
                    alert(errorMessage);
                }
            })

        }
    </script>
@endsection
