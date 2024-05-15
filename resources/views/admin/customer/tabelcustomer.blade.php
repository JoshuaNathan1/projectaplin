@foreach ($customers as $cust)
    <tr class="row">
        <td class="col-2">
            <img class="rounded-circle profile-picture w-50" src="{{ asset($cust['profile_pic']) }}" alt="">
        </td>
        <td class="col-2">{{ $cust['username'] }}</td>
        <td class="col-2">{{ $cust['full_name'] }}</td>
        <td class="col-2">{{ $cust['email'] }}</td>
        <td class="col-2">{{ $cust['hp'] }}</td>

        <td class="col-2">
            <a href="" class="btn btn-outline-primary">Lihat</a>
        </td>
    </tr>
@endforeach
