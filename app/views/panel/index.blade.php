@extends('panel/layout')
  @section('content')
    <div class="container">
    @if(Session::has('eror'))
       <div class="alert alert-danger">{{ Session::get('eror') }}</div>
    @endif
    @if(Session::has('logout'))
       <div class="alert alert-success">{{ Session::get('logout') }}</div>
    @endif
      {{Form::open(array('action' => 'UserController@auth','class'=>'form-signin')) }}
        <h2 class="form-signin-heading">LOGIN | <a style="color:#FFF" href="{{url('user/add')}}"> ADD USER</a></h2>
        <div class="login-wrap">
            <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
            <input type="password" name="password" class="form-control" placeholder="Password">
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
        </div>
      {{Form::close() }}
    </div>

@stop