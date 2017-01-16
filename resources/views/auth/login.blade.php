@extends('main')

@section('title', ' | Login')

@section('main-title', 'registration-form')

@section('content')

  <h2 class="tittle">Login</h3>
    <div class="col-md-6 col-md-offset-3">
  <div class="panel panel-default">
    <div class="panel-heading"> Login</div>
    <div class="panel-body">

      <form class="form-vertical" action="" method="POST" >

          {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
          <label for="email">Email</label>
          <input type="email" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}">
          @if ($errors->has('email'))
             <span class="help-block">
               <strong>{{ $errors->first('email')}}</strong>
             </span>
          @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : ''}}">
          <label for="password">password</label>
          <input type="password" name="password" placeholder="password" class="form-control">
          @if ($errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password')}}</strong>
            </span>
          @endif
        </div>

        <div class="form-group">
          <input type="checkbox" name="remember" value="">
          <label for="remember">Remember Me</label>
        </div>

        <input type="submit" class="btn btn-default"  value="Login"><br><br>
    <p class="click text-center">Do not have an account ?. <a href="{{ url('auth/register') }}"> Signup Here</a></p> 

      </form>

    </div>

  </div>

</div>

@endsection
