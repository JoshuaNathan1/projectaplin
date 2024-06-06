@extends('agen.templateAgen')
@section('isi')
    <div class="page-content pt-5">
        <div class="container">
            <h2 class="fw-bold">Tambah Properti</h2>
            <form method="post">
                @csrf
                <div class="p-4 my-3">
                    <div class="row pb-3">
                        <div class="px-1 col">
                            <div class="row container justify-content-between">
                                <p class="col-auto filter-label my-auto">Judul</p>
                                <input type="text" name="judul" id="judul" class="form-control col" required>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="px-1 col">
                            <div class="row container justify-content-between">
                                <p class="col-auto filter-label my-auto">Deskripsi</p>
                                <textarea type="text" name="deskripsi" id="deskripsi" class="form-control col" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="px-1 col">
                            <div class="row container">
                                <p class="filter-label col-auto my-auto">Tipe</p>
                                <select name="proptype" id="proptype" class="form-control filter-select col mx-5">
                                    @foreach ($proptype as $pt)
                                        <option value="{{ $pt['proptype_id'] }}">{{ $pt['nama'] }}</option>
                                    @endforeach
                                </select>
                                <select name="transaksi" id="transaksi" class="form-control filter-select col">
                                    <option value="DIJUAL">DIJUAL</option>
                                    <option value="DISEWAKAN">DISEWAKAN</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="px-1 col">
                            <div class="row container justify-content-between">
                                <p class="col-auto filter-label my-auto">Harga Rp</p>
                                <input type="number" value="100000" name="harga" id="harga" class="form-control col">
                            </div>
                        </div>
                    </div>

                    <hr class="mt-5" style="background-color: black">
                    <h3 class="py-3">Lokasi</h3>

                    <div class="row ps-5 py-2 container justify-content-between">
                        <p class="filter-label col-auto my-auto">Provinsi</p>
                        <select name="provinsi" id="provinsi" class="form-control filter-select col">
                            @foreach ($provinsi as $prov)
                                <option value="{{ $prov['provinsi_id'] }}">{{ $prov['provinsi_nama'] }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="row ps-5 py-2 container justify-content-between">
                        <p class="filter-label col-auto my-0">Kota</p>
                        <select name="kota" id="kota" class="form-control filter-select col"></select>
                    </div>

                    <div class="row ps-5 py-2 container justify-content-between">
                        <p class="filter-label col-auto my-0">Kecamatan</p>
                        <select name="kecamatan" id="kecamatan" class="form-control filter-select col"></select>
                    </div>


                    <div class="row ps-5 py-2 container justify-content-between">
                        <p class="col-auto filter-label my-auto">Alamat</p>
                        <input type="text" name="alamat" id="alamat" class="form-control col" required>
                    </div>

                    <hr class="mt-5" style="background-color: black">
                    <h3 class="py-3">Detail</h3>

                    <div class="row ps-5 py-3 container justify-content-between">
                        <div class="col px-5">
                            <div class="row">
                                <p class="col-auto filter-label my-auto">Luas Tanah</p>
                                <input type="number" min="0" value="1" name="luas_tanah" id="luas_tanah"
                                    class="form-control col">
                            </div>
                        </div>
                        <div class="col px-5">
                            <div class="row">
                                <p class="col-auto filter-label my-auto">Luas Bangunan</p>
                                <input type="number" min="0" value="1" name="luas_bangunan" id="luas_bangunan"
                                    class="form-control col">
                            </div>
                        </div>
                    </div>
                    <div class="row ps-5 py-3 container justify-content-between">
                        <div class="col px-5">
                            <div class="row">
                                <p class="col-auto filter-label my-auto">Kamar Tidur</p>
                                <input type="number" min="0" value="1" name="kamar_tidur" id="kamar-tidur"
                                    class="form-control col">
                            </div>
                        </div>
                        <div class="col px-5">
                            <div class="row">
                                <p class="col-auto filter-label my-auto">Kamar Mandi</p>
                                <input type="number" min="0" value="1" name="kamar_mandi" id="kamar_mandi"
                                    class="form-control col">
                            </div>
                        </div>
                    </div>

                    <div class="row ps-5 py-3 container justify-content-between">
                        <div class="col px-5">
                            <div class="row">
                                <p class="col-auto filter-label my-auto">Link Foto</p>
                                <input type="text" name="foto" id="foto" class="form-control col" required>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="p-4 w-auto row">
                    <div class="container">
                        <input type="submit" id="btn-add" class="btn btn-outline-primary rounded col py-2"
                            style="font-size: 100%; font-weight:bold;">
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
        });

        function loadKota() {
            $.ajax({
                url: "{{ route('loadKota') }}",
                method: "get",
                data: {
                    _token: token,
                    provinsi_id: $("#provinsi").val()
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
                    kota_id: $("#kota").val()
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
