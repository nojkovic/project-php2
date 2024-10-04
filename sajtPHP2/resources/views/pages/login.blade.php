<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Login</title>

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
<form method="post" action="{{route("log")}}">
    @csrf
    <h3>Login Here</h3>

    <label for="email">Email</label>
    <input type="email" placeholder="Email or Phone" name="email" value="{{old("email")}}">

    <label for="password">Password</label>
    <input type="password" placeholder="Password" name="password">
    @if(session("errors"))
        <div> {{session("errors")}} </div>
    @endif
    <button>Log In</button>
    <div class="social">
        <div class="go"><i class="fab fa-google"></i>  Google</div>
        <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
    </div>
</form>
</body>
</html>
