@extends('../layouts.travel')
@section('title', 'nagaland tourism')  
@section('head')

   <style type="text/css">
    path:hover{
      fill:#f18973;
    }
  /* scroll to top */
   
.slide:nth-child(1) .slide__bg {
  left: 0;
   background-image: url("../images/top-image/nagaland-(1).jpg");
 
}


.slide:nth-child(2) .slide__bg {
  left: -50%;
   background-image: url("../images/top-image/nagaland-(2).jpg");
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
                            <h2 class="slide__text-heading">Veda Peak</h2>
                            <p class="slide__text-desc">The Veda Peak is located around 70 km east of the headquarters of the Mon District. This is the highest peak in the district. It is said that British soldiers first set up their camp at this peak.</p>
                            <h6>Photo by Sayan Nath</h6>
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
                            <h2 class="slide__text-heading">Dzukou Valley</h2>
                            <p class="slide__text-desc">Dzukou Valley, a lesser known pocket of paradise for trekkers and wanderers in search of solitude amidst nature, is situated at the border of Nagaland and Manipur.

                            Located at 2438 meters above sea level and behind the Japfu Peak (Nagaland’s second highest), Dzukou Valley is believed to have gotten its name from its namesake river which means ‘cold waters’.</p>
                            <h6>Photo by Nilotpal Kalita</h6>
                        </div>
                    </div>
                </div>
    
        </div>
    </div>

<!--end of slide-->


 
    	<div class="container margin-top-box w3-padding-32" style="max-width:1000px;">

  			<div class="col-lg-4 margin-top-box-1 text-center">

  			<svg  version="1.1" viewBox="0 0 135.67401 150.71707" opacity="0.8" xmlns="http://www.w3.org/2000/svg">
 <a href="place-details/71"><g transform="translate(-14.377 -28.068)" fill="#85c5e3" stroke="white" stroke-width=".5">
  <path id="Mon" class="enabled" d="m140.44 34.969c1.9364-0.07907 1.9575-2.5397 1.9575-2.5397 0.20776 2.3593-0.34083-0.33888-0.99831-1.4816-1.5298-2.6583-0.94488-3.2786-1.5298-2.6583-0.98053 1.04-3.5893 3.9013-5.0008 4.3619-1.2628 0.40115-2.8526 0.17828-4.1748 0.57942-1.8126 0.53485-4.8582 0.63885-6.344 1.7086-1.5748 1.144-0.83195 3.432-1.5897 5.1851-2.1691 0.46056-3.3874 3.6697-4.3085 5.1405-0.92113 1.4857-2.4366 2.5703-3.9668 3.4914 1.144 1.7086 1.7086 3.848 1.7977 5.8388-1.1886 0-1.2628 0.49027-2.1691 1.1143 0.49027 1.0994 0.34169 3.3577 0.93599 4.2045 1.1143 1.5451 1.4411 0.35657 2.9862 1.0697 2.5852 1.1886 2.6297 3.328 3.8331 6.0765 0.99543 2.3028 3.4765 4.2342 4.1006 6.5222 0.59426 2.184-0.63884 4.5017 0.29704 6.7748 1.9017 4.6057 8.1268 5.2 12.287 3.0903 1.7828-0.90628 1.7955-0.77202 1.5617-3.695-0.87717-3.4834-0.99021-3.5109-0.2774-9.0135 1.5809-2.065 1.5952-2.2186 3.5775-6.0253 2.5047-4.7273 2.7103-4.4998 6.6375-9.3756-1.9636-2.8801-1.8148-2.2211-3.8337-6.4025-0.81518-3.9415 0 0-0.99487-5.9436-3.7459-4.7383-3.3087-3.8295-4.784-8.0228z"/>
  <path id="Tuensang" class="enabled" d="m145.48 104.94c0.99596-3.5874 0.79455-1.7899 1.0964-6.3964-2.6701-2.2118-4.111-9.4307-4.8321-12.511-1.7595-3.4376 2.4954 10.689 2.3408 5.5744-1.8296-3.0955-3.719-9.0614-5.5166-8.17-3.6442 2.6256-10.385 1.5154-12.287-3.0903-0.93601-2.2731 0.29704-4.5908-0.29703-6.7748-0.62404-2.288-3.0903-4.2194-4.1006-6.5222-1.1886-2.7337-1.248-4.888-3.8331-6.0765-1.5452-0.71314-1.872 0.47544-2.9863-1.0697-0.60914-0.832-0.46056-3.1051-0.93599-4.2045 0.90629-0.624 0.98058-1.1143 2.1691-1.1143-0.0891-1.9908-0.65372-4.1302-1.7977-5.8388-0.53484 0.31198-1.0549 0.60914-1.5749 0.90628-1.4857 0.81714-3.0457 1.56-4.6205 2.288 0 1.7383-0.84686 3.744-1.3074 5.7051-1.0548 4.4274 3.3577 5.4674 3.3726 9.4788 0 1.8274-0.86171 3.6845-0.87656 5.5862-0.0298 2.1097 0.11892 4.0263-0.34169 6.1211-0.87658 4.056-3.8034 5.6011-6.5965 8.4239-4.056 4.1005 0.40115 2.6594 1.3371 6.6114 0.0891 0.37145 0.14853 0.71313 0.17837 1.0548 1.4708 0.13371 2.8971-0.25257 4.368 0.0891 6.4034 1.5154 1.04 13.862 0.832 18.452 1e-3 -1e-3 0.0299-0.0443 0.0443-0.0594l1.1737-4.2194c-0.0595 2.2137-0.40114 3.2091-1.1737 4.2194l-0.0595 0.20797c0-0.0443 1e-3 -0.10402 1e-3 -0.1634-0.44568 0.56458-1.0251 1.1588-1.768 1.976-1.7383 1.9166-1.4263 3.9966-2.8823 5.8091 2.1246 0.90627 4.7542 1.1588 6.656 2.1097 1.9165 0.96571 2.808 3.5062 3.9074 5.2297-0.86171 0.22286-1.456 0.63885-2.1097 0.99542 0.57944 0.40115 1.144 0.81714 1.6343 1.248 1.0252-1.768 2.6446-1.3668 4.2491-2.1394 2.0057-0.98056 2.6446-2.6743 5.2148-1.9611 0.54973 2.0503 2.0205 3.7142 2.5554 5.7497 0.50537 1.9017 0.26728 4.2194 0.56462 6.1805 0.19306 1.3074 0.56455 2.5108 0.9954 3.6697 0.71315 0.37146 1.4411 0.728 2.1839 0.98056 1.8368-7.6494 2.1772-7.5212 4.2778-12.292 6.038-4.7873 5.9604-4.9458 4.7628-10.622-1.4923-4.2175 0.63748-7.8759 3.9107-12.353 2.2079-2.9566-5.5194 8.7711-3.2732 4.4772z"/>
  <path id="Phek" class="enabled" d="m128.98 142.82-4.2854 3.638c3.1679-3.3956 1.8893-1.7289 3.5277-4.0986-0.43069-1.1588-0.80229-2.3623-0.99541-3.6697-0.29706-1.9611-0.0742-4.2788-0.56462-6.1805-0.53456-2.0354-2.0057-3.6994-2.5554-5.7497-2.5703-0.71315-3.2091 0.99542-5.2148 1.9611-1.6045 0.77257-3.224 0.37145-4.2491 2.1394-0.49025-0.43085-1.04-0.84685-1.6343-1.248-0.35656 0.19316-0.74285 0.38627-1.1886 0.47545-1.2926 0.28228-2.8823-0.16341-4.2194-0.11887-2.0651 0.0743-2.392 0.38627-4.056-0.63886-1.3371-0.83199-2.08-2.1543-3.4171-2.912-3.0457-1.7086-15.927-1.04-14.946 4.056-0.49026-0.0891-0.9657-0.22287-1.4263-0.37144-0.47543 2.1097-1.1588 4.1748-2.1691 6.1508-2.6 5.0663-3.8628 11.172-4.7691 16.863 0.59428 0.40115 0.75771 1.1143 1.7828 1.2777 1.0103 0.16341 2.0503-0.53485 3.1348-0.92113 2.6891-0.96571 4.264-1.56 7.2205-1.6491 1.9017-0.0594 5.3634 0.32687 6.8788-1.0846 1.2628-1.1737 0.51997-2.4663 0.99543-3.8182 0.46056-1.2777 1.04-1.6046 1.8274-2.7634 0.41598-0.60915 4.3531-6.6411 5.0663-6.136 0.84685 0.60915 1.4857 0.92114 2.5257 1.2926 0.17838 4.6354-0.43085 9.3748-0.25257 14.01 4.4274 0.38627 4.3586 1.1288 8.8603 1.5894 0.9305-2.8255 0.9305-2.8255 3.1668-3.6534 2.6-0.40115 2.7777-0.49442 5.3331-1.2224 1.4332-3.772 1.4038-3.4702 3.2276-5.3084 1.8813-1.9589-0.19026-0.0455 2.3961-1.9091z"/>
  <path id="Kohima" class="enabled" d="m76.807 127.26c-0.19306-1.2034-0.08907-3.1646 0.59428-4.1897 0.60913-0.92113 2.0057-0.93599 2.4663-1.8274 1.0697-2.1097 0.05946-5.6011 1.04-7.8891h0.23769c-3.4171-1.1143-6.4777-1.2926-6.4034 2.704-2.0948 0.93599-4.6651 0.1337-6.8936 0.22287-2.2731 0.0891-3.9074 1.0103-5.9874 1.7234-0.78742 0.26745-1.5303 0.44573-2.2137 0.53486 0.23769 2.4217-0.26747 4.7097-1.5303 6.4479 1.4263 1.6046 2.6148 3.2388 3.0308 4.5165 1.144 3.5657-3.7142 7.4434-6.2845 9.5976-0.29716 1.1143-1.248 1.768-1.56 2.8674-0.29716 1.04 0.37144 3.1943-0.35657 3.9817-1.2926 1.4114-6.9085 0.14858-8.5874-0.11887-1.7383-0.28228-1.9017-1e-3 -3.2685-1.144-0.624-0.51997-1.4857-2.5703-1.8868-2.7782-3.328-1.768-3.8183 1.768-4.0411 4.0114-2.2286 0.35656-5.1405-0.84686-7.1759-1.6046-0.65371-0.23769-1.3966-0.49027-2.1691-0.74285-0.99542 0.78742-2.2583 1.1291-2.2583 3.5062-2.0948 0.86172-7.3691 2.4217-8.5131 4.3234-1.5303 2.5406-0.08917 1.0697 0.90628 3.016 0.17828 0.34174 1.7531 3.2983 2.288 3.6697 4.16 2.8228 6.6559-1.04 6.4479 5.9874-0.08916 3.1348-0.46056 6.1954 0.54973 8.9587 2.1691 0.0742 4.4868 0.19329 5.2 2.1691 2.808 0.75771 5.3485 2.5257 8.0822 3.5806 1.7383-3.6103 2.4217-7.3839 5.4822-10.014 1.8274-1.5749 3.0754-2.6594 4.4125-4.7691 2.0057-3.1646 0.98056-5.9131-2.6297-6.2697 1.0103-2.5702 5.3782-2.4217 7.6068-3.536 2.912-1.4411 4.8137-2.0354 8.2456-1.9611 2.5257 0.0443 4.9325 0.2377 7.2948 0.99542 1.5749 0.50515 2.2434 1.2183 3.9222 0.99543 0.92114-0.11888 2.2434-1.352 2.7188-1.3817 0.62401-0.0297 0.99543 0.0891 1.2777 0.28228 0.90626-5.6902 2.1691-11.796 4.7691-16.863 1.0103-1.976 1.7086-4.0411 2.1691-6.1508-1.976-0.60914-3.8183-1.5451-5.8686-1.6937-0.41598-0.44575-0.62399-0.728-1.1143-1.1588z"/>
  <path id="Dimapur" class="enabled" d="m58.116 124.97c-1.2777 1.768-3.2982 2.9714-6.0617 3.1794-3.12 0.23769-4.264 0.0297-5.9725-2.9268-0.84685-1.456-2.3623-4.9177-0.31198-6.0914-2.7188 1.56-5.4377 2.1246-8.4834 2.6743-0.57942 2.3771-0.19316 4.4422 2.184 5.5417-1.9314 4.7394-8.6022 4.5314-11.484 8.5576-1.5897 2.2286-0.32686 3.9668-1.2331 6.4182-0.20799 0.57943-0.56456 0.95084-0.93599 1.248 0.77256 0.25257 1.5154 0.50514 2.1691 0.74285 2.0503 0.7577 4.9474 1.9611 7.1759 1.6046 0.22286-2.2434 0.71314-5.7942 4.0411-4.0114 0.40116 0.22286 1.2628 2.2583 1.8868 2.7782 1.3668 1.1291 1.5303 0.86171 3.2685 1.144 1.6788 0.26745 7.2948 1.5303 8.5874 0.11886 0.72799-0.80228 0.05941-2.9565 0.35657-3.9817 0.31198-1.0994 1.2628-1.7531 1.56-2.8674 2.5703-2.1543 7.4285-6.0468 6.2845-9.5976-0.41598-1.2926-1.6046-2.9268-3.0308-4.5314z"/>
  <path id="Wokha" class="enabled" d="m86.79 102.58c-1.4708-2.288-1.2331-4.1451 0.53487-5.4228-0.38629-0.66857-0.66857-1.4263-0.77258-2.288-0.46056-3.6994 1.56-7.8297-1.9017-10.578-0.10399-2.5554 0.05946-5.096 0.47543-7.4879-0.10399 0.02975-0.20799 0.07429-0.35656 0.10399-1.3074 0.31198-2.08-0.20799-2.4663-1.3074-0.60913-1.768 0.34169-4.2937-0.11892-6.1657-0.99543-0.14858-3.8628 0.23769-4.5314 1.0103-3.2685 3.7737-1.7383 10.028-4.3085 14.174-1.5897 2.5554-4.0559 2.4663-5.8388 4.2491-0.22291 0.22286-7.1017 12.926-7.4285 12.094 1.7383 4.3828 5.0365 3.8331 0.98055 8.1119-2.9565 3.1051-3.2685 2.6446-1.9463 6.8788 0.2674 0.8617 0.43087 1.7234 0.51999 2.5703 0.68342-0.0892 1.4263-0.26746 2.2137-0.53486 2.08-0.71314 3.7142-1.6491 5.9874-1.7234 2.2286-0.0891 4.7988 0.71313 6.8937-0.22287-0.07438-3.9965 2.9863-3.8182 6.4034-2.704 3.744-0.10402 5.4079 0.0297 7.1759-3.6994 1.0549-2.1988 2.4069-7.0719-1.5154-7.0571z"/>
  <path id="Mokokchung" class="enabled" d="m106.98 57.656c0.46055-1.9463 1.3074-3.952 1.3074-5.7051-6.2994 2.8823-12.896 5.4971-15.719 12.004-0.8617 1.9611-0.57943 4.16-1.1291 6.1805-0.63884 2.3177-3.3428 3.4617-4.8731 5.1257-0.71313 0.77257-0.5794 1.2331-1.4263 1.5303-0.41598 2.392-0.57943 4.9325-0.47546 7.4879 3.4617 2.7634 1.4411 6.8788 1.9017 10.578 0.104 0.8617 0.38627 1.6194 0.77256 2.288 0.40115-0.29716 0.87656-0.56456 1.4411-0.78742 2.1691-0.84685 1.6491 0.49028 3.016-1.4114 0.65372-0.90627 0.832-2.5405 1.2777-3.64 3.7291 0.07429 1.1143 5.2445 5.9725 3.8628 0.78742-0.22286 0.92114-1.4114 2.0354-1.5154 0.84685-0.07429 1.6194 1.0251 2.4068 1.1737 0.19306 0.02974 0.37144 0.05937 0.54972 0.07429-0.0298-0.34169-0.0891-0.68342-0.17837-1.0549-0.936-3.952-5.3783-2.5108-1.3371-6.6114 2.7931-2.8228 5.72-4.368 6.5965-8.4239 0.46055-2.1097 0.31198-4.0263 0.34169-6.1211 0.0298-1.9017 0.89143-3.7588 0.87655-5.5862 0-3.9817-4.4125-5.0217-3.3577-9.4491z"/>
  <path id="Zunheboto" class="enabled" d="m111.23 123.37c-1.9017-0.95085-4.5314-1.2034-6.656-2.1097 1.4709-1.8126 1.144-3.8925 2.8823-5.8091 0.74286-0.81714 1.3223-1.3966 1.768-1.976 0.20799-4.5908 5.5714-16.937-0.83199-18.452-1.4708-0.34169-2.8971 0.04434-4.368-0.0891-0.17838-0.0011-0.37146-0.04434-0.54975-0.07429-0.80227-0.14858-1.5748-1.2629-2.4068-1.1737-1.1143 0.10403-1.248 1.2926-2.0354 1.5154-4.8583 1.3817-2.2434-3.7885-5.9725-3.8628-0.43085 1.0846-0.60913 2.7188-1.2777 3.64-1.3668 1.9017-0.84685 0.56456-3.016 1.4114-0.56455 0.22286-1.04 0.49026-1.4411 0.78742-1.768 1.2628-2.0057 3.1348-0.53487 5.4228 3.9223-1e-3 2.5851 4.8582 1.5451 7.0571-1.768 3.7291-3.4468 3.5954-7.1759 3.6994h-0.23769c-0.98057 2.3028 0.02984 5.7794-1.04 7.8891-0.46056 0.89142-1.8571 0.90628-2.4663 1.8274-0.68342 1.0251-0.78741 2.9863-0.59428 4.1897 0.49026 0.43086 0.68342 0.71314 1.0994 1.1588 2.0503 0.14858 3.8925 1.0846 5.8685 1.6937 0.46056 0.14857 0.93599 0.28227 1.4263 0.37145-0.98055-5.096 11.9-5.7497 14.946-4.056 1.3371 0.74285 2.08 2.08 3.4171 2.912 1.664 1.0251 1.976 0.71315 4.056 0.63886 1.3223-0.0443 2.9268 0.38628 4.2194 0.11887 0.44568-0.10402 0.832-0.28228 1.1886-0.47544 0.65371-0.35656 1.248-0.78743 2.1097-0.99542-1.1291-1.7383-2.0057-4.2937-3.9222-5.2594z"/>
 </g></a>
</svg>


				<h6>click on the map for details</h6>

				</div>

				<div class="col-lg-6  text-justify">
				<h1 class="shead-style text-center">NAGALAND</h1>
				<p>By whatever name people have called this realm, hidden among the mountains of India’s northeast. Nagaland has always evoked a sense of mysticism and awe, intensified by the remoteness of its geographical location. One of the most exquisite and interesting things to see is the Hornbill festival. It showcases the entire Naga culture within 1-10 December.</p><p>
				One of the major seven states of northeastern India, it is also a hub for adventure sports like mountaineering, trekking, bike riding and jeep riding. A very sparsely populated place this place is ideal for adventure junkies to hangout with.
				</p>
				<br>
				</div>
				</div>


    </div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
@endsection

@section('bottom')

@endsection
