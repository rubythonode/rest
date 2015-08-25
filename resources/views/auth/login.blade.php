@extends('layouts.master')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Login</div>
        <div class="panel-body">

          <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
              <label class="col-md-4 control-label">E-Mail Address</label>
              <div class="col-md-6">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                {!! $errors->first('email', '<span class="form-error">:message</span>') !!}
              </div>
            </div>

            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
              <label class="col-md-4 control-label">Password</label>
              <div class="col-md-6">
                <input type="password" class="form-control" name="password">
                {!! $errors->first('password', '<span class="form-error">:message</span>') !!}
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="remember"> Remember Me
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="{{ route('social.login', 'github') }}" class="btn btn-primary">Login with Github</a>

                <a class="btn btn-link" href="{{ route('reminder.create') }}">Forgot Your Password?</a>
                <a class="btn btn-link" href="{{ route('user.create') }}">Don't have an account?</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection