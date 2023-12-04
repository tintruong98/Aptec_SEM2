@extends('master')
@push('styles')
<link rel="stylesheet" href="{{asset('css/yearpicker.css')}}">
<script src="{{asset('js/yearpicker.js')}}" async></script>

@endpush
    @section('content')
    <form action="/revenuecheck" method="POST">
        @csrf
        <input type="number" min="2000" max="2099" step="1" value="2021" name="year"/>
        <button type="submit">Search</button>
    </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Month</th>
                    <th scope="col">Revenue</th>
                    <th scope="col">Order Count</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 12; $i++)
                    <tr>
                        <td>{{ $month[$i] }}</td>
                        <td>{{ $revenue[$i] }}</td>
                        <td>{{ $count[$i] }}</td>
                    </tr>
                @endfor
            </tbody>
        </table>
    @endsection
