@extends('layouts.travel')
 
@section('head') 
<link rel="stylesheet" type="text/css" href="{{asset('css/contents.css')}}">        
@endsection

@section('content')

	<div class="container w3-padding-32" style="max-width:800px;">
				<div class="col-lg-6 top-box text-center">
  		<div class="example-2 card">
			<div class="wrapper background-1 margin-top-box">
	  			<div class="header">
					<div class="date">
		  				<span class="day">12</span>
		  				<span class="month">Aug</span>
		  				<span class="year">2016</span>
					</div>
					<ul class="menu-content">
		  				<li>
							<a href="#" class="fa fa-bookmark-o"></a>
		  				</li>
		  				<li><a href="#" class="fa fa-heart-o"><span>18</span></a></li>
		  				<li><a href="#" class="fa fa-comment-o"><span>3</span></a></li>
					</ul>
	  			</div>
	  			<div class="data">
					<div class="content">
		  				<span class="author"><!--Jane Doe--></span>
		  				<a href="{{ url('/pages') }}"><h1 class="title"><!--Stranger Things: The sound of the Upside Down--></h1>
		  				<p><!--The antsy bingers of Netflix will eagerly anticipate the digital release of the Survive soundtrack, out today.</p>--></a>
		  				<a href="{{ url('/pages') }}" class="button">Read more</a>
					</div>
	  			</div>
	  			
			</div>
 		</div>
 		</div>

 		<div class="col-lg-6 top-box text-center">
 		<div class="example-2 card ">
			<div class="wrapper background-2 margin-top-box">
	  			<div class="header">
					<div class="date">
		  				<span class="day">12</span>
		  				<span class="month">Aug</span>
		  				<span class="year">2016</span>
					</div>
					<ul class="menu-content">
		  				<li>
							<a href="#" class="fa fa-bookmark-o"></a>
		  				</li>
		  				<li><a href="#" class="fa fa-heart-o"><span>18</span></a></li>
		  				<li><a href="#" class="fa fa-comment-o"><span>3</span></a></li>
					</ul>
	  			</div>
	  			<div class="data">
					<div class="content">
		  				<p>stay with us .....</p>
		  				<h1 class="title">We are in the process...</h1>
		  				<a href="#" class="button">Read more</a>
					</div>
	  			</div>
	  			
			</div>
 		</div>
 		</div>

	</div>


@endsection

@section('bottom')

@endsection
