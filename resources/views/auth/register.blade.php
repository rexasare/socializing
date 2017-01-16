@extends('main')

@section('title', ' | Register')

@section('main-title', 'registration-form')

@section('content')

  <h2 class="tittle">Register</h3>
    <div class="col-md-6 col-md-offset-3">
  <div class="panel panel-default">
    <div class="panel-heading"> Register</div>
    <div class="panel-body">

      <form class="form-vertical" action="" method="POST">
         {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
              <label for="Name">Name</label>
              <input type="text" name="name" placeholder="Full Name" class="form-control" value="{{ old('name') }}">
              @if ($errors->has('name'))
                <span class="help-block">
                  <strong>{{ $errors->first('name')}}</strong>
                </span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('username') ? ' has-error' : ''}}">
              <label for="username">Username</label>
              <input type="text" name="username" placeholder="Username" class="form-control" value="{{ old('username') }}">
              @if ($errors->has('username'))
                <span class="help-block">
                  <strong>{{ $errors->first('username')}}</strong>
                </span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
              <label for="email">Email</label>
              <input type="email" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}">
              @if ($errors->has('email'))
                <span class="help-block">
                   <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : ''}}">
              <label for="password">Password</label>
              <input type="password" name="password" placeholder="password" class="form-control">
              @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('passsword_confirmation') ? ' has-error' : ''}}">
              <label for="first name">Re-enter Password</label>
              <input type="password" name="password_confirmation" placeholder="Re-enter Password" class="form-control">
              @if ($errors->has('passsword_confirmation'))
                  <span class="help-block">
                    <strong>{{ $errors->first('passsword_confirmation') }}</strong>
                  </span>
              @endif
            </div>

            <input type="submit" class="btn btn-default"  value="Register"><br><br>
             <p class="click text-center">All ready have an account ?. <a href="{{ url('auth/login') }}"> Login Here</a></p>

          </form>

    </div>

  </div>

</div>

@endsection
