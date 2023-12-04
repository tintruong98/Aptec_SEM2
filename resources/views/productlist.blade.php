@extends('master')
@section('content')
<div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>ProductID</th>
          <th>Name</th>
          <th>Price</th>
          <th>Modify</th>
          <th><a href="{{url("/addproduct")}}" class="btn btn-success">+</a></th>
        </tr>
      </thead>
      <tbody>
          @foreach ($message as $product )
          <tr>
            <td>{{$product->id}}</td>
            <td >{{$product->ProductName}}</td>
            <td>{{$product->Price}}</td>
            <td><form  action="/deleteproduct/{{$product->id}}">@csrf<button class="btn btn-danger" type="submit" onclick="return confirm('Are you want to delete?')">Delete</button></form>
            <td><form  action="/updateproduct/{{$product->id}}">@csrf<button class="btn btn-info" type="submit">Update</button></form></td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
@endsection
