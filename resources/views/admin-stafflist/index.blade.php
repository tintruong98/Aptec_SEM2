@extends('master')
@section('content')
<div class="container">
    <div class="col">
        <a href="adduser" class="btn btn-primary">Add</a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th>Staff Name</th>
          <th>Telephone</th>
          <th>Address</th>
          <th>Role</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          @foreach ($staff as $s )
          <tr>
            <td>{{$s->StaffName}}</td>
            <td >{{$s->Telephone}}</td>
            <td>{{$s->Address}}</td>
            <td>{{$s->Role}}</td>
            <td>
                <a href="{{url("/admin-stafflist/delete/{$s->StaffName}")}}">Delete</a>
                <a href="{{url("/admin-stafflist/update/{$s->StaffName}")}}">Update</a>
            </td>
          </tr>
          @endforeach

      </tbody>
    </table>
  </div>
@endsection
