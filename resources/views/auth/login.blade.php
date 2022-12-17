@extends('../layouts.travel')
 
@section('head')
<style type="text/css">
 html,body,.container-table {
    height: 100%;
}
</style>
@endsection

@section('content')

<div class="container w3-padding-64 container-table">
    <div class="row vertical-center-row">

        <div class="col-lg-6 col-lg-offset-3 top-box text-center ">

            <div class="content">
          
            <p class="text-center">Find us & Be a part of our world</p>
            <p class="text-center"><a href="{{ url('/auth/facebook') }}"><button class="w3-wide btn btn-primary">LOGIN with Facebook</button></a><br/></p>
            <p class="text-center">OR</p>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        @if ($message = Session::get('success'))
                        <div class="text-center w3-lime">
                        <p>{{ $message }}</p>
                        </div>
                        @endif

                        @if ($message = Session::get('warning'))
                        <div class="text-center w3-pink">
                        <p>{{ $message }}</p>
                        </div>
                        @endif 
 
            <p class="{{ $errors->has('email') ? ' has-error' : '' }}"></p>                  
                <input id="email" type="email" class="w3-input w3-padding-16 w3-border" value="{{ old('email') }}" required autofocus placeholder="Email" name="email">
            </p>
            @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                    </span>
            @endif
            <p> 
                <input id="password" class="w3-input w3-padding-16 w3-border" type="Password" placeholder="Password" name="password" required>
            </p>
            @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                    </span>
            @endif
                <p class="text-center"><button class="btn btn-lg btn-info btn-block" type="submit">LOGIN</button></p>
            </form>

            </div>

        </div>

         <div class="col-lg-8 col-lg-offset-2 top-box text-center">
            <div class="text-center">
                <a class="btn btn-link w3-hover-text-green" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
            </div>
        </div>


        <footer class="text-center">
            <div class="col-lg-8 col-lg-offset-2  text-center">
                <p>Don't have an account? <a href="{{ route('register') }}" class="w3-hover-text-green"> Join </a></p>
            </div> 
        </footer>

    </div>
</div>

@endsection

@section('bottom')

@endsection

