@extends('master')
@section('content')
<div class="container">
    <div class="col">
        <a href="adduser" class="btn btn-primary">Add</a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th>Email</th>
          <th>Name</th>
          <th>Telephone</th>
          <th>Address</th>
          <th>Role</th>
          <th>Password</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          @foreach ($userList as $u )
          <tr>
            <td>{{$u->Email}}</td>
            <td>{{$u->Name}}</td>
            <td >{{$u->Telephone}}</td>
            <td>{{$u->Address}}</td>
            <td>{{$u->Role}}</td>
            <td>{{$u->Password}}</td>
            <td>
                <a href="{{url("/admin-userlist/delete/{$u->Email}")}}">Delete</a>
                <a href="{{url("/admin-userlist/update/{$u->Email}")}}">Update</a>
            </td>
          </tr>
          @endforeach

      </tbody>
    </table>
  </div>
@endsection
