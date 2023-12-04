@extends('master')
@push('styles')
<script>
    $(document).ready(function(){
        setInterval(() => {
            window.location.replace("http://localhost:8000/");
        }, 3000);
    });
    </script>
@endpush
@section('content')
<a href="/">{{$message}}</a>
@endsection
