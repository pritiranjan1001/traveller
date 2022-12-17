@extends('../layouts.travel')
 
@section('head')

<style>
        body, html {
         /*height: 100%;
       font-family: "Inconsolata", sans-serif;*/
        }
        a{
        text-decoration:none;
        } 

 html, .container-table {
    height: 100%;
}
.container-table {
    display: table;
}
.vertical-center-row {
    display: table-cell;
    vertical-align: middle;
}

.profile {
  display: block;
  width: 250px;
  height: 250px;
  margin: 0 auto;
  border-radius: 50% 50% 50% 0;
}

h1 {
  font-weight: 900;
  font-size: 3em;
}
hr {
  height: 10px;
  background-color: rgba(0, 0, 0, 0.8);
  margin-top: 2.42105em;
  margin-bottom: 1.42105em;
}
/*p {
  -webkit-column-count: 2;
  -moz-column-count: 2;
  column-count:2;
}*/

        </style> 

@endsection

@section('content')
<!-- Good offers -->
@foreach ($welcome as $post) 
<div class="container margin-top-box" style="max-width:1000px;">

        <div class="col-lg-10 top-box col-lg-offset-1">

            <div class="col-lg-6">
                <h1 class="text-center"><span class="">{{ $post->state_place }}</span></h1>
                    <p class="text-justify">{{ $post->main_points }}</p>
                    <hr />
            </div>
            <div class="col-lg-6">
                <a href=""><img class="profile img-responsive" src="{{ asset('/images/place'). '/'.$post->map_url}}" /></a>
                <br>
            </div>

        </div>

</div>
 

@endforeach 
@endsection

@section('bottom')

@endsection
