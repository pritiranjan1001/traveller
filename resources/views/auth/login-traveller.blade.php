<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<title>{{ config('app.name', 'Laravel') }}</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
 <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
<style>
body, html {
    height: 100%;
    font-family: "Inconsolata", sans-serif;
}
</style>
<body>

 
<!-- Contact/Area Container -->
<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">LOGIN</span></h5>
    <p class="w3-center">Find us & Be a part of XXXXXX.</p>
   
  
    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
      <p class="{{ $errors->has('email') ? ' has-error' : '' }}"></p>                  
      <p><input id="email" class="w3-input w3-padding-16 w3-border" value="{{ old('email') }}" required autofocus placeholder="Email"></p>
      @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
      @endif
      <p><input id="password" class="w3-input w3-padding-16 w3-border" type="Password" placeholder="Password" required name="Password"></p>
       @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
      @endif
      <p class="w3-center"><button class="w3-button w3-block w3-black" type="submit">LOGIN</button></p>
    </form>
  </div>
</div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-padding-42 w3-large">
  <p>Don't have an account? <a href="" target="_blank" class="w3-hover-text-green"> Join </a></p>
</footer>


</body>
</html>
