<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Register Form </title>
    <link rel="stylesheet" href="{{asset('style-register.css')}}">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="{{ route('auth.save') }}" method="post">

      @if(Session::get('success'))
        <div class="alert alert-success">
           {{ Session::get('success') }}
        </div>
      @endif

      @if(Session::get('fail'))
        <div class="alert alert-danger">
           {{ Session::get('fail') }}
        </div>
      @endif

        <div class="user-details">
          <div class="input-box">
            <label for="name">Full Name</label>
            <input type="text" placeholder="Enter your name" value="{{ old('name') }}" />
            <span class="text-danger">@error('name'){{ $message }} @enderror</span>
          </div>
          <div class="input-box">
            <label for="username">Username</label>
            <input type="text" placeholder="Enter your username" value="{{ old('username') }}" />
            <span class="text-danger">@error('username'){{ $message }} @enderror</span>
          </div>
          <div class="input-box">
            <label for="email">Email</label>
            <input type="text" placeholder="Enter your email" value="{{ old('email') }}" />
            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
          </div>
          <div class="input-box">
            <label for="password">Password</label>
            <input type="text" placeholder="Enter your password" value="{{ old('password') }}" />
            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
          </div>
          <div class="input-box">
           <label for="password">Confirm Password</label>
            <input type="text" placeholder="Confirm your password" value="{{ old('password_confirm') }}" />
            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
        <a href="{{ route('auth.login') }}">I already have an account, sign in</a>
      </form>
    </div>
  </div>

</body>
</html>
