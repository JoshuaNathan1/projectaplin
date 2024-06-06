@extends('admin.templateAdmin')
@section('isi')
    <div class="page-content pt-5">
        <div class="container">
            <h2 class="fw-bold">Tambah Office</h2>
            <form method="post">
                @csrf
                <div class="p-4 my-3">
                    <div class="row pb-3">
                        <div class="px-1 col">
                            <div class="row container justify-content-between">
                                <p class="col-auto filter-label my-auto">Nama Office</p>
                                <input type="text" name="nama" id="nama" class="form-control col">
                            </div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="px-1 col">
                            <div class="row container justify-content-between">
                                <p class="col-auto filter-label my-auto">Alamat Office</p>
                                <input type="text" name="alamat" id="alamat" class="form-control col">
                            </div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="px-1 col">
                            <div class="row container">
                                <p class="filter-label col-auto my-auto">Provinsi</p>
                                <select name="provinsi" id="provinsi" class="form-control filter-select col">
                                    @foreach ($provinsi as $prov)
                                        <option value="{{ $prov['provinsi_id'] }}">{{ $prov['provinsi_nama'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="px-1 col">
                            <div class="row container">
                                <p class="filter-label col-auto my-0">Kota</p>
                                <select name="kota" id="kota" class="form-control filter-select col-9"></select>
                            </div>
                        </div>
                    </div>

                    <div class="row pb-3">
                        <div class="px-1 col">
                            <div class="row container">
                                <p class="col-auto filter-label my-auto">Nomor Telepon</p>
                                <input type="text" name="telp" id="telp" class="form-control col">
                            </div>
                        </div>
                    </div>
                    <hr>

                    <h3 class="py-3">Head Office</h3>
                    <div class="row ps-5 py-2 container justify-content-between">
                        <p class="col-auto filter-label my-auto">Nama Lengkap </p>
                        <input type="text" name="full_name" id="full_name" class="form-control col-9">
                    </div>
                    <div class="row ps-5 py-2 container justify-content-between">
                        <p class="col-auto filter-label my-auto">Email</p>
                        <input type="text" name="email" id="email" class="form-control col-9">
                    </div>
                    <div class="row ps-5 py-2 container justify-content-between">
                        <p class="col-auto filter-label my-auto">Username</p>
                        <input type="text" name="username" id="username" class="form-control col-9">
                    </div>
                    <div class="row ps-5 py-2 container justify-content-between">
                        <p class="col-auto filter-label my-auto">Password</p>
                        <input type="password" name="password" id="password" class="form-control col-9">
                    </div>

                    <div class="row ps-5 py-2 container justify-content-between">
                        <p class="col-auto filter-label my-auto">Nomor Whatsapp</p>
                        <input type="text" name="hp" id="hp" class="form-control col-9">
                    </div>

                    <div class="row ps-5 py-2 container justify-content-between">
                        <p class="col-auto filter-label my-auto">Link Foto Profil </p>
                        <input type="text" name="profile_pic" id="profile_pic" class="form-control col-9">
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
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.status + ': ' + xhr.statusText;
                    console.log('Error - ' + errorMessage);
                    alert(errorMessage);
                }
            });
        }
    </script>
@endsection
