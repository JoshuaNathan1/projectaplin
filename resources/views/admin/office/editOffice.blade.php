    @extends('admin.templateAdmin')
    @section('isi')
        <div class="page-content pt-5">
            <div class="container">
                <h2>ID Office : {{ $office['office_id'] }}</h2>
                <hr>

                <form method="post">
                    @csrf
                    <input id="kota_id" value="{{ $office['kota_id'] }}" hidden>
                    <input type="text" name="action" value="edit" hidden>
                    <div class="row pb-3">
                        <div class="px-1 col">
                            <div class="row container justify-content-between">
                                <p class="col-auto filter-label my-auto">Nama Office</p>
                                <input type="text" name="nama" id="nama" class="form-control col"
                                    value="{{ $office['nama'] }}">
                            </div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="px-1 col">
                            <div class="row container justify-content-between">
                                <p class="col-auto filter-label my-auto">Alamat Office</p>
                                <input type="text" name="alamat" id="alamat" class="form-control col"
                                    value="{{ $office['alamat'] }}">
                            </div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="px-1 col">
                            <div class="row container">
                                <p class="filter-label col-auto my-auto">Provinsi</p>
                                <select name="provinsi" id="provinsi" class="form-control filter-select col">
                                    @foreach ($provinsi as $prov)
                                        <option value="{{ $prov['provinsi_id'] }}"
                                            @if ($office->kota->provinsi->provinsi_id == $prov['provinsi_id']) selected @endif>{{ $prov['provinsi_nama'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="px-1 col">
                            <div class="row container">
                                <p class="filter-label col-auto my-0">Kota</p>
                                <select name="kota" id="kota" class="form-control filter-select col-9">
                                    {{-- <div id="kota"></div> --}}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="px-1 col">
                            <div class="row container">
                                <p class="col-auto filter-label my-auto">Nomor Telepon</p>
                                <input type="text" name="telp" id="telp" class="form-control col"
                                    value="{{ $office['telp'] }}">
                            </div>
                        </div>

                    </div>
                    <div class="row pb-3">
                        <div class="px-1 col">
                            <div class="row container">
                                <p class="col-auto filter-label my-auto">Head Office</p>
                                <select name="agen" id="agen" class="form-control filter-select col">
                                    @foreach ($agen as $a)
                                        <option value="{{ $a['username'] }}"
                                            @if ($office->username == $a['username']) selected @endif>{{ $a->user->full_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="px-1 col">
                            <div class="row container">
                                <input type="submit" id="btn-edit" class="btn btn-outline-primary rounded col py-2"
                                    style="font-size: 100%; font-weight:bold;" value="Save Changes">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <script>
            const token = $("input[name='_token']").val();
            // alert(token);

            $(document).ready(function() {
                // alert("haloq");
                loadKota();

                $("#provinsi").change(function() {
                    loadKota();
                });
            });

            function loadKota() {
                // alert($("#kota_id").val());
                $.ajax({
                    url: "{{ route('adminloadKota') }}",
                    method: "get",
                    data: {
                        _token: token,
                        action: "adminloadKota",
                        provinsi_id: $("#provinsi").val(),
                        kota_id: $("#kota_id").val()
                    },
                    success: function(response) {
                        $("#kota").html(response);
                    },
                    error: function(xhr, status, error) {
                        var errorMessage = xhr.status + ': ' + xhr.statusText;
                        console.log('Error - ' + errorMessage);
                    }
                });
            }
        </script>
    @endsection
