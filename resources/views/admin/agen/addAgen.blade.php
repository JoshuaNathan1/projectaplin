@extends('admin.templateAdmin')
@section('isi')
    <div class="page-content pt-5">
        <div class="container">
            <h2 class="px-5">Tambah Agen</h2>
            <hr>
            <form method="post">
                @csrf
                <div class="row px-5 py-2 container justify-content-between">
                    <p class="col-auto filter-label my-auto">Nama Lengkap </p>
                    <input type="text" name="full_name" id="full_name" class="form-control col-9">
                </div>
                <div class="row px-5 py-2 container justify-content-between">
                    <p class="col-auto filter-label my-auto">Email</p>
                    <input type="text" name="email" id="email" class="form-control col-9">
                </div>
                <div class="row px-5 py-2 container justify-content-between">
                    <p class="col-auto filter-label my-auto">Username</p>
                    <input type="text" name="username" id="username" class="form-control col-9">
                </div>
                <div class="row px-5 py-2 container justify-content-between">
                    <p class="col-auto filter-label my-auto">Password</p>
                    <input type="password" name="password" id="password" class="form-control col-9">
                </div>
                <div class="row px-5 py-2 container justify-content-between">
                    <p class="filter-label col-auto my-auto">Office</p>
                    @if (isset($office_id))
                        <input type="text" name="office" value="{{ $office_id }}" hidden>
                    @endif>
                    <select name="office" id="office" class="form-control filter-select col-9"
                        @if (isset($office_id)) disabled @endif>
                        @foreach ($offices as $office)
                            <option value="{{ $office['office_id'] }}" @if (isset($office_id) && $office_id == $office['office_id']) selected @endif>
                                [{{ $office['office_id'] }}] {{ $office['office_nama'] }} -
                                {{ $office['kota_nama'] }}, {{ $office['provinsi_nama'] }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="row px-5 py-2 container justify-content-between">
                    <p class="col-auto filter-label my-auto">Nomor Whatsapp</p>
                    <input type="text" name="hp" id="hp" class="form-control col-9">
                </div>

                <div class="row px-5 py-2 container justify-content-between">
                    <p class="col-auto filter-label my-auto">Link Foto Profil </p>
                    <input type="text" name="profile_pic" id="profile_pic" class="form-control col-9">
                </div>

                <div class="row px-5 py-2">
                    <div class="px-1 col">
                        <div class="row container">
                            <input type="submit" id="btn-add" class="btn btn-outline-primary rounded col py-2"
                                style="font-size: 100%; font-weight:bold;">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
