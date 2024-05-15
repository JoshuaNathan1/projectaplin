@extends('admin.templateAdmin')

@section('isi')
    <div class="container">

        <form class="row" action="index.php" method="get" style="margin:0px" autocomplete="off">
            <input type="hidden" name="type" value="mb">
            <div class="col-md-4 col-xs-12" style="position: inherit;">
                <div class="custom-search-container row">
                    <div class="col-md-8 col-xs-12 col-left">
                        <input placeholder="Cari Agen/Kantor ..." type="text" name="keyword" value=""
                            class="cs-input-search">
                    </div>
                    <div class="col-md-4 col-xs-12 col-right">
                        <button type="submit" class="cs-btn-search" style="width: 100%">Cari&nbsp;<i class="fas fa-search"
                                aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-xs-12">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-sm-3 filter-label">
                                Wilayah
                            </div>
                            <div class="col-sm-9">
                                <select class="form-control filter-select office-province" name="province">
                                    <option value="">Pilih Wilayah</option>
                                    <option value="RG12">BANTEN</option>
                                    <option value="RG1">BODETABEK</option>
                                    <option value="RG2">DKI JAKARTA</option>
                                    <option value="RG3">JAWA BARAT</option>
                                    <option value="RG4">JAWA TENGAH</option>
                                    <option value="RG5">JAWA TIMUR</option>
                                    <option value="RG6">KALIMANTAN</option>
                                    <option value="RG11">NUSA TENGGARA BARAT</option>
                                    <option value="RG7">NUSA TENGGARA TIMUR</option>
                                    <option value="RG8">OTHER PROVINCE</option>
                                    <option value="RG9">SULAWESI</option>
                                    <option value="RG10">SUMATERA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-sm-3 filter-label">
                                Kota
                            </div>
                            <div class="col-sm-9">
                                <select class="form-control filter-select office-city" name="city">
                                    <option value="">Pilih Kota</option>
                                    {{-- <option province="BANTEN" value="SERANG">SERANG</option>
                                        <option province="BODETABEK" value="TANGERANG">TANGERANG</option>
                                        <option province="BODETABEK" value="CIBUBUR">CIBUBUR</option>
                                        <option province="BODETABEK" value="BOGOR">BOGOR</option>
                                        <option province="BODETABEK" value="BEKASI">BEKASI</option>
                                        <option province="BODETABEK" value="DEPOK">DEPOK</option>
                                        <option province="DKI JAKARTA" value="JAKARTA BARAT">JAKARTA BARAT</option>
                                        <option province="DKI JAKARTA" value="JAKARTA PUSAT">JAKARTA PUSAT</option>
                                        <option province="DKI JAKARTA" value="JAKARTA SELATAN">JAKARTA SELATAN</option>
                                        <option province="DKI JAKARTA" value="JAKARTA TIMUR">JAKARTA TIMUR</option>
                                        <option province="DKI JAKARTA" value="JAKARTA UTARA">JAKARTA UTARA</option>
                                        <option province="JAWA BARAT" value="BANDUNG">BANDUNG</option>
                                        <option province="JAWA BARAT" value="KARAWANG">KARAWANG</option>
                                        <option province="JAWA TENGAH" value="TEGAL">TEGAL</option>
                                        <option province="JAWA TENGAH" value="SOLO">SOLO</option>
                                        <option province="JAWA TENGAH" value="SEMARANG">SEMARANG</option>
                                        <option province="JAWA TENGAH" value="SALATIGA">SALATIGA</option>
                                        <option province="JAWA TENGAH" value="YOGYAKARTA">YOGYAKARTA</option>
                                        <option province="JAWA TIMUR" value="MALANG">MALANG</option>
                                        <option province="JAWA TIMUR" value="JEMBER">JEMBER</option>
                                        <option province="JAWA TIMUR" value="SURABAYA">SURABAYA</option>
                                        <option province="KALIMANTAN" value="BALIKPAPAN">BALIKPAPAN</option>
                                        <option province="KALIMANTAN" value="PONTIANAK">PONTIANAK</option>
                                        <option province="KALIMANTAN" value="SINTANG">SINTANG</option>
                                        <option province="KALIMANTAN" value="SAMARINDA">SAMARINDA</option>
                                        <option province="KALIMANTAN" value="BANJARMASIN">BANJARMASIN</option>
                                        <option province="NUSA TENGGARA BARAT" value="LOMBOK">LOMBOK</option>
                                        <option province="NUSA TENGGARA TIMUR" value="KUPANG">KUPANG</option>
                                        <option province="OTHER PROVINCE" value="BALI">BALI</option>
                                        <option province="SULAWESI" value="PALU">PALU</option>
                                        <option province="SULAWESI" value="MAKASSAR">MAKASSAR</option>
                                        <option province="SULAWESI" value="MANADO">MANADO</option>
                                        <option province="SUMATERA" value="PALEMBANG">PALEMBANG</option>
                                        <option province="SUMATERA" value="MEDAN">MEDAN</option>
                                        --}}
                                    <option province="RG12" value="R35">SERANG</option>
                                    <option province="RG1" value="R25">TANGERANG</option>
                                    <option province="RG1" value="R7">CIBUBUR</option>
                                    <option province="RG1" value="R6">BOGOR</option>
                                    <option province="RG1" value="R5">BEKASI</option>
                                    <option province="RG1" value="R34">DEPOK</option>
                                    <option province="RG2" value="R8">JAKARTA BARAT</option>
                                    <option province="RG2" value="R9">JAKARTA PUSAT</option>
                                    <option province="RG2" value="R10">JAKARTA SELATAN</option>
                                    <option province="RG2" value="R11">JAKARTA TIMUR</option>
                                    <option province="RG2" value="R12">JAKARTA UTARA</option>
                                    <option province="RG3" value="R3">BANDUNG</option>
                                    <option province="RG3" value="R31">KARAWANG</option>
                                    <option province="RG4" value="R26">TEGAL</option>
                                    <option province="RG4" value="R23">SOLO</option>
                                    <option province="RG4" value="R22">SEMARANG</option>
                                    <option province="RG4" value="R33">SALATIGA</option>
                                    <option province="RG4" value="R27">YOGYAKARTA</option>
                                    <option province="RG5" value="R17">MALANG</option>
                                    <option province="RG5" value="R13">JEMBER</option>
                                    <option province="RG5" value="R24">SURABAYA</option>
                                    <option province="RG6" value="R2">BALIKPAPAN</option>
                                    <option province="RG6" value="R30">PONTIANAK</option>
                                    <option province="RG6" value="R32">SINTANG</option>
                                    <option province="RG6" value="R21">SAMARINDA</option>
                                    <option province="RG6" value="R4">BANJARMASIN</option>
                                    <option province="RG11" value="R15">LOMBOK</option>
                                    <option province="RG7" value="R14">KUPANG</option>
                                    <option province="RG8" value="R1">BALI</option>
                                    <option province="RG9" value="R20">PALU</option>
                                    <option province="RG9" value="R16">MAKASSAR</option>
                                    <option province="RG9" value="R18">MANADO</option>
                                    <option province="RG10" value="R19">PALEMBANG</option>
                                    <option province="RG10" value="R28">MEDAN</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto col-xs-12 h-full">
                        <a href="/admin/office/add" class="filter-label btn btn-outline-primary rounded fw-bold ">
                            Add Office
                        </a>
                    </div>
                </div>
            </div>
        </form>



        <div class="row" style="margin-top:50px">
            @foreach ($offices as $office)
                <div class="col-md-4 col-sm-12">
                    <div class="member-box">
                        <p class="member-office">{{ $office['nama'] }} - {{ $office['office_id'] }}</p>
                        <p class="member-name">{{ $office->user->full_name }}</p>
                        <a href="{{ $office['profile_pic'] }}" style="width:50%">
                            <img class="profile-picture" src="{{ $office->user->profile_pic }}"
                                oneerror="this.src='https://eraindonesia.com/images/person-default.png'">
                        </a>
                        <p class="member-city">{{ $office->kota->kota_nama }}</p>
                        <p class="member-phone">{{ $office->user->hp }}</p>
                        <p class="member-phone">{{ $office['telp'] }}</p>
                        <p class="member-email">{{ $office->user->email }}</p>
                        <p class="member-address text-center">{{ $office['alamat'] }}</p>
                        <div class="member-btn row">
                            <div class="p-1 col-12">
                                <a href="/admin/office/{{ $office['office_id'] }}"
                                    class="btn btn-block btn-primary text-white">
                                    LIHAT
                                </a>
                            </div>
                            <div class="p-1 col">
                                <a href="/admin/office/edit/{{ $office['office_id'] }}"
                                    class="btn btn-block btn-primary text-white">
                                    UBAH
                                </a>
                            </div>
                            <div class="p-1 col">
                                <a href="{{ route('deleteOffice', ['id' => $office['office_id']]) }}"
                                    class="btn btn-block btn-primary text-white">
                                    HAPUS
                                </a>
                            </div>

                        </div>
                    </div>
                    </a>


                </div>
            @endforeach
        </div>

    </div>
@endsection
