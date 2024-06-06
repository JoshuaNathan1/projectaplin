@extends('admin.templateAdmin')

@section('isi')
    <div class="page-content">
        <div class="container profile-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-card profile-mb">
                        <div class="row" style="border-bottom: 1px solid #CA1F30">

                            <div class="col profile-gradient">
                                <div class="row profile-info" style="height:100%">
                                    <div class="profile-image col-3">
                                        <img src="{{ $office->user->profile_pic }}"
                                            onerror="this.src='https://eraindonesia.com/images/person-default.png';"
                                            width="100%">
                                        <p class="label-code" id="office_id">{{ $office['office_id'] }}</p>

                                    </div>
                                    <div class="col-7 py-3">
                                        <div class="row">
                                            <div class="col">
                                                <p class="label-name">{{ $office->user->full_name }}</p>
                                                <p class="label-hp">{{ $office->user->hp }} </p>
                                                <p class="label-email">{{ $office->user->email }}</p>
                                                <div class="mt-4 desktop-web">
                                                    <a class="btn btn-sosmed c-hijau mr-1 mb-2" target="_blank"
                                                        href="https://wa.me/{{ $office->user->hp }}">
                                                        Whatsapp
                                                        <i class="fab fa-whatsapp" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <p class="label-office">{{ $office['nama'] }}</p>
                                                <p class="label-address">{{ $office['alamat'] }}</p>
                                                <p class="label-address">{{ $office->kota->kota_nama }}</p>
                                                <p class="label-telp">{{ $office['telp'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="profile-view">
                                    <a style="flex:1;text-align:center" class="active" id="btn-prop">View Listings</a>
                                    <div class="divider"></div>
                                    <a style="flex:1;text-align:center" class="" id="btn-agen">View Marketings</a>
                                </div>
                            </div>
                        </div>
                        <div class="row p-5 justify-content-end h-full" id="add-agen">
                            <a href="/admin/agen/add?office_id={{ $office['office_id'] }}"
                                class="filter-label btn btn-outline-primary rounded fw-bold ">
                                Daftarkan Agen
                            </a>
                        </div>
                        <div id="content" class="row px-5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const token = $("input[name='_token']").val();

        $(document).ready(function() {
            $("#btn-agen").click(function() {
                // alert($("#office_id").text());
                $.ajax({
                    url: "{{ route('adminloadAgen') }}",
                    method: "get",
                    data: {
                        _token: token,
                        office_id: $("#office_id").text()
                    },
                    success: function(response) {
                        $("#content").html(response);
                        $("#btn-agen").addClass("active");
                        $("#btn-prop").removeClass("active");

                    },
                    error: function(xhr, status, error) {
                        var errorMessage = xhr.status + ': ' + xhr.statusText;
                        console.log('Error - ' + errorMessage);
                    }
                });
            })
        })
    </script>
@endsection
