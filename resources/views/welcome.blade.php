@extends('layouts.travel')

@section('head')

<link rel="stylesheet" type="text/css" href="{{ asset('css/home-post.css')}}"> 
<style type="text/css">
svg{font-weight:bold;max-width:400px;height:auto;}
a{
   text-decoration: none;
}

</style>
@endsection

@section('content')
	<div class="container" id="about">
		<div class="text-center row content margin-top-box-1">
			<div class="col-lg-6 col-md-12 col-lg-offset-3">
			
				<div class="top-buffer">
				<br><br>
				<h6>Travel is fatal to prejudice, bigotry, and narrow-mindedness, <br/>and many of our people need it sorely on these accounts.<br/> Broad, wholesome, charitable views of men and things cannot be acquired by vegetating in one little corner of the earth all one's lifetime.<br/>Shre your travel experiences with the world.</h6>
				</div>

			</div>
	
			<div class="col-lg-6 col-lg-offset-3">
				<h6><a href="{{ url('/distance') }}"><span class="btn btn-info">&#10094;&#10094; Search</span> </a>
				<a href="{{ url('/profile') }}"><span class="btn btn-danger">Profile &#10095;&#10095;</span></a></h6>
			</div>



		</div>
		<div class="col-lg-6 col-lg-offset-3 top-box"> 

			@foreach ($welcome as $post)
				@if( $post->id ) 
				
				<a href="view/{{ $post->id }}">
						<div class="card">
							<div class="thumbnail"><img class="left" src="{{ asset('upload/post-1'). '/'.$post->im_url }}"/></div>
							<div class="right">
								<h1 class="box">{{ $post->hd_name }}</h1>
								<div class="author"><img src="{{ asset('/').$post->avatar }}"/>
									<h2>{{$post->name}}</h2>
								</div>
								<hr>
								<p class="more box" id="tasks">{{$post->ab_details}}</p>
								<h6 class="text-left col-sm-12">{{ $post->updated_at }}</h6>
							</div>

							<ul>

								<li><a class="btn-tiny"><i class="fa fa-eye fa-2x"></i></a></li>
							   	<li><a class="btn-tiny" onclick="document.getElementById('share').style.display='block'"><i class="fa fa-share-alt fa-2x"></i></a></li>
							   	<li><a class="btn-tiny" ><i class="fa fa-heart-o fa-2x"></i></a></li>	

							</ul>
							<br>
			
						</div>
					</a>
				
				@endif 
			@endforeach 

		</div>  
			
		<div class="col-lg-6 col-lg-offset-3">
			{{ $welcome->links() }}
		</div>
	</div>

@endsection

@section('bottom')

@endsection
