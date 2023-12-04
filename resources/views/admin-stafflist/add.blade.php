@extends('master')
@section('content')

<div class="col-6 offset-3">

    <form action="/addstaff" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1" >Staff Name</label>
          <input type="text" class="form-control" name="StaffName" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1" >Telephone</label>
            <input type="tel" class="form-control" name="Telephone" required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1 ">Address</label>
            <input type="text" class="form-control" name="Address" required>

           </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" >Role</label>
          <input type="text" class="form-control" name="Role" required>
        </div>
        <button type="submit" class="btn btn-primary" onclick="return confirm('Are You Want To Add?')">Submit</button>
      </form>
</div>
@endsection
@section('footer')
