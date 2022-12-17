@extends('layouts.travel')
 
@section('head') 
<link rel="stylesheet" type="text/css" href="{{asset('css/extra-shot-view.css')}}">    
@endsection
 
@section('content')

	<div class="col-lg-6 col-lg-offset-3" style="max-width:800px;">
	<!-- Explore Nature -->

		<div class="container margin-top-box-1">
			<div class="text-center margin-top-box top-buffer">
			<br>
				<h2>Explore Nature</h2>
				<p>Travel with us and see nature at its finest.</p>
				<p> Send us your Trip ,we are eagerly waiting for you to publish ..

				@if (Auth::guest())
				<span><a href="{{ route('login') }}" class="btn btn-default">click</a></span>
				@else
				<!--<span><a onclick="document.getElementById('id04').style.display='block'" id="travel-submit-post" class="w3-bar-item w3-button w3-border w3-light-grey">click</a></span>-->
				@endif 
				<h6><a href="{{ url('/distance') }}"><span class="btn btn-danger">Check distances</span></a>
				<a href="{{ url('/contents') }}"><span class="btn btn-danger">Published Magazines</span></a>
				<a href="{{ url('/videos') }}"><span class="btn btn-danger">Videos to watch</span></a>
				</h6>
				</p>
			</div>
			@foreach( $welcome as $post ) 
			@if( $post->id )
 				<a href="extra/{{ $post->id }}">
				<svg display="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<defs>
				<symbol id="icon-bubble" viewBox="0 0 1024 1024">
  				<title>bubble</title>
  				<path class="path1" d="M512 224c8.832 0 16 7.168 16 16s-7.2 16-16 16c-170.464 0-320 89.728-320 192 0 8.832-7.168 16-16 16s-16-7.168-16-16c0-121.408 161.184-224 352-224zM512 64c-282.784 0-512 171.936-512 384 0 132.064 88.928 248.512 224.256 317.632 0 0.864-0.256 1.44-0.256 2.368 0 57.376-42.848 119.136-61.696 151.552 0.032 0 0.064 0 0.064 0-1.504 3.52-2.368 7.392-2.368 11.456 0 16 12.96 28.992 28.992 28.992 3.008 0 8.288-0.8 8.16-0.448 100-16.384 194.208-108.256 216.096-134.88 31.968 4.704 64.928 7.328 98.752 7.328 282.72 0 512-171.936 512-384s-229.248-384-512-384zM512 768c-29.344 0-59.456-2.24-89.472-6.624-3.104-0.512-6.208-0.672-9.28-0.672-19.008 0-37.216 8.448-49.472 23.36-13.696 16.672-52.672 53.888-98.72 81.248 12.48-28.64 22.24-60.736 22.912-93.824 0.192-2.048 0.288-4.128 0.288-5.888 0-24.064-13.472-46.048-34.88-56.992-118.592-60.544-189.376-157.984-189.376-260.608 0-176.448 200.96-320 448-320 246.976 0 448 143.552 448 320s-200.992 320-448 320z"></path>
				</symbol>
				<symbol id="icon-star" viewBox="0 0 1024 1024">
  				<title>star</title>
  				<path class="path1" d="M1020.192 401.824c-8.864-25.568-31.616-44.288-59.008-48.352l-266.432-39.616-115.808-240.448c-12.192-25.248-38.272-41.408-66.944-41.408s-54.752 16.16-66.944 41.408l-115.808 240.448-266.464 39.616c-27.36 4.064-50.112 22.784-58.944 48.352-8.8 25.632-2.144 53.856 17.184 73.12l195.264 194.944-45.28 270.432c-4.608 27.232 7.2 54.56 30.336 70.496 12.704 8.736 27.648 13.184 42.592 13.184 12.288 0 24.608-3.008 35.776-8.992l232.288-125.056 232.32 125.056c11.168 5.984 23.488 8.992 35.744 8.992 14.944 0 29.888-4.448 42.624-13.184 23.136-15.936 34.88-43.264 30.304-70.496l-45.312-270.432 195.328-194.944c19.296-19.296 25.92-47.52 17.184-73.12zM754.816 619.616c-16.384 16.32-23.808 39.328-20.064 61.888l45.312 270.432-232.32-124.992c-11.136-6.016-23.424-8.992-35.776-8.992-12.288 0-24.608 3.008-35.744 8.992l-232.32 124.992 45.312-270.432c3.776-22.56-3.648-45.568-20.032-61.888l-195.264-194.944 266.432-39.68c24.352-3.616 45.312-18.848 55.776-40.576l115.872-240.384 115.84 240.416c10.496 21.728 31.424 36.928 55.744 40.576l266.496 39.68-195.264 194.912z"></path>
				</symbol>
				</defs>
				</svg>

				<div class="blog-container w3-content" style="max-width:600px">
  
  					<div class="blog-header">
						<div class="blog-cover">
						<img src="{{ asset('upload//travel-image-1'). '/'.$post->img_url_one }}">
	  						<div class="blog-author">
								<!--<h3>{{$post->hd_name}}</h3>-->
	  						</div>
						</div>
  					</div>

  					<div class="blog-body">
						<div class="blog-title">
	  						<h1><a href="#">{!! nl2br(e($post->hd_name)) !!}</a></h1>
						</div>
						<div class="blog-summary">
	  						<p>{{$post->ab_details}}</p>
						</div>
						<div class="blog-tags">
	  						<ul>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">twitter</a></li>
							<li><a href="#">Instagram</a></li>
							<li><a href="#">pinterest</a></li>
	  						</ul>
						</div>
  					</div>
  
  					<div class="blog-footer">
						<ul>
	  					<li class="published-date">2 days ago</li>
	  					<li class="comments"><a href="#"><svg class="icon-bubble"><use xlink:href="#icon-bubble"></use></svg><!--<span class="numero">4</span>--></a></li>
	  					<li class="shares"><a href="#"><svg class="icon-star"><use xlink:href="#icon-star"></use></svg><!--<span class="numero">1</span>--></a></li>
						</ul>
  					</div>

				</div>
				</a>
				<br>
			@endif 
		@endforeach 


		</div>

	<!-- End page content -->
	</div>

	<div id="id04" class="w3-modal">
		<div class="w3-modal-content  w3-padding-42">
			<div class="w3-container w3-padding-42">
				<span onclick="document.getElementById('id04').style.display='none'" class="w3-button w3-display-topright">&times;</span>

				{!! Form::open(['id'=>'travel-post','style'=>'margin:auto;width:60%','class'=>'w3-container','url' => '/travel_post' ,'enctype'=> 'multipart/form-data']) !!}

				<div class="w3-box" id="travel-box1">
					<p>Just me, myself and I, exploring the universe of unknownment.</p>
					<p>You can also send us E-mail . Send us on <span class="w3-text-pink">example@info.com</span></p>
					<p class="w3-large w3-text-pink">Do not hesitate to contact us!</p>
					{!!Form::label('description','Name of the location')!!}
					{{ Form::text('hd_name', '', array('class' => 'w3-input w3-border')) }}
					{!!Form::label('description','About the location')!!}
					<!--<h6 class="pull-right" id="counter1">max 120 characters</h6>-->
					{!! Form::textarea('ab_details','',['class'=>'w3-input w3-border', 'rows' => 2, 'cols' => 40]) !!}
					{!!Form::label('description','Location to watch')!!}
					<!--<h6 class="pull-right" id="counter2">max 120 characters</h6>-->
					{!! Form::textarea('loc_watch','',['class'=>'w3-input w3-border', 'rows' => 2, 'cols' => 40]) !!}
					<a class="w3-button w3-block w3-dark-grey" id="travel-btn-box1">Next</a>
				</div>


				<div class="w3-box" id="travel-box2" hidden="hidden">
					<p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog.</p>
						{!!Form::label('description','Image-1')!!}
						{!! Form::file('img_url_one',['class'=>'w3-input w3-border w3-center w3-padding-42 u']) !!} 
						{!!Form::label('description','Image-2')!!}
						{!! Form::file('img_url_two',['class'=>'w3-input w3-border w3-center w3-padding-42 u']) !!} 
						{!!Form::label('description','Image-3')!!}
						{!! Form::file('img_url_tee',['class'=>'w3-input w3-border w3-center w3-padding-42 u']) !!} 
						{!!Form::label('description','Image-4')!!}
						{!! Form::file('img_url_for',['class'=>'w3-input w3-border w3-center w3-padding-42 u']) !!} 
						{!!Form::label('description','Image-5')!!}
						{!! Form::file('img_url_fve',['class'=>'w3-input w3-border w3-center w3-padding-42 u']) !!} 
						<br>
					<a class="w3-button w3-block w3-dark-grey" id="travel-btn-box2">Next</a>
				</div>


				<div class="w3-box" id="travel-box3" hidden="hidden">
		 			<p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog.</p>
						{!!Form::label('description','Foods')!!}
						<!--<h6 class="pull-right" id="counter1">max 120 characters</h6>-->
						{!! Form::textarea('r_cipies','',['class'=>'w3-input w3-border', 'rows' => 2, 'cols' => 40]) !!}
						{!!Form::label('description','hotels to stay')!!}
						<!--<h6 class="pull-right" id="counter8">max 120 characters</h6>-->
						{!! Form::textarea('l_hotels','',['class'=>'w3-input w3-border', 'rows' => 2, 'cols' => 40]) !!}
						{!!Form::label('description','Best experiences')!!}
						<!--<h6 class="pull-right" id="counter8">max 120 characters</h6>-->
						{!! Form::textarea('best_points','',['class'=>'w3-input w3-border', 'rows' => 2, 'cols' => 40]) !!}
						{!!Form::submit('Submit',['class'=>'w3-button w3-block w3-dark-grey'])!!}

				</div>
		
				{!! Form::close() !!}
				

			</div>
		</div>    
	</div>


@endsection

@section('bottom')
<script type="text/javascript">
	$("#travel-submit-post").click(function(){
	$("#travel-box1").show();
	$("#travel-box2").hide();
	$("#travel-box3").hide();
})

$("#travel-btn-box1").click(function(){
	$("#travel-box1").hide();
	$("#travel-box2").show();
});

$("#travel-btn-box2").click(function(){
	$("#travel-box2").hide();
	$("#travel-box3").show();
});


</script>
@endsection
