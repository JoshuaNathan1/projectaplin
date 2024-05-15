@extends('admin.templateAdmin')

@section('isi')
    <div class="page-content">
        <div class="container " style="border: 1px solid grey; border-radius: 10px">
            <table class="table text-center" >
                <thead>
                    <tr class="row">
                        <th class="col">Profile</th>
                        <th class="col">Username</th>
                        <th class="col">Name</th>
                        <th class="col">Email</th>
                        <th class="col">Phone Number</th>
                        <th class="col">Action</th>
                    </tr>
                </thead>
                <tbody id="content"></tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            load();
        });

        function load() {
            $.ajax({
                url: "{{ route('adminloadCustomer') }}",
                method: "get",
                data: {},
                success: function(response) {
                    // alert(response);
                    $("#content").html(response);
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.status + ': ' + xhr.statusText;
                    console.log('Error - ' + errorMessage);
                    alert(errorMessage);
                }
            });
        }
    </script>
@endsection
