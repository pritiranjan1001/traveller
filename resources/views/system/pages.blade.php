
@extends('layouts.travel')
 
@section('head') 
<style>
            body,html{
               background: #F2F3EB;
            }
            #magazine{
                width:100%;
                min-height:400px;
                
            }
            #magazine .turn-page{
                background-color:#ccc;
                background-size:100% 100%;
                height:100%;
            }
        </style>    
@endsection

@section('content')
<!-- Good offers -->

 <div class="container w3-padding-32">
 <div class="col-lg-6 col-lg-offset-3">
    <div id="magazine" class="margin-top-box-1">
    <div style="background-image:url(../pdf_files/pages/S-1.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/S-1a.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/S-1b.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/S-1c.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/S-2.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/S-3.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/S-4.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/S-5.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/S-5a.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/S-5b.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/S-6.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/S-7.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/S-8.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/S-9.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/S-10.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/S-10a.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/S-11.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/S-12.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/S-13.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/S-14.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/S-15.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/S-16.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/S-17.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/S-18.jpg);"></div>
    <div style="background-image:url(../pdf_files/pages/sikkim-w-1.jpg);"></div>
    </div>

    <p class="w3-content w3-text-white">hover on the coner of the page to turn to next page <a href="{{ url('/contents') }}" class="w3-hover-text-green w3-right"><< Back</a></p>
</div>
</div>

</div>

@endsection

@section('bottom')

<script type="text/javascript" src="{{ asset('js/turn.js') }}"></script>
<script type="text/javascript">

$(window).ready(function() {
        $('#magazine').turn({
                            display: 'double',
                            acceleration: true,
                            gradients: !$.isTouch,
                            elevation:500,
                            when: {
                                turned: function(e, page) {
                                    /*console.log('Current view: ', $(this).turn('view'));*/
                                }
                            }
                        });
    });
    
    
    $(window).bind('keydown', function(e){
        
        if (e.keyCode==37)
            $('#magazine').turn('previous');
        else if (e.keyCode==39)
            $('#magazine').turn('next');
            
    });

    </script>

@endsection

