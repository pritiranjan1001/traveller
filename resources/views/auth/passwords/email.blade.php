@extends('layouts.travel')

<!-- Main Content -->
@section('content')


  <!-- Contact/Area Container -->
    <div class="w3-container w3-display-middle" id="where">
        <div class="w3-content" style="max-width:700px">

            <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide ">Reset Password</span></h5>
            <p class="w3-center">Find us & Be a part of XXXXXX.</p>
     

      
                    @if (session('status'))
                        <div class="w3-center w3-lime">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            

                   
                                <input id="email" type="email" class="w3-input w3-padding-16 w3-border" placeholder="Email"  name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                      
                        </div>

                                <br>
                                <button type="submit" class="w3-button w3-block w3-black">
                                    Send Password Reset Link
                                </button>
                           
                    </form>

           </div>
        </div>



@endsection
