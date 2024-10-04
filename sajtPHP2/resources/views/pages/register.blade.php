<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Register</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link href="{{asset("css/style1.css")}}" rel="stylesheet">
</head>
<body>
<div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
</div>
<form action="{{route("singUp")}}" method="post">
    @csrf
    <h3>Sing Up Here</h3>

    <label for="name">Name</label>
    <input type="text" placeholder="Email or Phone" name="name" value="{{old('name')}}">
    @error('name')
        <div>{{$message}}</div>
    @enderror

    <label for="lastname">Last Name</label>
    <input type="text" placeholder="Password" name="lastname" value="{{old('lastname')}}">
    @error('lastname')
    <div>{{$message}}</div>
    @enderror

    <label for="email">Email</label>
    <input type="email" placeholder="Password" name="email" value="{{old('email')}}">
    @error('email')
    <div>{{$message}}</div>
    @enderror

    <label for="password">Password</label>
    <input type="password" placeholder="Password" name="password">
    @error('password')
    <div>{{$message}}</div>
    @enderror

    <label for="password_confirmation">Re-Password</label>
    <input type="password" placeholder="Re-Password" name="password_confirmation">
    @error('passwordRe')
    <div>{{$message}}</div>
    @enderror

    <button type="submit">Sing Up</button>
    <div class="social">
        <div class="go"><i class="fab fa-google"></i>  Google</div>
        <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
    </div>
</form>
</body>
</html>
