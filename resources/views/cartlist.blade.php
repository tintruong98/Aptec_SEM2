@extends('master')
@section('content')
@push('styles')
<script src="{{asset('js/JS.js')}}"></script>
@endpush
<table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
        <th scope="col">Delete</th>
        <th scope="col">Update</th>
      </tr>
    </thead>
    <tbody>
        @if (session()->has('cart'))
        @foreach ($products as $product )
        <tr>
            <td>{{$product['ProductName']}}</td>
            <td><div class="row"><button class="btn btn-default" onclick=DecreaseTotal("{{$product['ProductID']}}","{{$product['Price']}}")>-</button><input type="text" id="{{$product['ProductID']}}" value="{{$product['Quantity']}}"><button class="btn btn-default" onclick=
                IncreaseTotal("{{$product['ProductID']}}","{{$product['Price']}}")>+</button></div></td>
            <td class="total {{$product['ProductID']}}">{{$product['Total']}}</td>
            <td><a href="/deletecartitem/{{$product['ProductID']}}">Delete</a></td>
            <td><a onclick=buyproduct("{{$product['ProductID']}}") class="btn btn-success btn-sm {{$product['ProductID']}}" role="button">Update</a></td>

          </tr>
        @endforeach
        @else
        Your Cart Is Empty
        @endif
    </tbody>
  </table>
  <a href="/createorderinfor" class="btn btn-default" style="border-style:solid;border-color: blue;float:right;">Check Out</a>
@endsection
