<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/carousel.css')}}">
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <title>HannaPetShop</title>
    @stack('styles') {{--Dùng Lệnh @push để lấy file css cho từng view phù hợp--}}
</head>
<body>
<div class="container-fuild">

    <div class="row">
        <div class="col">
            @include('carousel')</div>
        </div class="row">
        {{-- @yield('navbar') --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Hanna Petshop HI you {{$name}} !</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="{{url("/")}}">Home<a>
                <a class="nav-item nav-link active" href="{{url("")}}">Spa Service</a>
                {{-- Cart Infor --}}
                @if($name!=null && $role=="User")
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black">
                      Order Infor
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="{{url("/cartlist")}}">Cart</a>
                      <a class="dropdown-item" href="{{url("/orderhistory")}}">Order History</a>
                    </div>
                  </li>
                  @endif
                <a class="nav-item nav-link active" href="{{url("")}}">About Us</a>
                @if($name==null)
                <a class="nav-item nav-link active" href="{{url("/login")}}">Login</a>
                @endif
               @if ($name!=null && $role=="Admin")
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Admin
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{url("/userlist")}}">UserList</a>
                  <a class="dropdown-item" href="{{url("/stafflist")}}">Staff Info</a>
                  <a class="dropdown-item" href="{{url("/productlist")}}">Products Management</a>
                  <a class="dropdown-item" href="{{url("/revenuecheck")}}">Check Revenue</a>
                </div>
              </li>
              <a class="nav-item nav-link active" href="{{url("/logout")}}">Logout</a>
              @elseif ($name!=null && $role=="User")
                <a class="nav-item nav-link active" href="{{url("/")}}">User Info<a>
                <a class="nav-item nav-link active" href="{{url("")}}">Spa Schedule</a>
                <a class="nav-item nav-link active" href="{{url("/logout")}}">Logout</a>
               @endif
              </div>
            </div>
          </nav>
    </div>

       <div class="row">
       <div class="col-12">
        @yield('content') {{-- Tùy chọn content hiển thị--}}
       </div>
       </div>

         @yield('productlist') {{-- Tùy chọn content hiển thị--}}


       <div class="row">
        @yield('footer') {{--Chưa Hoàn Thành: views/footer.blade.php--}}
       </div>

</div>
</body>
</html>
