@extends('master')
@section('content')

<div class="col-6 offset-3">

    <form action="/adduser" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1" >Email</label>
          <input type="email" class="form-control" name="userEmail" required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1 ">Name</label>
            <input type="text" class="form-control" name="userName" required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1" >Telephone</label>
            <input type="tel" class="form-control" name="userTel" required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1 ">Address</label>
            <input type="text" class="form-control" name="userAddr" required>
           </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" >Role</label>
          <input type="text" class="form-control" name="Role" required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1 ">Password</label>
            <input type="password" class="form-control" name="userPassword" required>
        </div>
        <button type="submit" class="btn btn-primary" onclick="return confirm('Are You Want To Add?')">Submit</button>
      </form>
</div>
@endsection
@section('footer')
