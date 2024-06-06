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
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <div>ID Provinsi = {{ $provinsi['provinsi_id'] }}</div>
            <div>Nama Provinsi = {{ $provinsi['provinsi_nama'] }}</div>

            <form method="post">
                @csrf
                Provinsi <input type="text" name="nama">
                <input type="submit">
            </form>

            @php $i = 1 @endphp
            @foreach ($kota as $kt)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $kt['kota_id'] }}</td>
                    <td>{{ $kt['kota_nama'] }}</td>
                    <td><a href="/utils/kecamatan/{{ $kt['kota_id'] }}">Lihat</a></td>
                </tr>
                @php $i++ @endphp
            @endforeach
        </tbody>
    </table>

</body>

</html>
