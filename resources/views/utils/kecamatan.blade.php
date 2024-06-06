<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td,
        th {
            border: 1px solid black;
            padding: 0px 10px
        }
    </style>
</head>

<body>
    <a href="/utils/provinsi">back</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama</th>
                {{-- <th>Action</th> --}}
            </tr>
        </thead>
        <tbody>
            <div>Provinsi = {{ $provinsi['provinsi_id'] }} - {{ $provinsi['provinsi_nama'] }}</div>
            <div>Kota = {{ $kota['kota_id'] }} - {{ $kota['kota_nama'] }}</div>

            <form method="post">
                @csrf
                Kecamatan <input type="text" name="nama">
                <input type="submit">
            </form>

            @php $i = 1 @endphp
            @foreach ($kecamatan as $kec)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $kec['kecamatan_id'] }}</td>
                    <td>{{ $kec['kecamatan_nama'] }} </td>
                    {{-- <td><a href="/utils/kecamatan/{{ $kt['kota_id'] }}">Lihat</a></td> --}}
                </tr>
                @php $i++; @endphp
            @endforeach
        </tbody>
    </table>

</body>

</html>
