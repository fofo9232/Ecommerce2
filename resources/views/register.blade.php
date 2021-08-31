@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-offset-4">
                    <form method="POST" action="register">
                        @csrf
                        <div class="form-group">
                        <label for="email" >User Name</label>
                        <input  type="text"  name="name" class="form-control" placeholder="enter your name">
                         </div>
                        <div class="form-group">
                        <label for="email" >{{ __('E-Mail Address') }}</label>
                        <input  type="text"  name="email" class="form-control" placeholder="enter your email">
                         </div>
                         <div class="form-group">
                        <label for="password" >{{ __('Password') }}</label>
                         <input  type="password"  name="password" class="form-control" placeholder="enter password">
                         </div>
                    <button type="submit" class="btn btn-primary">{{ __('register') }}</button>
                    </form>
        </div>
    </div>
</div>
@endsection
