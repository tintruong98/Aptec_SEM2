@extends('master')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
@endpush
@section('content')
<div id="login">
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="/register" method="post">
                        @csrf
                        <h3 class="text-center text-info" style="color: black">Sign Up</h3>
                        <div class="form-group">
                            <label for="username" class="text-info">Email:</label><br>
                            <input type="text" name="email" id="username" class="form-control" value="admin@gmail.com" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="text" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Telephone:</label><br>
                            <input type="text" name="telephone" id="telephone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Address:</label><br>
                            <input type="text" name="address" id="address" class="form-control">
                        </div>
                        @if ($err!=null)
                        <p style="color: red">{{$err}}</p>
                        @endif
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
