@foreach ($prop as $p)
    <div class="card" style="width: 18rem;">
        <img src="{{ $p['foto'] }}" class="card-img-top" alt="...">
        <div class="card-body">
            <div class="card-text">
                {{ $p['transaksi'] }}
            </div>
            <h5 class="card-title">{{ $p['judul'] }}</h5>
            <p class="card-text">{{ $p['deskripsi'] }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Harga : Rp {{ $p['harga'] }}</li>
            <li class="list-group-item">Alamat : {{ $p['alamat'] }} m2</li>

            <li class="list-group-item d-flex">

                <div class="w-50">LT : {{ $p['luas_tanah'] }} m2</div>
                <div class="w-50">LB : {{ $p['luas_bangunan'] }} m2</div>

            </li>

            <li class="list-group-item d-flex">

                <div class="w-50">Kamar Tidur : {{ $p['kamar_tidur'] }}</div>
                <div class="w-50">Kamar Mandi : {{ $p['kamar_mandi'] }}</div>

            </li>

        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
@endforeach
