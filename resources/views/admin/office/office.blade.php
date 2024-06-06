@extends('admin.templateAdmin')

@section('isi')
    <div class="container">
        <div class="col-auto col-xs-12 h-full">
            <a href="/admin/office/add" class="filter-label btn btn-outline-primary rounded fw-bold ">
                Add Office
            </a>
        </div>

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
