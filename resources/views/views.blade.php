<!DOCTYPE html>
<html lang="{{ config('app.locale') }}"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
        <link rel="stylesheet" type="text/css" href="{{asset('css/extra-shot-view.css')}}">    
        <!-- Styles -->
        <style>
        body, html {
        height: 100%;
        font-family: "Inconsolata", sans-serif;

        }
        .box{
        word-wrap: break-word;
        }
        .caret{
            color: red;
        }
        a:link{
            text-decoration: none;
        }
        .bgimg {
        background-position: center;
        background-size: cover;
        min-height: 80%;
        }
        .menu {
        display: none;
        }
        .w3-button:hover{
        background-color: #fff;
        }
        .bg-color{
            background-color: rgba(0,0,0,0.2);
        }
        @media only screen and (min-width:1000px){
        .fontq{
            font-size: 50px;
        }
        }
        @media only screen and (max-width:760px){
        .fontq{
            padding-top: 5%;
            font-size: 30px;
        }
        .marg{
            margin-top: 80px!important;
        }
        }

        /* different techniques for iPad screening */
        @media only screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait) {
        /* For portrait layouts only */
        .fontq{
            padding-top: 5%;
            font-size: 50px;
        }
        }

        @media only screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape) {
        /* For landscape layouts only */
        }

        </style>
    </head>

    <body>

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>   
    <!-- Links (sit on top) -->
    @foreach ($welcome as $post)  
    <div class="w3-top">
        <div class="w3-row w3-padding w3-white">
            <div class="w3-col s2">
                <a href="/home" class="w3-button w3-hover-white w3-block">HOME</a>
            </div>
            <div class="w3-col s2">
                <a href="#" class="w3-button w3-block w3-white">ARTICLE <span class="caret"></span></a>
            </div>
            <div class="w3-col s2">
                <a href="#about" class="w3-button w3-block w3-white">ABOUT <span class="caret"></span></a>
            </div>
            <div class="w3-col s2">
                <a href="#menu" class="w3-button w3-block w3-white">MENU <span class="caret"></span></a>
            </div>
            <div class="w3-col s2">
                <a href="#where" class="w3-button w3-block w3-white">WHERE <span class="caret"></span></a>
            </div>

            <div class="w3-col s2">
                <a onclick="myFunction()" class="w3-button w3-hover-white w3-block w3-white"><img src="{{ asset('/').$post->avatar  }}" class="w3-circle" alt="image" width="30" height="30">
                </a>
                <div id="Demo" class="w3-dropdown-content w3-bar-block">
                    <a href="{{ url('/profile') }}" class="w3-bar-item w3-button">Profile</a>
                    <a href="{{ route('logout') }}" class="w3-bar-item w3-button" onclick="event.preventDefault();document.getElementById('logout-form').submit();"">Sign out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    </form>                                           
                </div>
            </div>
        </div>
    </div>

    <!-- Header with image -->
 
   
        <div class="container">

        <div class="blog-container w3-content marg" style="max-width:700px">
  
                    <div class="blog-header">
                        <div class="blog-cover">
                            <div class="blog-author">
                                   <img src="{{ asset('upload/post-1/'. $post->im_url) }}" style="width:100%;" class="w3-margin-top">
                            </div>
                        </div>
                    </div>

                    <div class="blog-body">
                        <div class="blog-title">
                            <h1><a href="#">{{$post->hd_name}}</a></h1>
                        </div>
                        <div class="blog-summary">
                            <p></p>
                        </div>
                    </div>
  
                    <div class="blog-footer">
                        <ul>
                            <li class="published-date">{{ $post->updated_at }}</li>
                            <li class="published-date">By {{ $post->name}}</li>
                        </ul>
                    </div>

                </div>
        <!-- Add a background color and large text to the whole page -->
        <div class="w3-grayscale w3-large">

        <!-- About Container -->
        <div class="w3-container" id="about">
            <div class="w3-content" style="max-width:700px">
                <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide w3-white">ABOUT</span></h5>
                <p class="box">{{ $post->ab_details }}</p>
                <div class="w3-panel w3-leftbar w3-light-grey">
                    <p><i>{{ $post->q_otes }}</i></p>
                </div>
                <img src="{{ asset('upload/post-2/'. $post->bt_url) }}" style="width:100%;max-width:1000px" class="w3-margin-top">
                <p><strong>Opening hours:</strong> {{ $post->v_hours }}</p>
                <p><strong>Address:</strong> {{ $post->a_ddress }}</p>
            </div>
        </div>

        <!-- Menu Container -->
        <div class="w3-container" id="menu">
            <div class="w3-content" style="max-width:700px">
                <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide w3-white">RECIPES AND CUISINE</span></h5>
                <div class="w3-row w3-center w3-card-2 w3-padding">
                    <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
                        <div class="w3-col s6 tablink">Food & Drink</div>
                    </a>
                    <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
                        <div class="w3-col s6 tablink">Best points</div>
                    </a>
                </div>

                <div id="Eat" class="w3-container menu w3-padding-48 w3-white w3-card-2">
                    <p class="w3-text-grey box">{{ $post->r_cipies }}</p><br>
                </div>

                <div id="Drinks" class="w3-container menu w3-padding-48 w3-white w3-card-2">
                    <p class="w3-text-grey box">{{ $post->best_points }}</p><br>
                </div>  
                <img src="{{ asset('upload/post-3/'. $post->btimg_url) }}" style="width:100%;max-width:1000px;margin-top:32px;">
            </div>
        </div>

        <!-- Contact/Area Container -->
        <div class="w3-container" id="where" style="padding-bottom:60px;">
            <div class="w3-content" style="max-width:700px">
                <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide w3-white">WHERE TO FIND </span></h5>
                <!--<p>Find us at some address at some place.</p>-->    
                <p>{{$post->l_address}}</p>
            </div>
        </div>

    <!-- End page content -->
        </div>
    @endforeach 
    <!-- Footer -->
    <footer class="w3-center w3-light-grey w3-padding-48 w3-large">
        <p>copy right @ {{ $post->name}}</p>
    </footer>
 
    </div>

 
    <!-- Add Google Maps -->
    <script src="{{ asset('js/jquery-1.11.0.min.js') }}" type="text/javascript"></script>

    <script>
   
    // Tabbed Menu
    function openMenu(evt, menuName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("menu");
    for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
    }
    document.getElementById(menuName).style.display = "block";
    evt.currentTarget.firstElementChild.className += " w3-dark-grey";
    }
    document.getElementById("myLink").click();


    function myFunction() {
    var x = document.getElementById("Demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
    }

    </script>

</body>
</html>
