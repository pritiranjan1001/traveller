@extends('layouts.travel')
 
@section('head') 
	<style type="text/css">
	.colw{
		background-color: #f1f1f1;
	}
	@media only screen and (min-width:1000px){
		.fixed{position: fixed;
		}
			.mar-left{
		margin-left: 2%;
	}
	}
	@media only screen and (device-width:768px){
	/* default iPad screens */

	}

	/* different techniques for iPad screening */
	@media only screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait) {
	/* For portrait layouts only */
	
	}

	@media only screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape) {
	/* For landscape layouts only */

	}
	.mar-op{
		margin-top: 25px;
	}
	.font1{
		font-size: 11px;
	}

	</style> 
	<link rel="stylesheet" type="text/css" href="{{ asset('css/home-post.css')}}"> 
@endsection

@section('content')

<!-- Sidebar/menu -->
<div class="container">
	<div class="row col-lg-3 mar-op">
		
  		<div class="text-center margin-top-box-1 fixed col-lg-3">
  			
			<img src="{{ $user->avatar }}" style="width:110px; height:110px;" id="profile-image" class="img-circle"><br><br>
		
			<h4>{{ Auth::user()->name }}</h4>
			<div class="text-center ">
				<span id="status" class="w3-text-grey font1" >{!! nl2br(e($status)) !!}</span><br>
				<span class="text-center w3-hover-text-green"><a href="#edit" onclick="document.getElementById('id02').style.display='block'"><br/> &#10094;&#10094; change status</a></span>
 
				@if (Auth::guest())
				
					<div class="text-center">
					<a href="/about"><img src="{{ asset('images/photograph/2.jpg') }}" alt="Avatar" style="width:40px;height:40px;" class="w3-circle"></a>

					</div>

				@else
	 
				<div class="text-center">

					<form enctype="multipart/form-data" action="/profile" method="POST" id="profile-img">
						<label class="upload-btn"><i class="fa fa-camera" aria-hidden="true"></i></label>
						<input type="file" class="ubtn" name="avatar" id="imgInp">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="submit" class="upl buttonx imgbt">
					</form>

				</div>
				
				<div class="container text-center">
		 		
					<h6><a href="{{ url('/contents') }}" onclick="" class="btn w3-hover-text-green"><i class="fa fa-th-large fa-fw"></i> MAGAZINES</a>||<a href="{{ url('/distance') }}" onclick="" class="btn w3-hover-text-green">DISTANCE MAP <i class="fa fa-map fa-fw"></i></a> </h6>

				</div>
			
				@endif    
			</div>
    	</div>
	</div>

	


		<div class="col-lg-8 mar-left margin-top-box">
			@foreach ($post_data as $post)
				@if( $post->id ) 
			<a href="view/{{ $post->id }}">
						<div class="card">
							<div class="thumbnail"><img class="left" src="{{ asset('upload/post-1'). '/'.$post->im_url }}"/></div>
							<div class="right">
								<h1 class="box">{{ $post->hd_name }}</h1>
								<div class="author"><img src="{{ asset('/').Auth::user()->avatar }}"/>
									<h2>{{Auth::user()->name}}</h2>
								</div>
								<hr>
								<p class="more box" id="tasks">{{$post->ab_details}}</p>
								<h6 class="text-left col-sm-12">{{ $post->updated_at }}</h6>
							</div>

							<ul>
								<li><a class="btn-tiny" onclick="document.getElementById('share').style.display='block'"><i class="fa fa-share-alt fa-2x"></i></a></li>

								<li><a href="/delete/{{ $post->id }}" class="btn-tiny"><i class="fa fa-trash-o fa-2x"></i></a></li>
						
								<li><a href="/edit/{{ $post->id }}" class="btn-tiny" id="travel-submit-post"><i class="fa fa-pencil-square-o fa-2x"></i></a></li>
									
							</ul>
							<br>
			
						</div>
					</a>
				@endif 
			@endforeach 
		</div>

</div>
<div id="id02" class="w3-modal">
	<div class="w3-modal-content w3-padding-64">
		<div class="container w3-padding-64">
			<span onclick="document.getElementById('id02').style.display='none'" class="btn btn-dangerw3-display-topright">&times;</span>
		
			    <div class="box">

				{!! Form::open(['id'=>'update-status','class'=>'container','url' => 'status']) !!}
				{!!Form::label('description','Update your status:')!!}
				 <h6 class="pull-right" id="counter">360 characters remaining</h6>
				{!! Form::textarea('status','write here..',['class'=>'form-control counted', 'rows' => 2, 'cols' => 40]) !!}
			 
				{!!Form::submit('Update',['class'=>'btn block btn-success'])!!}
				{!! Form::close() !!}
		  
				</div>

		</div>
	</div>
</div>


@endsection

@section('bottom')
<script type="text/javascript">

$('#profile-img').on('submit', function (e) {

	e.preventDefault();
	var formData = new FormData($(this)[0]);
	$.ajax({
		type: 'post',
		url: base_url + '/profile',
		data: formData,
		success: function (response) {
			if ( 'fail' !== response ) {
				$("#profile-image").attr("src", response);
				$("#profile-image").val("");
			}
		},
		cache: false,
		contentType: false,
		processData: false
	});
});

$('#update-status').on('submit', function (e) {

	e.preventDefault();

	$.ajax({
		type: 'post',
		url: base_url + '/update_status',
		data: $('#update-status').serialize(),
		success: function (response) {
			if ( 'fail' !== response ) {
				$("#status").html(response);
				document.getElementById('id02').style.display='none';
			}
		}
	});
});

function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#profile-image').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function(){
    readURL(this);
});

</script>

@endsection
