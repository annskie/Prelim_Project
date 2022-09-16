@extends('base')
@section('content')
<div class="container">

    @if (session('message'))
        <div class="alert alert-success">{{session('message')}} </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">{{session('error')}} </div>
    @endif
    <div class="login-box">
        <h2>User Login</h2>
        <form action="{{'/log'}}" method="POST">
            {{csrf_field()}}
          <div class="user-box mb-5">
            <input type="email" name="email"  id="email" class="form-control" placeholder="Email">
            {{-- <label for="email">Email</label> --}}
            @error('email')
                <p class="text-danger">{{$message}}</p>
            @enderror
          </div>
          <div class="user-box mb-5">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            {{-- <label for="email">Password</label> --}}
            @error('password')
            <p class="text-danger">{{$message}}</p>
        @enderror
          </div>
          <div class="d-flex">
            <div class="flex-grow-1">
                <a href="{{'/register'}}">Register?</a>
            </div>
            <button class="btn btn-primary opacity-75 px-5" type="submit">Login</button>
        </div>
        </form>
      </div>
</div>
@endsection

<style>
    html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#ff11e3, #2b00ff);
}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0, 0, 0, 0.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: rgb(232, 60, 86);
  text-align: center;
}
.login-box .user-box {
  position: relative;
}
</style>

