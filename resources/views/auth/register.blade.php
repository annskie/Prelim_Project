@extends('base')
@section('content')
<div class="container">
    <div class="login-box">
        <h2>Register User</h2>
        <form action="{{'/register'}}" method="POST">
            {{csrf_field()}}
          <div class="user-box mt-5">
            <input type="text" name="name"  id="name" class="form-control" placeholder="Name">
            @error('name')
            <p class="text-danger">{{$message}}</p>
        @enderror
          <div class="user-box mt-4">
            <input type="email" name="email"  id="email" class="form-control" placeholder="Email">
            @error('email')
                <p class="text-danger">{{$message}}</p>
            @enderror
          </div>
          <div class="user-box mt-4">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            @error('password')
            <p class="text-danger">{{$message}}</p>
        @enderror
          </div>
          <div class="user-box mt-4 mb-5">
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password">
            @error('password')
            <p class="text-danger">{{$message}}</p>
        @enderror
          </div>
            <a href="{{'/log'}}">Already have an account?</a> <br> <br>
          <button class="btn btn-success opacity-80 btn-sm" type="submit">
            Submit
          </button>
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
  background: rgba(0,0,0,.5);
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

</style>
