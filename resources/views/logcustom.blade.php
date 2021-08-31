@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-offset-4">
                    <form method="POST" action="login">
                        @csrf
                        <div class="form-group">
                            <label for="email" >{{ __('E-Mail Address') }}</label>
                                <input  type="text"  name="email" class="form-control">
                                </div>
                                <div class="form-group">
                            <label for="password" >{{ __('Password') }}</label>
                                <input  type="password"  name="password" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                    </form>
        </div>
    </div>
</div>
@endsection
