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
            @php
                $i = 1;
            @endphp
            @foreach ($provinsi as $prov)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $prov['provinsi_id'] }}</td>
                    <td>{{ $prov['provinsi_nama'] }}</td>
                    <td><a href="/utils/kota/{{ $prov['provinsi_id'] }}">Lihat</a></td>
                </tr>
                @php
                    $i++;
                @endphp
            @endforeach
        </tbody>
    </table>

</body>

</html>
