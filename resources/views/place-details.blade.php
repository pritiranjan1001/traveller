@extends('../layouts.travel')
 
@section('head')

<style type="text/css">
	.details_pl{
		line-height: 1.5em;
		font-size: 1em;
	}
	.red{
		color: #6b6b47;
	}
	#focal{
		border: 1px dashed #eee;
		display:none; 
	}
	b{
		color: #ff6600;
		font-size: 18px;
	}

	.mobileshow { 
	display:none; 
	}
	.desktopshow{
	display:none; 
	}
	@media screen and (max-width: 760px) {
	.mobileshow { 
	display:block; }

	.red{
		font-size: 12px;
	}
	}

	@media only screen and (min-width:1000px){
    .desktopshow{
	display:block;
	}
	
	#focal{
		border: 1px dashed #eee;
		display:block; 
	}
   }
</style>

@endsection

@section('content')
<!-- Good offers -->


  @foreach ($welcome as $post) 
 
    <div class="container margin-top-box" style="max-width:1000px;" >
    	<div class="top-box">
  				
    			<section id="focal" style="cursor: auto;">
      				<div class="parent">
        			<div class="panzoom">
        			<div class="col-lg-7 top-box text-center col-lg-offset-2">
          			<img src="{{ asset('/images/maps'). '/'.$post->map_url}}" class="img-responsive desktopshow">
        			</div>
        			</div>
      				</div>
    			</section>

    			<section class="col-lg-7 top-box text-center col-lg-offset-2">
          			<img src="{{ asset('/images/maps'). '/'.$post->map_url}}" class="img-responsive mobileshow">
        		</section>

			<div class="col-lg-8 col-lg-offset-2">
			<h6 class="red">we are providing the best spots,from where you can find most of the visiting places.
			</h6>
			</div>

			<div class="col-lg-8">
				<h4 class="">PLACES TO VISIT</h4>
				<h3>{{ $post->state_place }} Division</h3>
				<h5 class="details_pl">{!! addslashes($post->pl_details) !!}</h5>
			</div>

			<div class="col-lg-4">
				<h4 class="">HOW TO REACH ?</h4>
				<h5 class="details_pl">{!!addslashes($post->h_reach) !!}</h5>
			</div>
			<div class="col-lg-4">
				<h4 class="">BEST TIME TO VISIT</h4>
				<h5 class="details_pl">{!! addslashes($post->best_visit) !!}</h5>
			</div>
			
		</div>
	</div>



 	@endforeach 


@endsection

@section('bottom')



<script src="{{ asset('js/jquery.panzoom.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.mousewheel.js') }}" type="text/javascript"></script>
      <script>
        (function() {
          var $section = $('#focal');
          var $panzoom = $section.find('.panzoom').panzoom();
          $panzoom.parent().on('mousewheel.focal', function( e ) {
            e.preventDefault();
            var delta = e.delta || e.originalEvent.wheelDelta;
            var zoomOut = delta ? delta < 0 : e.originalEvent.deltaY > 0;
            $panzoom.panzoom('zoom', zoomOut, {
              animate: false,
              focal: e
            });
          });
        })();
      </script>
@endsection
