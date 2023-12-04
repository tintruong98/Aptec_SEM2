@extends('master')
@section('content')
    <form method="POST" action="/createorderinfor">
        @csrf
        <!-- Name input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form4Example1">Name</label>
            <input type="text" name="Name" class="form-control" value="{{$name}}" />

        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form4Example2">Email address</label>
            <input type="email" name="Email" class="form-control" value="{{$email}}" />

        </div>

        <!-- Address input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form4Example3">Address</label>
            <input class="form-control" name="Address" value="{{$address}}">

        </div>

        <!-- Telephone input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form4Example3">Telephone</label>
            <input class="form-control" name="Telephone" value={{$telephone}}>

        </div>
        <h3>Total Price: {{ $TotalPrice }}</h3>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
    </form>
@endsection
