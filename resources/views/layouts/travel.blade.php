<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--<meta name="keywords"  
         content="KEYWORD1 KEYWORD2 KEYPHRASE1 etc.  
         about 30 to 40 unique words">  
    <meta name="description"  
         content="An accurate, keyword-rich description  
         about 150 characters"> -->
    
    <meta name="description" content="visitboard,the places of visitors and a destination for tourist" />
    <meta name="author" content="visitboard.com" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>visitboard - @yield('title')</title>
    <style type="text/css">
    .pace {
    -webkit-pointer-events: none;
    pointer-events: none;

    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    }

    .pace-inactive {
    display: none;
    }

    .pace .pace-progress {
    background: #44bb59;
    position: fixed;
    z-index: 2000;
    top: 0;
    right: 100%;
    width: 100%;
    height: 2px;
     }
    .pull-right{
        font-size: 12px;
    } 
    
    label{
        font-size: 12px;
        font-family: sans-serif;
    }
    @font-face {
    font-family: 'selimaregular';
    src: url('font/selima_-webfont.woff2') format('woff2'),
         url('font/selima_-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

    }

    
    </style>

    <script src="{{ asset('/js/pace.min.js') }}"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
   <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- Styles -->

    @yield ('head')
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <nav class="fh5co-nav" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <svg viewbox="0 0 100 20" style="font-weight:bold;max-width:200px;">
                        <defs>
                        <linearGradient id="gradient" x1="0" x2="0" y1="0" y2="1">
                        <stop offset="5%" stop-color="#000000"/>
                        <stop offset="95%" stop-color="#000000"/>
                        </linearGradient>
                        <pattern id="wave" x="0" y="0" width="120" height="20" patternUnits="userSpaceOnUse">
                        <path id="wavePath" d="M-40 9 Q-30 7 -20 9 T0 9 T20 9 T40 9 T60 9 T80 9 T100 9 T120 9 V20 H-40z" mask="url(#mask)" fill="#5a543d"> 
                        <animateTransform
                            attributeName="transform"
                            begin="0s"
                            dur="1.5s"
                            type="translate"
                            from="0,0"
                            to="40,0"
                            repeatCount="indefinite" />
                        </path>
                        </pattern>
                        </defs>
                        <text text-anchor="middle" x="50" y="15" font-size="15" fill="url(#wave)"  fill-opacity="0.7">VISIT BOARD</text>
                        <text text-anchor="middle" x="50" y="15" font-size="15" fill="#85c5e3" fill-opacity="0.3">VISIT BOARD</text>
                    </svg>
                </div>
             @if (Auth::guest())
                
                <div class="col-xs-12 text-center menu-1">
                    <ul>
                        <li><a href="{{ url('/') }}">HOME</a></li>
                        <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Extra <span class="caret"></span>
                        </a>
                            <!--<a href="{{ url('/extra-shot') }}">Extra</a>-->
                            <ul class="dropdown-menu">
                            <li><br></li>

                            <li><a href="{{ url('/india-rail') }}"><span class="inside">Major Railway Routes<span></a></li>
                            <li><a href="{{ url('/india-air') }}"><span class="inside">Domestic Airlines Routes</span></a></li>
                            <li><a href="{{ url('/extra-shot') }}"><span class="inside">Extra observation</span></a></li>
                            <li>
                            <li><a href="{{ url('/distance') }}"><span class="inside">Distance Search</span></a></li><br></li>
                            
                            </ul>
                        </li>
                      
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        
                    </ul>
                </div>

                 @else
                  <div class="col-xs-12 text-center menu-1">
                    <ul>

                        <li><a href="{{ url('/home') }}">HOME</a></li>

                        <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Extra <span class="caret"></span>
                        </a>
                            <!--<a href="{{ url('/extra-shot') }}">Extra</a>-->
                            <ul class="dropdown-menu box-mar">
                            <li><br></li>
                             <li><a href="{{ url('/profile') }}"><span class="inside">Profile<span></a></li>
                            <li><a href="{{ url('/india-rail') }}"><span class="inside">Major Railway Routes<span></a></li>
                            <li><a href="{{ url('/india-air') }}"><span class="inside">Domestic Airlines Routes</span></a></li>
                            <li><a href="{{ url('/extra-shot') }}"><span class="inside">Extra observation</span></a></li>
                              <li><a href="{{ url('/distance') }}"><span class="inside">Distance Search</span></a></li>
                            <li><a href="{{ url('/india') }}"><span class="inside">
                                India view
                            </span></a></li>
                            <li><br></li>

                            </ul>
                        </li>

                        <li><a id="submit-post"  class="btn btn-default" href="{{ url('/create-post') }}">CREATE POST</a></li>
                        <li><a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">SIGN OUT</a></li>
                        
                    </ul>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    </form>

                     @endif  
                </div>

            </div>
            
        </div>
    </nav>


@yield('content')
    <!-- modal for submitting updates -->


<div id="share" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-padding-64" style="max-width:600px">

        <div class="container w3-border-top w3-padding-32 w3-light-grey">
      
        <a href="https://www.facebook.com/sharer/sharer.php"><button onclick="document.getElementById('share').style.display='none'" type="button" class="btn btn-primary"><i class="fa fa-facebook" aria-hidden="true"></i> facebook</button></a>
        
        <a href="https://twitter.com/share"  data-show-count="false"><button onclick="document.getElementById('share').style.display='none'" type="button" class="btn btn-info"><i class="fa fa-twitter" aria-hidden="true"></i> twitter </button></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

  
        <!--<a href="mailto:?Subject=Simple Share Buttons&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://simplesharebuttons.com">
        <button onclick="document.getElementById('share').style.display='none'" type="button" class="w3-button w3-blue-grey"><i class="fa fa-envelope" aria-hidden="true"></i> Email</button></a>-->

        <button onclick="document.getElementById('share').style.display='none'"  class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i> cancel</button>
        
        <span class="w3-right w3-padding w3-hide-small">Share with </span>
      </div>

    </div>
</div>    

<input type="hidden" name="base_url" id="base_url" value="{{ URL::to('/') }}">

<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">

$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
    }
});

var base_url = $('#base_url').val();

$(document).ajaxStart(function() { Pace.restart(); });

$(document).ready(function() {
    //more or less scripts

    var showChar = 100;  
    var ellipsestext = "...";
    var moretext = "Read";
    var lesstext = "Less";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink card-read w3-text-teal">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});


//text 320//

(function($) {

  $.fn.charCounter = function (max, settings) {
    max = max || 100;
    settings = $.extend({
      container: "<span></span>",
      classname: "charcounter",
      format: "%1 characters remaining",
      pulse: true,
      delay: 0
    }, settings);
    var p, timeout;
    
    function count(el, container) {
      el = $(el);
      if (el.val().length > max) {
          el.val(el.val().substring(0, max));
          if (settings.pulse && !p) {
            pulse(container, true);
          };
      };
      if (settings.delay > 0) {
        if (timeout) {
          window.clearTimeout(timeout);
        }
        timeout = window.setTimeout(function () {
          container.html(settings.format.replace(/%1/, (max - el.val().length)));
        }, settings.delay);
      } else {
        container.html(settings.format.replace(/%1/, (max - el.val().length)));
      }
    };
    
    function pulse(el, again) {
      if (p) {
        window.clearTimeout(p);
        p = null;
      };
      el.animate({ opacity: 0.1 }, 100, function () {
        $(this).animate({ opacity: 1.0 }, 100);
      });
      if (again) {
        p = window.setTimeout(function () { pulse(el) }, 200);
      };
    };
    
    return this.each(function () {
      var container;
      if (!settings.container.match(/^<.+>$/)) {
        // use existing element to hold counter message
        container = $(settings.container);
      } else {
        // append element to hold counter message (clean up old element first)
        $(this).next("." + settings.classname).remove();
        container = $(settings.container)
                .insertAfter(this)
                .addClass(settings.classname);
      }
      $(this)
        .unbind(".charCounter")
        .bind("keydown.charCounter", function () { count(this, container); })
        .bind("keypress.charCounter", function () { count(this, container); })
        .bind("keyup.charCounter", function () { count(this, container); })
        .bind("focus.charCounter", function () { count(this, container); })
        .bind("mouseover.charCounter", function () { count(this, container); })
        .bind("mouseout.charCounter", function () { count(this, container); })
        .bind("paste.charCounter", function () { 
          var me = this;
          setTimeout(function () { count(me, container); }, 10);
        });
      if (this.addEventListener) {
        this.addEventListener('input', function () { count(this, container); }, false);
      };
      count(this, container);
    });
  };

})(jQuery);

$(function() {
    $(".counted").charCounter(320,{container: "#counter"});
    $(".counted1").charCounter(30,{container: "#counter1"});
    $(".counted2").charCounter(2000,{container: "#counter2"});
    $(".counted3").charCounter(240,{container: "#counter3"});
    $(".counted4").charCounter(40,{container: "#counter4"});
    $(".counted5").charCounter(120,{container: "#counter5"});
    $(".counted6").charCounter(600,{container: "#counter6"});
    $(".counted7").charCounter(520,{container: "#counter7"});
    $(".counted8").charCounter(1000,{container: "#counter8"});
    $(".editcounted1").charCounter(30,{container: "#editcounter1"});
    $(".editcounted2").charCounter(2000,{container: "#editcounter2"});
    $(".editcounted3").charCounter(240,{container: "#editcounter3"});
    $(".editcounted4").charCounter(40,{container: "#editcounter4"});
    $(".editcounted5").charCounter(120,{container: "#editcounter5"});
    $(".editcounted6").charCounter(600,{container: "#editcounter6"});
    $(".editcounted7").charCounter(520,{container: "#editcounter7"});
    $(".editcounted8").charCounter(1000,{container: "#editcounter8"});
});



$description = $(".description");

  $('.enabled').hover(function() {
    
    $(this).attr("class", "enabled heyo");
    $description.addClass('active');
    $description.html($(this).attr('id'));
  }, function() {
    $description.removeClass('active');
  });

$(document).on('mousemove', function(e){
  
  $description.css({
    left:  e.pageX,
    top:   e.pageY - 70
  });
  
});

</script>
  <script src="{{ asset('/js/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('/js/visitbox.min.js') }}"></script>
  <script src="{{ asset('/js/jquery.scrollTo.js') }}"></script>
  <script src="{{ asset('/js/custom.js') }}"></script>
  <script src="{{ asset('/js/top10.js') }}"></script>
@yield('bottom')
</body>
</html>
