@extends('master')
@section('content')
@push('styles')
<script src="{{asset('js/JS.js')}}"></script>
@endpush
<table class="table">
    <thead>
      <tr>
        <th scope="col">Product Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order )
        <tr>
            <td>{{$order->ProductName}}</td>
            <td>{{$order->Quantity}}</td>
            <td>{{$order->Price}}</td>
          </tr>
        @endforeach
    </tbody>
  </table>
  <h3>Total:{{$total}}</h3>
@endsection
