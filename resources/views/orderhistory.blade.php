@extends('master')
@section('content')
@push('styles')
<script src="{{asset('js/JS.js')}}"></script>
@endpush
<table class="table">
    <thead>
      <tr>
        <th scope="col">OrderID</th>
        <th scope="col">Date</th>
        <th scope="col">Total</th>
        <th scope="col">Detail</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order )
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->Date}}</td>
            <td>{{$order->TotalPrice}}</td>
            <td><a href="{{url("/orderdetail/".$order->id)}}">detail</a></td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection
