@extends('source/master')
@extends('source/template')
@section('content')


<div class="card-body">
<div class="card px-2 pb-2">
<a class="nav-link" href="{{ url('user-registration') }}"> <button class="btn btn-success">Add</button></a>

    <div class="card">
    <div class="table-responsive">
        <table class="table">

            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Action</th>
                            

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)

                        @csrf
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->full_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->created_at }}</td>
                
                            <td>
                                <a href="javascript:void(0)" class="btn btn-danger delete"
                                    data-id="{{ $user->id }}">Delete</a>
                               
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $users->links('vendor.pagination.bootstrap-4') !!}
            </div>


        </table>
    </div>
</div>
</div>
</div>
@endsection
@section('extra_script')
<script type="text/javascript">
    $(document).ready(function () {

        $('#addNewSitus').click(function () {
            $('#addEditSitusForm').trigger("reset");
            $('#ajaxSitusModel').html("Add Situs");
            $('#ajax-situs-model').modal('show');
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('body').on('click', '.delete', function () {
            if (confirm("Delete Record?") == true) {
                var id = $(this).data('id');

                // ajax
                $.ajax({
                    type: "POST",
                    url: "{{ url('delete-user') }}",
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function (res) {
                        window.location.reload();
                    }
                });
            }
        });
    });
</script>
@endsection