@extends('layouts.travel')
 
@section('head') 
<link rel="stylesheet" type="text/css" href="{{asset('css/extra-shot-view.css')}}">  
<style type="text/css">
	.video-box{
		height: 350px;
		width: 100%;
		padding: 2%;
	}
</style>  
@endsection
 
@section('content')

	<div class="container margin-top-box w3-padding-32" style="max-width:800px;">
	<!-- Explore Nature -->
	<div class="col-lg-12 margin-top-box-1">
		
			<div class="w3-content w3-center">
			<iframe class="video-box" src="https://www.youtube.com/embed/_5LEaz7Lyqo" frameborder="0" allowfullscreen></iframe>
			</div>
	<!-- End page content -->
	</div>

	</div>


@endsection

@section('bottom')

@endsection
