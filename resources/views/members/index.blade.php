@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
  <!-- /.content-header -->
<div class="card card-primary">
    <div class="card-header">
      <h4 class="m-0 text-light">All Members</h4>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Card Number</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Occupation</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @if ($members->count())
                @foreach ($members as $member)
                <tr>
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->first_name }}</td>
                    <td>{{ $member->middle_name }}</td>
                    <td>{{ $member->last_name }}</td>
                    <td>{{ $member->gender }}</td>
                    <td>{{ $member->occupation }}</td>
                    <td>{{ $member->category }}</td>
                    <td>
                    <div class="btn-group ">
                        <a href="#" target="_blank" class="btn btn-sm btn-primary"><span class="fas fa-user-check"></span> Verify</a>
                        <a href="#" data-toggle="modal" class="btn btn-sm btn-warning"><span class="fas fa-pencil-alt"></span> Edit</a>
                        <a href="#" data-toggle="modal" class="btn btn-sm btn-danger"><span class="fas fa-trash"></span> Delete</a>
                    </div>

                    </td>
                </tr>
                @endforeach

            {{-- @else
                <p class="mt-2">There are no posts</p> --}}
            @endif

            </tbody>
            <tfoot>
            <tr>
                <th>Card Number</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Birthdate</th>
                <th>Occupation</th>
                <th>Action</th>
            </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>


<!-- /.content -->
<!-- ----------------------------------------------------- -->
<!-- ----------------------------------------------------- -->
<!-- ----------------------------------------------------- -->
<!-- --------------------CONTENT-------------------------- -->
<!-- ----------------------------------------------------- -->
<!-- ----------------------------------------------------- -->
<!-- ----------------------------------------------------- -->

<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<!-- /.control-sidebar -->


@endsection
