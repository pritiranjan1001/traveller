@extends('../layouts.travel')
@section('title', 'goa tourism')  
@section('head')


		<style type="text/css">
		path:hover{
			fill:#f18973;
		}
	/* scroll to top */
   
.slide:nth-child(1) .slide__bg {
  left: 0;
   background-image: url("../images/top-image/Goa-Beaches2.jpg");
 
}


.slide:nth-child(2) .slide__bg {
  left: -50%;
   background-image: url("../images/top-image/Goa-10.jpg");
}


.slide:nth-child(1) .slide__overlay-path {
  fill: #e99c7e;
}
.slide:nth-child(2) .slide__overlay-path {
  fill: #e1ccae;
}

</style>   
<link rel="stylesheet" type="text/css" href="{{asset('css/top-10.css')}}"> 


@endsection

@section('content')
<!--slide-->
<div class="description"></div>
    <div class="slider-container">
        <div class="slider-control left inactive"></div>
            <div class="slider-control right"></div>
                <ul class="slider-pagi"></ul>
                <div class="slider">
                    <div class="slide slide-0 active">
                        <div class="slide__bg"></div>
                        <div class="slide__content">
                            <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                                <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                            </svg>
                        <div class="slide__text">
                            <h2 class="slide__text-heading">Querim Beach</h2>
                            <p class="slide__text-desc">Querim Beach, also known as Keri beach, is a sunny haven of sand, sea and serenity in the northern part of Goa. The secluded beach attracts fewer visitors, and therefore fewer vendors, than most Goa beaches. To add some culture to your trip, visit an ancient temple, an old fort and historic Goan houses.</p>
                        </div>
                    </div>
                </div>
                <div class="slide slide-1 ">
                    <div class="slide__bg"></div>
                    <div class="slide__content">
                    <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                        <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                    </svg>
                        <div class="slide__text">
                            <h2 class="slide__text-heading">Arambol Beach</h2>
                            <p class="slide__text-desc">This is also a foreigners’ haunt with a large number of Tai Chi, non-permanent mehendi or henna, tattoo, yoga and meditation centres.
                            Harmal Beach is the one place you cannot drive on to, but there are narrow lanes that lead to the higher reaches of the coast. You have to walk down a slope to the beach itself.</p>
        
                        </div>
                    </div>
                </div>

        </div>
    </div>

<!--end of slide-->

 
    	<div class="container margin-top-box w3-padding-32" style="max-width:1000px;">

  			<div class="col-lg-4 top-box text-center">
  				
  				<svg  version="1.1" viewBox="0 0 181.24956 247.32536" xmlns="http://www.w3.org/2000/svg">
 					<g transform="translate(-11.88 -17.989)" fill="#85c5e3" stroke="#fff" stroke-width=".5">
  						<a href="place-details/24"><path  id="South Goa" stroke="#fff"  fill="#85c5e3" class="enabled" d="m177.5 113.82c-12.815-1.9056-20.914-1.8103-32.347 5.1927-9.5279 5.8597-18.627 1.0004-27.25 8.861 1.8103 3.7159 7.3841 5.9073 6.9078 10.719-0.57168 5.2404-9.3374 5.288-6.9078 11.719 0.19048 0.47642 13.482 22.295-0.23822 10.338-4.4305-3.8588-7.9558-5.7168-13.339-8.194-6.7648-3.1919-5.8597-11.1-11.195-15.626-14.784-9.9686-14.792-4.7354-33.252-2.4725 12.796 22.891 14.126 26.805 21.319 47.639 1.643 19.104-6.313 20.425 9.02 36.682 16.333 27.163 16.447 27.528 20.111 46.636 12.958-1.3339 17.675 0 31.919-0.52397-0.71464-3.0489 0.19051-8.1464-0.71464-10.862 9.0992 1.7628 13.482 11.767 23.105 9.8614 1.0004-9.7185-1.7627-14.101 7.4795-20.056 9.385-6.0502 4.7163-24.01 5.5738-33.205 0.90514-0.14218 1.7627-0.28576 2.6678-0.47642 5.3833-15.054-15.006-8.8134-13.244-22.105 5.4786 0.19053 10.814-0.66692 15.959-2.5725 5.7168-2.4296 0.6194-7.7653 9.3374-6.8125 3.2872-14.482-5.0498-22.343-18.008-25.964 0.76217-9.4326 10.528-26.488 5.2403-34.586 2.8584-1.0956 4.5258-2.6678 5.288-4.4781-1.9056 0.61939-4.2876 0.76218-7.4318 0.28575"/></a>
  						<a href="place-details/24">
  						<path id="North Goa" stroke="#fff"  fill="#e7de69" class="enabled" d="m54.356 113.83c-4.5777 8.4399-3.9627 13.986 18.337 14.224 15.435 0.1422 9.789-0.36102 24.486 14.586 4.1447 10.481 10.576 7.9558 17.436 14.911 1.5245 1.5245 15.006 7.9082 10.957 0.95284-2.382-4.097-10.1-6.0502-7.5747-12.291 5.0975-12.624 6.2884-5.4785-0.0954-18.389 8.6228-7.8605 17.722-3.0013 27.25-8.861 15.054-9.2898 25.249-0.95286 39.731-5.4309 4.9545-11.815-20.628-36.016-31.156-36.635-17.15 5.955-39.398-5.8597-57.025-7.4318-0.80983-22.057-16.579-30.68-21.867-51.022-12.148-1.0481-20.819-1.3816-23.867 11.624-12.243 0.42872-26.893-0.61939-39.088-0.76217 7.3568 17.032 9.1391 22.53 12.959 32.364 5.2446 12.759 5.0914 17.208 14.314 37.518 27.572 11.811 28.285 12.305 15.204 14.643"/></a>
 					</g>
 					<image style="overflow:visible;" width="272" height="272" xlink:href="{{ asset('/images/map-locator.png') }}"  transform="matrix(7.352941e-02 0 0 7.352941e-02 54.3333 83.774)">
					</image>
					<text transform="matrix(1 0 0 1 70.0002 103.774)" font-size="6.35" class="st1 st2">Panaji</text>
					<image style="overflow:visible;" width="272" height="272" xlink:href="{{ asset('/images/map-locator.png') }}"  transform="matrix(7.352941e-02 0 0 7.352941e-02 57 103.774)">
					</image>
					<text transform="matrix(1 0 0 1 60.0002 132.3333)" font-size="6.35" class="st1 st2">Vaskodagama</text>
				</svg>


				<h6 class="text-de-ls">click on the map for details</h6>
				</div>

				<div class="col-lg-6  text-justify">
				<h1 class="shead-style text-center">GOA</h1>
				<p>Goa,Literally the beach and party capital of India is a coastal state in the Konkon region of India. Purely gorgeous and beautifully placed the state is one of its kind in India. Positioned in a tropical region it always sways the travelers eyes with its lush vegetation and natural beauty. While every person across the Asia dreams to visit Goa someday it never forgets to deliver its beauties to the eyes of the beholders.</p>
				<p>The second smallest state in India, Goa is also the smallest in the southern region of India. Formerly a Portugese colony Goa was annexed by  India and finally was introduced as a state of India in 1961. A state popular all over the world for its beautiful beaches and location, Goa is the Konkon experience one of its kind.</p>
				<br>
				</div>
				</div>


    </div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
@endsection

@section('bottom')

@endsection
