@extends('../layouts.travel')
 
@section('head')

<style type="text/css">
	.pull-right{
		color: green;
	}
</style>

@endsection

@section('content') 
@foreach ($welcome as $post) 
<div class="msf-container top-box">
	        <div class="container">
	        	<div class="row">
	                <div class="col-sm-12 col-lg-12 msf-title">
	                <p>Please complete the form below to get instant access to our application and all its features:</p><br>
	                </div>
	            </div> 
	            <div class="row">
	                <div class="col-sm-12 col-lg-6 col-lg-offset-3 msf-form">
	                       @if ($errors->has('im_url'))
        						<div class="w3-center w3-text-pink">{{ $errors->has('im_url') ? 'the cover image is required' : '' }}</div> 
        					@endif
        					@if ($errors->has('bt_url'))
         						<div class="w3-center w3-text-pink">{{ $errors->has('bt_url') ? 'the best image is required' : '' }}</div> 
        					@endif
        					@if ($errors->has('btimg_url'))
         						<div class="w3-center w3-text-pink">{{ $errors->has('btimg_url') ? 'the best image is required' : '' }}</div> 
        					@endif
	                    <form enctype="multipart/form-data" action="/update/{{$post->id}}" method="POST" id="commentForm" class="form-inline cmxform">
	                    	 
	                    	<fieldset>

	            				<h4>Introduction <span class="step">(Step 1 / 3)</span></h4>
	            				<div class="form-group">
				                    <label for="title-name" class="pull-left">Title Name:</label>
				                    <h6 class="pull-right" id="counter1">max 120 characters</h6>
				                    <input type="text" name="hd_name" class="first-name counted1" id="cname" required value="{{$post->hd_name}}">
				                </div>
				                <div class="form-group">
				                    <label for="quote" class="pull-left">Quote:</label>
				                    <h6 class="pull-right" id="counter3">max 120 characters</h6>
				                    <input type="text" name="q_otes" value="{{$post->q_otes}}" class="quote counted3" id="quote">
				                </div><br>
				                  <div class="form-group">
				                    <label for="about-you" class="pull-left">Tell us a bit about the topic</label>
				                    <h6 class="pull-right" id="counter2">max 120 characters</h6>
				                    <textarea name="ab_details" class="about-you counted2" required>{{$post->ab_details}}</textarea>
				                </div>


	            				<br>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			
	            			</fieldset>
	            				<fieldset>
	            				<h4>Introduction <span class="step">(Step 2 / 3)</span></h4>
	            			
	            				<div class="form-group">
				                    <label for="vecation" class="pull-left">Vecation hours</label>
				                    <h6 class="pull-right" id="counter4">max 120 characters</h6>
				                    <input type="text"  value="{{$post->v_hours}}" name="v_hours" class="vecation counted4" id="vecation">
				                </div>
				                <div class="form-group">
				                    <label for="location" class="pull-left">Location address</label>
				                    <h6 class="pull-right" id="counter5">max 120 characters</h6>
				                    <input type="text" name="a_ddress" value="{{$post->a_ddress}}" class="location counted5" id="location">
				                </div><br>
				                  <div class="form-group">
				                     <label for="Best-points" class="pull-left">Best points about the place</label>
				                    <h6 class="pull-right" id="counter6">max 120 characters</h6>
				                    <textarea name="best_points" class="Best-points counted6" id="Best-points">{{$post->best_points}}</textarea>
				                </div>
				                <div class="form-group">
				                   
				                    <label for="recipies" class="pull-left">Recipies</label>
				                    <h6 class="pull-right" id="counter7">max 120 characters</h6>
				                    <textarea name="r_cipies" class="recipies counted7" id="recipies">{{$post->r_cipies}}</textarea>
				                </div><br>
				                  <div class="form-group">
				                   <label for="how-to-reach" class="pull-left">How to reach there</label>
				                    <h6 class="pull-right" id="counter8">max 120 characters</h6>
				                    <textarea name="l_address" class="how-to-reach counted8" id="how-to-reach">{{$post->l_address}}</textarea>
				                </div>				                
	            				<br>
	            				<input type="hidden" name="_token" value="{{ csrf_token() }}">
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			
	            			</fieldset>
	            			
	            		
	            			
	            			<fieldset>
	            				<h4>Why You Want To Join <span class="step">(Step 3 / 3)</span></h4>
	            			    <!--<div class="form-group">
									<label for="why-join">Tell us why you want to join our application:</label><br>
				                    <input type="file" name="im_url" class="first-name form-control" name="">
				                </div>
				                	<div class="form-group">
									<label for="why-join">Tell us why you want to join our application:</label><br>
				                    <input type="file" name="bt_url" class="first-name  form-control" name="">
				                </div>
				                	<div class="form-group">
									<label for="why-join">Tell us why you want to join our application:</label><br>
				                    <input type="file" name="btimg_url" class="first-name  form-control" name="">
				                </div>-->	
	            				<br>
	            					<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            					<button type="submit" class="btn">Submit</button>
	            			</fieldset>
	            		
	   
	                    	
	                    </form>
	                    
	                </div>
	            </div>
			</div>
		</div>
		

  @endforeach 
@endsection

@section('bottom')

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script>


$( "#commentForm" ).validate();

</script>
@endsection
