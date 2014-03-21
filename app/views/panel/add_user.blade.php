@extends('panel/layout')
  @section('content')



    <div class="container">

     @if(Session::has('sukses'))
       <div class="alert alert-success">{{ Session::get('sukses') }}</div>
    @endif
    
      {{Form::open(array('action' => 'UserController@create','class'=>'form-signin')) }}
        <h2 class="form-signin-heading">ADD USER |<a style="color:#FFF" href="{{url('login')}}"> LOGIN</a></h2>
        <div class="login-wrap">
            <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
            <input type="password" name="password" class="form-control" placeholder="Password">
            <input type="text" name="email" class="form-control" placeholder="Email">
            <button class="btn btn-lg btn-login btn-block" type="submit">Save</button>
        </div>
      {{Form::close() }}
    </div>

@stop