@extends('layouts.travel')

@section('content')



<!-- Contact/Area Container -->
    <div class="w3-container w3-display-middle" id="where">
        <div class="w3-content" style="max-width:700px">
            <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">Reset Password</span></h5>
            <p class="w3-center ">Thank you for returning back.</p>
      

            <div class="panel-body">
                    @if (session('status'))
                        <div class="w3-center w3-lime">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                

                            <p>
                                <input id="email" type="email" class="w3-input w3-padding-16 w3-border" name="email" value="{{ $email or old('email') }}" placeholder="Email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </p>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                         

                            <p>
                                <input id="password" type="password" class="w3-input w3-padding-16 w3-border" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="w3-center w3-pink">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </p>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <p>
                                <input id="password-confirm" type="password" class="w3-input w3-padding-16 w3-border" placeholder="Confirm Password" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="w3-center w3-pink">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </p>
                        </div>

                      <br>
                                <button type="submit" class="w3-button w3-block w3-black">
                                    Reset Password
                                </button>
                          
                    </form>


                    </div>
                    </div>
                    </div>


@endsection
