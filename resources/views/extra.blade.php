@extends('layouts.travel')
 
@section('head')

	<link rel="stylesheet" type="text/css" href="{{asset('css/extra-shot-view.css')}}">   
	 <style type="text/css">
	 	body,html{
	 		background-color: #fff;
	 	}
	 	.margin-top-bar{
	 		margin-top: 5%;
	 	}
	 	.padding-top-bar{
	 		padding: 4%;
	 	}
	 	.margin-top-box{
	 		margin-top: 10%;
	 		}
	 </style>  
@endsection

@section('content')
<!-- Good offers -->


    @foreach ($welcome as $post) 
    <div class="back-wall margin-top-box">
    	<div class="container">
    	<div class="col-lg-10 col-lg-offset-1">

			<div class="col-lg-6">
				<div class="text-box margin-top-box-1">
	  				
	  				<span class="card-number card-circle subtle">01</span>
	  				<span class="card-author subtle"></span>
	  				<h2 class="card-title">{!! nl2br(e($post->hd_name)) !!}</h2>
	  				<span class="card-description subtle" >{!! nl2br(e($post->ab_details)) !!}</span>
	  				<span class="card-description subtle more" >{!! nl2br(e($post->r_cipies)) !!}</span>

	  			</div>	
	  			<div class="image-box">
	  			<img src="{{ asset('upload//travel-image-2'). '/'.$post->img_url_two }}" alt=""  class="img-responsive" /><h6 class="text-center">{!! nl2br(e($post->img_des_2)) !!}</h6><br>
	  			</div>
			</div>

			<div class="col-lg-6">
				
				<img src="{{ asset('upload//travel-image-1'). '/'.$post->img_url_one }}" alt="" class="img-responsive " />
				<h6 class="text-center">{!! nl2br(e($post->img_des_1)) !!}</h6>
				<img src="{{ asset('upload//travel-image-3'). '/'.$post->img_url_tee }}" alt=""  class="img-responsive" />
				<div class="text-box margin-top-bar">
				<span class="card-description subtle more" >{!! nl2br(e($post->loc_watch)) !!}</span>
	  			</div>

			</div>

  	
  
    		<div class="col-lg-12">
    			<!--<h2 class="card-title  text-right">Why you choose?</h2>-->
    			<p class="text-right card-description"></p>
    		</div>

    		<div class="col-lg-6">
    		<img src="{{ asset('upload//travel-image-4'). '/'.$post->img_url_for }}" alt=""  class="img-responsive" />	<br>
    		</div>
    		<div class="col-lg-6">
    		<img src="{{ asset('upload//travel-image-5'). '/'.$post->img_url_fve }}" alt=""  class="img-responsive" />
    		</div>
    	</div>
    	</div>
    </div>
	@endforeach 
@endsection

@section('bottom')

	

@endsection
