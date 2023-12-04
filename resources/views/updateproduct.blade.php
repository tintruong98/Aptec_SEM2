@extends('master')
@section('content')
<div class="col-6 offset-3">
    <p>{{$message}}</p>
    <h3>Update product</h3>
    <form action="/updateproduct" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1" >Product Name</label>
          <input type="text" class="form-control" name="productname" value="{{$productName}}" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1" >Price</label>
            <input type="text" class="form-control" name="productprice" value="{{$productPrice}}" required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1 ">Picture</label>
            <input type="file" class="form-control" name="picture">
            <img src="{{asset($productPicture)}}" alt="" style="width:100px;height:100px">
          </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" >Description</label>
          <textarea class="form-control" name="productdescription" rows="3" required >{{$productDesc}}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control" name="Category">
              <option value="Dog Food">Dog Food</option>
              <option value="Cat Food">Cat Food</option>
              <option value="Accessory">Accessory</option>
            </select>
          </div>
        <button type="submit" class="btn btn-primary" onclick="return confirm('Are You Want To Update?')">Submit</button>
      </form>

</div>
@endsection
@section('footer')
@endsection
