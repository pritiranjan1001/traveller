@extends('../layouts.travel')
 
@section('head')

<style type="text/css">
	.pull-right{
		color: green;
	}
</style>

@endsection

@section('content')

<div class="msf-container top-box">
	        <div class="container ">
	        	<div class="row">
	                <div class="col-sm-12 col-lg-12 msf-title">
	                <p>By Completing the details below you will be able to access our content and its features</p><br>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-12 col-lg-6 col-lg-offset-3 msf-form">
	                       @if ($errors->has('im_url'))
        						<span class="">{{ $errors->has('im_url') ? 'the cover image is required;' : '' }}</span> 
        					@endif
        					@if ($errors->has('bt_url'))
         						<span class="">{{ $errors->has('bt_url') ? 'the best image is required;' : '' }}</span> 
        					@endif
        					@if ($errors->has('btimg_url'))
         						<span class="">{{ $errors->has('btimg_url') ? 'the best image is required;' : '' }}</span> 
        					@endif
	                    <form enctype="multipart/form-data" action="/upload_post" method="POST" id="commentForm" class="form-inline cmxform">
	                    	
	                    	<fieldset>

	            				<h4>Introduction <span class="step">(Step 1 / 3)</span></h4>
	            				<div class="form-group">
				                    <label for="title-name" class="pull-left">Title Name:</label>
				                    <h6 class="pull-right" id="counter1">max 120 characters</h6>
				                    <input type="text" name="hd_name" class="first-name counted1" id="cname" required>
				                </div>
				                <div class="form-group">
				                    <label for="quote" class="pull-left">Thoughts</label>
				                    <h6 class="pull-right" id="counter3">max 120 characters</h6>
				                    <input type="text" name="q_otes" class="quote counted3" id="quote">
				                </div><br>
				                  <div class="form-group">
				                    <label for="about-you" class="pull-left">Tell us a bit about the place</label>
				                    <h6 class="pull-right" id="counter2">max 120 characters</h6>
				                    <textarea name="ab_details" class="about-you counted2" required></textarea>
				                </div>

	            				<br>
	            				<button type="button" class="btn btn-next btn-info">Next <i class="fa fa-angle-right"></i></button>
	            			
	            			</fieldset>
	            			<fieldset>

	            				<h5>Geographical Representation <span class="step">(Step 2 / 3)</span></h5>
	            			
	            				<div class="form-group">
				                    <label for="vecation" class="pull-left">Time spend</label>
				                    <h6 class="pull-right" id="counter4">max 120 characters</h6>
				                    <input type="text" name="v_hours" class="vecation counted4" id="vecation">
				                </div>
				                <div class="form-group">
				                    <label for="location" class="pull-left">Location & address details</label>
				                    <h6 class="pull-right" id="counter5">max 120 characters</h6>
				                    <input type="text" name="a_ddress" class="location counted5" id="location">
				                </div><br>
				                  <div class="form-group">
				                     <label for="Best-points" class="pull-left">Things you like about the place</label>
				                    <h6 class="pull-right" id="counter6">max 120 characters</h6>
				                    <textarea name="best_points" class="Best-points counted6" id="Best-points"></textarea>
				                </div>
				                <div class="form-group">
				                   
				                    <label for="recipies" class="pull-left">Popular Local Cuisine</label>
				                    <h6 class="pull-right" id="counter7">max 120 characters</h6>
				                    <textarea name="r_cipies" class="recipies counted7" id="recipies"></textarea>
				                </div><br>
				                  <div class="form-group">
				                   <label for="how-to-reach" class="pull-left">How to reach there</label>
				                    <h6 class="pull-right" id="counter8">max 120 characters</h6>
				                    <textarea name="l_address" class="how-to-reach counted8" id="how-to-reach"></textarea>
				                </div>				                
	            				<br>
	            				<input type="hidden" name="_token" value="{{ csrf_token() }}">
	            				<button type="button" class="btn btn-previous btn-danger"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next btn-info">Next <i class="fa fa-angle-right"></i></button>
	            			
	            			</fieldset>
	            			
	            		
	            			
	            			<fieldset>
	            			<h4>Digital Library <span class="step">(Step 3 / 3)</span></h4>
	            			<div class="col-lg-4">
	            				<div class="form-group">
									<label for="why-join">Beauty that words can't describe</label><br>
				                    <input type="file" name="im_url" id="img_1" class="first-name form-control upld" name="">
				                    <img class="img-responsive" id="blah" src="#">
				                </div>
				            </div>
				            <div class="col-lg-4">
				                <div class="form-group">
									<label for="why-join">Memory captured</label><br>
				                    <input type="file" name="bt_url" id="img_1" class="first-name  form-control upld" name="">
				                    <img class="img-responsive" id="blah" src="#">
				                </div>
				            </div>
				            <div class="col-lg-4">
				                <div class="form-group">
									<label for="why-join">Naturally Digital</label><br>
				                    <input type="file" name="btimg_url" id="img_1" class="first-name  form-control upld" name="">
				                    <img class="img-responsive" id="blah" src="#">
				                </div>
				           	</div>
				
	            			<div class="col-lg-12">
	            					<button type="button" class="btn btn-previous btn-danger"><i class="fa fa-angle-left"></i> Previous</button>
	            					<button type="submit" class="btn btn-info">Submit</button>
	            			</div>
	            			</fieldset>

	                    </form>
	                    
	                </div>
	            </div>
			</div>
		</div>
		


@endsection

@section('bottom')

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script>
function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(input).next('img').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$(".upld").change(function () {
    readURL(this);
});
</script>
@endsection
