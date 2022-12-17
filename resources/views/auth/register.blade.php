@extends('../layouts.travel')
 
@section('head')

@endsection
<style type="text/css">
 html,body,.container-table {
    height: 100%;
}
</style>
@section('content')

<!-- Contact/Area Container -->
<div class="container w3-padding-16 container-table">
    <div class="row vertical-center-row">
    <div class="content top-box w3-padding-64">
        <div class="col-lg-6 col-lg-offset-3 text-center">
            

                <p class="text-center"><a href="{{ url('/auth/facebook') }}"><button class="btn btn-lg btn-primary btn-block">Join us with Facebook</button></a></p>
                <p class="text-center">OR</p>
  
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <p class="form-group{{ $errors->has('name') ? ' has-error' : '' }}"></p>
                        <p><input class="w3-input w3-border" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus type="text" placeholder="Name" required></p>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif

                        <p class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"></p>
                        <p><input class="w3-input w3-padding-16 w3-border" id="email" type="email" name="email" value="{{ old('email') }}" required type="email" placeholder="Email"></p>
                        
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                        <p class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"></p>
                        <p><input class="w3-input w3-padding-16 w3-border" id="password" type="password" name="password" required placeholder="Password" required></p>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                        <p><input class="w3-input w3-padding-16 w3-border" id="password-confirm" type="password" name="password_confirmation" required  placeholder="Confirm Password"></p>
                        <p class="text-center"><button class="btn btn-lg btn-info btn-block" type="submit">JOIN</button></p>
                        <p class="text-center">By joining, you agree to the Terms and <a href="{{ url('/privacy') }}" class="w3-hover-text-green">Privacy Policy</a>.</p>
                    </form>
            </div>
        </div>

        <!-- Footer -->
        <footer class="text-center">
            <div class="col-lg-8 col-lg-offset-2  text-center">
            <p>Already joined? <a href="{{ route('login') }}" class="w3-hover-text-green">Login</a></p>
            </div>
        </footer>

    </div>
</div>



@endsection

@section('bottom')

@endsection

