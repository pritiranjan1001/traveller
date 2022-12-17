@extends('../layouts.travel')
@section('title', 'sikkim tourism')  
@section('head')


		<style type="text/css">
		path:hover{
			fill:#f18973;
		}
	/* scroll to top */
   
.slide:nth-child(1) .slide__bg {
  left: 0;
   background-image: url("../images/top-image/IMG_5278.jpg");
 
}


.slide:nth-child(2) .slide__bg {
  left: -50%;
   background-image: url("../images/top-image/0W1A9202-2.jpg");
}


.slide:nth-child(3) .slide__bg {
  left: -100%;
  background-image: url("../images/top-image/0W1A9242.jpg");
}

.slide:nth-child(4) .slide__bg {
  left: -150%;
 background-image: url("../images/top-image/sikkim-gurudangmar-lake.jpg");
}

.slide:nth-child(1) .slide__overlay-path {
  fill: #e99c7e;
}
.slide:nth-child(2) .slide__overlay-path {
  fill: #e1ccae;
}
.slide:nth-child(3) .slide__overlay-path {
  fill: #adc5cd;
}
.slide:nth-child(4) .slide__overlay-path {
  fill: #cbc6c3;
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
                            <h2 class="slide__text-heading">Kanchenjunga</h2>
                            <p class="slide__text-desc">Mount Kangchenjunga lies about 125 km (78 mi) east-south-east of Mount Everest. It is the second highest mountain of the Himalayas. Three of the five peaks – Main, Central and South – are on the border between North Sikkim and Nepal. Two peaks are in Nepal's Taplejung District.</p>
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
                            <h2 class="slide__text-heading">Gangtok</h2>
                            <p class="slide__text-desc">While Sikkim is full of stunning places to visit, its most prized possession is the amazing city of Gangtok. Capital of Sikkim, Gangtok is a hill resort and one of the most popular places in north-east India. It is known for its scenic beauty and striking views of Mount Kanchenjunga, the third highest peak in the world. Gangtok is nestled within higher Himalayan peaks with a year-round mild weather making it an excellent holiday spot.</p>
        
                        </div>
                    </div>
                </div>
                <div class="slide slide-2">
                    <div class="slide__bg"></div>
                    <div class="slide__content">
                        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                        <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                        </svg>
                        <div class="slide__text">
                        <h2 class="slide__text-heading">Mangan</h2>
                        <p class="slide__text-desc">Mangan is the capital of North Sikkim. It is 65 kilometers from Gangtok and lies at an altitude of 3950 ft. It is also known as the Cardamom Capital of the India and is the North District Administrative Headquarters.  The landscape is very mountainous with dense vegetation all the way up to Lachen & Lachung, before thinning out to desert scrub towards the alpine region. Numerous waterfalls astride the main road making the trip to this region extremely picturesque.</p>
             
                        </div>
                    </div>
                </div>
                <div class="slide slide-3">
                    <div class="slide__bg"></div>
                    <div class="slide__content">
                        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                        <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                        </svg>
                        <div class="slide__text">
                        <h2 class="slide__text-heading">Gurudongmar lake</h2>
                        <p class="slide__text-desc">Gurudongmar is a high altitude lake close to Tibet boarder in North Sikkim. It is the land of Yaks, blue ships and other high altitude animals of Sikkim and Tibet. The snow-fed milky water of the lake is one of the major sources of Tista, the most important river in Sikkim and North Bengal.</p>
                        <h6>Photo by Sudarshan Bhat</h6>
                        </div>
                    </div>
                </div>
        </div>
    </div>

<!--end of slide-->

    	<div class="container margin-top-box" style="max-width:1000px;">

  			<div class="col-lg-4 top-box text-center">

				<svg version="1.1" class="margin-top-box-1" viewBox="0 0 174.15109 230.43082" xmlns="http://www.w3.org/2000/svg">
 					<g transform="translate(-18.758 -34.374)" clip-rule="evenodd" fill-rule="evenodd" shape-rendering="geometricPrecision">
  					<a href="{{ url('/place-details/90') }}">
  						<path id="North sikkim" class="fil0 str0 enabled" style="stroke-width:.5;stroke:white;" fill="#a69d98" d="m108.34 199.9c1.1494-0.1425 4.061-2.6399 4.9812-3.4611 0.9808-0.8752 2.6407-2.7265 4.1232-2.1484 2.5911 1.0106 3.4916 2.1557 6.5543 2.0291 1.3045-0.0539 2.8194-0.2408 4.0517-0.6207 1.8907-0.5828 1.8303 1.1697 3.0746 1.1697l5.4579 0.6684c1.4431 0.1766 1.8093-0.871 3.5274-0.6684 2.8558 0.3367 3.9834-2.2258 6.1967-1.8858 2.7046 0.4154 2.9869 0.4525 5.0289-1.4562 2.9208-2.73 5.5915-3.3686 9.462-2.2439 0.7778 0.226 3.2202 1.0181 3.8849 0.4296 1.218-1.0782 1.6669-0.6693 4.0336-0.4069-0.714-1.1728-1.1096-2.8347-1.6625-4.069-0.1961-0.4379-0.7746-1.8734-0.7746-2.2917-0.0212-0.1124-0.0716-0.2031-0.0953-0.3103-0.5481-0.7075-0.5254-3.1394-0.4886-4.0343l0.1669-4.0462c0.0264-0.6423-0.1643-1.6012 0.0119-2.2081 0-1.1464-0.1299-2.4395 0.0357-3.5689 0.17471-1.1908-0.29229-1.5155-0.9652-2.4229-0.34219-0.4616-1.2215-1.3635-1.3228-1.8739-0.16299-0.8204-0.32899-1.8511-0.64349-2.6259-0.2727-1.0955 0.2555-1.2999 0.94139-2.041l3.0269-3.2705c0.6685-0.7223 0.8444-1.936 1.4777-2.6378 0.45591-0.5051 1.1004-2.1733 1.2274-2.8526 0.6198-0.9323 0.3752-3.1691 0.30979-4.2611-0.0651-1.0887 1.5932-2.5213 1.7756-3.6285 0.2569-0.0637 1.2363-0.7136 1.4658-0.8952 0.58931-0.46629 1.415-0.70269 2.0497-1.1339 0.909-0.5309 2.1298-3.2924 1.8828-4.3327-0.3299-1.389-0.89521-3.0347-0.0238-4.2969 0.6972-1.0101-0.2793-1.364-0.72689-2.1365-0.27721-0.5545-0.75021-1.2881-0.2503-1.9097 0.56549-0.7033 1.3497-1.2956 1.8471-2.0888 1.1506-1.8352 1.3635-3.9039 1.1679-6.0037-0.7525-1.3489-1.6565-2.8723-1.6565-4.4878 0-1.5429 0.6633-2.5723 0.91759-3.9747 0.1049-0.5785 0.0379-1.9526-0.1191-2.5303 0.10081-1.4537 0.0861-3.0011 1.3346-3.9389 0.49159-0.3693 3.1717-2.2211 3.2414-2.6855l0.3694-2.4588c0.0709-0.4726 0.30989-0.9211 0.30989-1.3845 0-3.0184-0.37879-7.6145-1.2275-10.539-0.5383-1.4396-1.9195-2.2784-2.8362-3.4852l-3.146-4.1417c-0.2364-0.3111-0.58739-0.4397-0.8342-0.7162-0.15069-0.1687 0.85191-2.1461 0.69121-2.6139 0.43109-1.7343 0.85129-3.6542 0.9057-5.4547 0.0455-1.5079-0.0712-3.8393-0.60781-5.2279-0.0879-0.7985-0.38659-1.5808-0.4171-2.3633-0.0305-0.7813 0.24881-1.59 0.39331-2.3513 0.2634-1.388 0.80619-2.1924-0.0953-3.3778-0.57411-0.755-1.5094-1.4415-1.9186-2.3395-0.38171-0.6844-1.5106-1.0356-2.0736-1.5994l-1.7041-1.7068c-1.0469-1.0485-1.7376-2.8812-2.9672-3.6643l-2.8482-1.8142c-0.7803-0.4969-2.4943-1.9097-3.3367-1.9097-2.5977-0.5217-5.0014-1.9028-7.5552-2.4707-1.8824-0.4185-4.8765-0.6639-6.7568-0.3223-1.8137 2.9031-2.4905 0.6855-2.9911-1.5397-0.2157-1.0935-1.6033-1.6383-2.4668-2.1723-0.3194-0.1976-2.4054-1.7998-2.4429-2.0649-0.1007-0.7118-0.2739-1.4674-0.5959-2.0888l-1.144-2.2081c-0.346-0.6677-3.1776-0.3382-3.3963 0.5371-0.1248 0.4992 0.9634 1.295 1.299 1.5278 0.4489 0.8978 0.9402 0.7824 0.1787 1.7665l-1.8471 2.3871c-0.3803 0.4915-1.04 0.2844-1.5372 0.5133l-2.3596 1.0861c-1.2672 0.5833-2.8331 0.1491-4.0517 0.6923-1.4524 0.6473-2.3924 1.8088-2.1092 3.4614-0.1068 1.699-0.6331 3.2931-1.0487 4.9175-0.51 1.9931-0.646 2.8049-3.0269 2.8049-3.3483 0-6.1515-4.5532-9.6645-1.5994l-3.3843 2.4708-2.9077 3.0436c-1.8854 1.9736-3.7092 2.6309-6.1253 3.5688-0.6143 0.3071-0.69 0.8839-0.9771 1.4681-0.2673 0.5437-1.4988 1.0613-2.0259 1.3607-1.5194 0.8629-3.2772 0.6502-4.7548-0.0597-0.6355-0.3052-1.6424-1.1482-2.3118-1.0265l-4.3973 0.7997c-0.4871 0.0886-1.2794 1.0728-1.6207 1.4442-1.1683 0.7323-2.6271 0.7804-3.6227 1.6233-1.6633 1.408-2.6122 0.931-4.6714 0.931-0.113 0.2261-1.6851 1.6015-1.9782 1.7188-0.6491 0.26-1.586-0.1251-2.0378 0.4774-0.7464 0.9951-2.007 3.0669-3.4081 2.4468-1.0465-0.4632-0.7389-1.0048-1.4539-1.5158l-0.3575-0.5729c-1.2378-0.9019-2.0747-2.7162-3.9445-1.4204-1.4799 1.0257-3.527-0.4003-3.6107 1.7426-0.01339 0.3449-0.3037 2.5782-0.5482 2.5782-0.0354 0.1071-3.9835-1.6582-6.3874-2.8169-2.0424-0.9844-3.988-1.1908-5.732 0.2865-0.5704 0.916-0.3933 1.4157-0.2979 2.411 0.06 0.6254 0.4039 1.3062 0.2503 1.9217-0.3187 1.2774-1.4426 2.4577-2.0378 3.6523-0.4002 0.803-0.1633 1.4616-0.0834 2.2917 0.72 0.9627 1.3456 2.3258 2.0258 3.3659 0.6524 0.9977-6e-3 1.6035 0.0834 2.6259l10.546 5.1921 1.287 2.6497-4.7906 4.3924 2.3119 3.7478 0.9057 2.2678 0.02381 0.8594-1.287 1.0026-1.8829 1.862-0.4528 6.4692c-0.9355 0.1872-2.5409 0.0145-3.1937 0.6684-0.7402 0.74161-0.4689 2.9184-0.6912 4.0104-0.7013 3.4468-0.6422 10.138-3.1339 12.783-0.5656 0.60051-1.2801 1.0356-1.859 1.6591l-1.5849 1.7068c-1.2989 1.353-0.0834 4.0159-0.0834 5.5979-0.3839 0.0952-1.3349 0.8537-2.3669 1.7766l0.046-0.0411 2.9045-0.3749c0.7893-0.3019 1.6171-1.1306 2.288-1.671 0.6948-0.5595 2.9728-0.2332 4.0041-0.6922 0.6543-0.2913 0.4216-2.5639 0.858-3.2705 1.0664-1.7262 4.0502-1.8105 5.8392-2.3632 0.9878-0.3052 5.0712 2.9998 5.6725 3.8433l4.1232 4.6072c0.4231 0.4727 0.8844 1.48 1.5968 1.48 2.4493 0 4.3922 2.9622 6.2445 4.5357 1.6674 1.4163 2.5866 3.5659 4.5284 4.6788 1.9489-1.0445 4.1336-0.909 6.173-1.3367 2.3236-0.4872 3.3135-0.7575 5.5294 0.0955 2.3282 0.8963 6.066-0.4997 7.5075 1.5994 1.4896 2.169 2.2837 3.0316 5.2673 3.0316 0.219 0.8796-0.3337 1.9166-0.3337 2.8646 0 1.7798-0.8936 1.2401-1.1202 2.1484-0.3855 0.1285 0.3294 1.2758-0.3575 1.5517-0.01849 0.0931-0.5113 0.6564-0.5958 0.6684-0.1462 0.8796-4.512 6.3519-4.8621 6.6601-0.8059 0.7096 0.1664 2.4387 0.429 3.2942 0.3188 1.0387 0.7375 1.8636 0.9057 2.9601 0.2546 1.6601 0.4604 2.9238 1.2632 4.4401 0.7838 1.4802 0.4766 2.6306 0.4766 4.3207-0.4615 3.935-4.5769 8.6071-1.6921 12.461 1.8636 2.4895 4.9359 0.629 7.1739-0.382 1.2583-0.5685 2.6984-1.1059 4.0993-1.0503 1.5948 0.0632 1.8677 0.7002 2.9316 1.5516z" image-rendering="optimizeQuality"/></a>
  					<a href="place-details/91">
 						<path id="West Sikkim" class="fil0 str0 enabled" style="stroke-width:.5;stroke:white;" fill="#e9a0a0" d="m37.482 144.24 2.9045-0.3749c0.7893-0.3019 1.6171-1.1306 2.288-1.671 0.6948-0.55949 2.9728-0.23319 4.0041-0.6922 0.6543-0.2913 0.4216-2.5639 0.858-3.2705 1.0664-1.7262 4.0502-1.8105 5.8392-2.3632 0.9878-0.3052 5.0712 2.9998 5.6725 3.8433l4.1232 4.6072c0.4231 0.47269 0.8844 1.48 1.5968 1.48 2.4493 0 4.3922 2.9622 6.2445 4.5357 1.6674 1.4163 2.5866 3.5659 4.5284 4.6788l-0.2145 0.549c-0.4785 0.2994-0.8213 0.7747-1.3347 1.0026-0.4049 0.1798-0.6978 0.4572-1.0725 0.71621-0.8214 0.56789-1.4301 1.5916-1.4301 2.602 0 0.599 0.0814 1.7031-0.3098 2.1484-0.4752 1.0732-1.8507 3.2214-1.573 4.3924 0.1926 0.8119 1.544 2.5891 2.288 2.984 1.8485 0.9811 3.0206 3.6528 1.5492 5.4666-0.902 1.1118-0.6912 3.4332-0.6912 4.9175 0 1.1142 0.2957 2.7748 0 3.7956 0 1.6931-0.3592 4.9144 0.5244 6.3021 1.4028 2.2028-0.0715 2.7094-0.0715 4.8221 0 0.9114 1.2768 2.2812 2.0973 1.5277 1.8425-1.6919 1.1679-2.1451 1.1679-4.3207 1.0827 0 1.3531 0.8366 2.2403 0.9549 1.1107 0.148 2.3551-0.1728 3.4321 0.0477 1.8225 0.3731 2.034 3.096 1.5253 4.7504-0.6739 2.1912-0.5773 1.8556-2.5025 2.3156-1.0174 0.2431-1.383 0.5703-2.0259 1.3368-1.9076 1.9122-0.2065 3.7583-3.3843 5.3472-1.4208 0.7103-4.8949 2.2759-3.5036 4.3685 0.6992 1.0518 2.3834 1.965 2.3834 3.3659 0 3.0353-1.9459 2.3919-4.0041 3.3659-1.1945 0.5653-2.3465 1.4062-2.4787 2.8169 0 1.999 3.6029 3.2318 4.7906 4.5595 1.5971 1.7856-0.7173 4.5899 0.2383 6.9227 0.4735 1.1559 2.2059 1.7407 3.0507 2.6736 0.9897 1.0927 2.2586 4.5988 1.8591 6.1112-0.4908 1.308-1.22 0.9787-2.4787 0.9787-1.0873 0-2.4313 1.9158-3.1223 2.6975-1.7526 1.983-2.6699 4.6305-4.5045 6.5408l-0.5108 2.6719c-0.4575 0.1692-0.917 0.4292-1.3343 0.5769-2.1692 0.7676-4.2231 1.9462-6.6734 1.5516-1.9175-0.3088-1.7712-2.9808-3.9087-3.1272-0.5797-0.0397-1.16-0.0796-1.7399-0.1193-2.6371-0.1807-4.9925-0.8278-6.4589 1.8858-0.9836 1.8203-2.3542 3.0131-4.5045 2.4827-1.4782-0.3646-1.4077-1.5163-3.1699-1.7426-1.3628-0.175-1.4791-0.8499-2.5026-1.4801-1.0649-0.6557-2.9912-0.5376-3.861-1.4084-0.4914-0.492-1.0292-0.6545-1.287-1.3846-0.2293-0.6494-0.5017-1.4044-0.429-2.1245 0.088-0.8714 0.1392-1.998 0.0531-2.8453-9e-3 -0.0939-0.8551-1.6156-1.0472-1.904-0.7306-1.0964-0.9996-1.6099-0.9996-3.1416 0-0.5635 0.7578-3.2746 0.2856-3.4748-0.0919-0.039-0.6653-0.4885-0.8092-0.714-0.6023-0.9432-0.3189-1.7235-1.4756-2.2372-0.6571-0.2918-1.5714 0.2691-2.1896-0.0952-1.0516-0.6198-1.5474-1.7236-2.8084-2.0468-0.9714-0.2489-3.0957 0.8192-3.8499 1.322l-7e-3 -1.1219 0.0239-3.3659c7e-3 -0.9511 0.4902-1.8448 0.8103-2.7094 0.629-1.6991 1.6939-3.1919 2.3119-4.8579 0-2.8421 0.9069-5.7634 1.3466-8.4983 0.1098-0.6829 0.4598-1.3228 0.5243-1.9933 0.7022-1.5173 1.6593-2.9898 2.4072-4.452l1.9782-3.8672c0.4799-0.9382 0.1193-1.5154-0.2264-2.423 0-0.7516-0.6161-1.0737-0.7627-1.5874-0.3398-0.0428-1.8991-1.4763-2.0735-1.7904-0.4011-0.722-0.2666-1.7278-0.1073-2.5065l1.0725-5.2399c0-2.1218 1.0782-2.6099 2.443-3.8791 1.3061-1.2148 2.0361-1.6501 1.4538-3.5449-0.2714-0.8829-0.2328-2.5563-0.7746-3.2704-0.2596-1.5624-1.0954-2.5588-1.9067-3.8792-0.728-1.1847-1.8171-2.2792-1.8828-3.7359-0.0511-1.1339 0.514-1.6554 0.9057-2.59 0.5497-0.8816 1.6281-1.8896 1.8113-2.9004 0.1316-0.7258 0.0815-1.7063 0.4767-2.3275 0.4122-0.6477 0.3271-0.6968 0.143-1.3965-0.1755-0.6668-0.3909-1.6396-0.7389-2.2559-0.4701-0.8352 0.8374-0.8257 1.2751-1.5278 0.5327-0.62551 0.8819-1.2542 0.8819-2.1007 0-0.5125 1.0933-0.4254 1.43-0.728 1.1683-1.0496 0.2887-3.527 0.5482-4.8937 0.2246-1.1835 1.183-1.6872 1.859-2.5543 0.4678-0.6003 2.0343-2.1744 3.4485-3.4393z" image-rendering="optimizeQuality"/></a>
  					<a href="place-details/92">
  						<path id="South Sikkim" class="fil0 str0 enabled" style="stroke-width:0.5;stroke:white;" fill="#e7de69" d="m75.541 155.02c1.9489-1.0445 4.1336-0.909 6.173-1.3367 2.3236-0.4872 3.3135-0.7575 5.5294 0.0955 2.3282 0.8963 6.066-0.4997 7.5075 1.5994 1.4896 2.169 2.2837 3.0316 5.2673 3.0316 0.21899 0.8796-0.3337 1.9166-0.3337 2.8646 0 1.7798-0.8936 1.2401-1.1202 2.1484-0.3855 0.1285 0.3294 1.2758-0.3575 1.5517-0.0185 0.0931-0.5113 0.6564-0.5958 0.6684-0.1462 0.8796-4.512 6.3519-4.8621 6.6601-0.8059 0.7096 0.1664 2.4387 0.429 3.2942 0.3188 1.0387 0.7375 1.8636 0.9057 2.9601 0.2546 1.6601 0.4604 2.9238 1.2632 4.4401 0.7838 1.4802 0.4766 2.6306 0.4766 4.3207-0.4615 3.935-4.5769 8.6071-1.6921 12.461 1.8636 2.4895 4.9359 0.629 7.1739-0.382 1.2583-0.5685 2.6984-1.1059 4.0993-1.0503 1.5948 0.0632 1.8677 0.7002 2.9316 1.5516-0.38139 0.5631-0.871 1.0375-1.1679 1.671-0.7874 1.6799 0.33371 3.8544 0.33371 5.562 2.2819 4.1427-4.7548 4.7242-6.0299 7.2808-0.9655 1.9357-1.5217 4.8018-1.8828 6.9705-0.6264 3.763 0.7734 3.4243 2.9315 5.5859 1.1811 1.5056 3.9183 2.5343 5.6247 3.3897 2.2842 1.145 0.38131 6 0.38131 8.1163 0 3.4676 4.4148 5.0657 6.9681 6.1983-0.8063 1.0709 1.7723 2.7347 0.86201 3.6467-0.5324 0.5332-0.42581 1.9869-2.11 2.8314-1.1982 0.6009-3.0735 1.1031-3.3962 2.1484-0.2579 0.8351-1.2273 2.2799-2.4073 2.3515-1.1326 0.0687-0.941-0.2412-2.6546 0.4371-0.8949 0.3542-0.6512-0.0649-1.2898 1.4129-2.4516 5.673-1.3493 5.9197-5.9823 6.5647-0.3484 0.0485-0.4591 0.3371-0.4447 0.7415-0.8745-5e-3 -3.4539-1.8624-4.2604-2.3626-0.9156-0.5679-2.3644-0.1917-3.575-0.74-1.5117-0.6847-3.2473-1.253-4.9097-0.74-2.2135 0.6829-2.9487-1.7563-4.0994-2.5065-0.3415-0.2227-0.6833-0.4457-1.0249-0.6684-0.864-0.5635-0.6641 1.1227-1.2632 0.9071-0.8767-0.3156-1.0906 0.2138-1.8828 0.1671-0.3956-0.0228-0.143-1.608-0.143-1.8859 0-0.7806-0.3569-1.2335-1.1202-1.4323-0.0982-0.0255-0.3328-0.6325-0.4052-0.7639-0.2163-0.3926-2.3745-0.8503-3.003-0.2864-0.3151 0.2827-1.0032-0.3149-1.3824-0.3581-0.5578-0.0637-1.3555 0.4479-1.7875-0.0716-0.5044-0.6067-1.1208-0.5435-1.7403-0.3143l0.5108-2.6719c1.8346-1.9103 2.7519-4.5578 4.5045-6.5408 0.691-0.7817 2.035-2.6975 3.1223-2.6975 1.2587 0 1.9879 0.3293 2.4787-0.9787 0.3995-1.5124-0.8694-5.0185-1.8591-6.1112-0.8448-0.9329-2.5772-1.5177-3.0507-2.6736-0.9556-2.3328 1.3588-5.1371-0.2383-6.9227-1.1877-1.3277-4.7906-2.5605-4.7906-4.5595 0.1322-1.4107 1.2842-2.2516 2.4787-2.8169 2.0582-0.974 4.0041-0.3306 4.0041-3.3659 0-1.4009-1.6842-2.3141-2.3834-3.3659-1.3913-2.0926 2.0828-3.6582 3.5036-4.3685 3.1778-1.5889 1.4767-3.435 3.3843-5.3472 0.6429-0.7665 1.0085-1.0937 2.0259-1.3368 1.9252-0.46 1.8286-0.1244 2.5025-2.3156 0.5087-1.6544 0.2972-4.3773-1.5253-4.7504-1.077-0.2205-2.3214 0.1003-3.4321-0.0477-0.8872-0.1183-1.1576-0.9549-2.2403-0.9549 0 2.1756 0.6746 2.6288-1.1679 4.3207-0.8205 0.7535-2.0973-0.6163-2.0973-1.5277 0-2.1127 1.4743-2.6193 0.0715-4.8221-0.8836-1.3877-0.5244-4.609-0.5244-6.3021 0.2957-1.0208 0-2.6814 0-3.7956 0-1.4843-0.2108-3.8057 0.6912-4.9175 1.4714-1.8138 0.2993-4.4855-1.5492-5.4666-0.744-0.3949-2.0954-2.1721-2.288-2.984-0.2777-1.171 1.0978-3.3192 1.573-4.3924 0.3912-0.4453 0.3098-1.5494 0.3098-2.1484 0-1.0104 0.6087-2.0341 1.4301-2.602 0.3747-0.259 0.6676-0.5364 1.0725-0.7162 0.5134-0.2279 0.8562-0.7032 1.3347-1.0026z" image-rendering="optimizeQuality"/></a>
  					<a href="place-details/93">
  						<path id="East Sikkim" class="fil0 str0 enabled " style="stroke-width:.5;stroke:white;" fill="#85c5e3" d="m108.34 199.9c-0.3814 0.5631-0.87101 1.0375-1.1679 1.671-0.7874 1.6799 0.3337 3.8544 0.3337 5.562 2.2819 4.1427-4.7548 4.7242-6.0299 7.2808-0.9655 1.9357-1.5217 4.8018-1.8828 6.9705-0.6264 3.763 0.77339 3.4243 2.9315 5.5859 1.1811 1.5056 3.9183 2.5343 5.6247 3.3897 2.2842 1.145 0.38131 6 0.38131 8.1163 0 3.4676 4.4148 5.0657 6.9681 6.1983 0.19031-0.2527 0.5692-0.4725 1.2272-0.6415 1.0854-0.3273 1.8168 0.5641 2.203-0.3486 0.7437-1.7577 1.9324-1.5232 3.0464-1.5232 1.1657 0 2.9616-0.9342 4.2364-1.2376 1.1444-0.2723 2.5742 0.4285 3.6613-0.0705 0.6872 0.4587 1.3914 2.0396 2.2053 2.2309 1.5036 0.3533 2.4652-0.4577 3.8611 0.7401 0.9924 0.8517 1.6162 3.1941 3.0745 3.4852 3.2979 0.3779 3.3623-1.8041 5.9584-2.7691 3.8272-1.4225 7.1954 1.3228 8.3895 4.7027 0.5502 1.5572 0.2412 3.2331 1.9782 4.2014 2.1356 1.1904 4.6718-0.987 6.6088-1.6331-0.422-0.4227-0.612-1.0176-0.4243-1.8521 0.7279-1.0926 1.2513-4.0293 2.3596-4.5953 1.0463-0.5342 3.8053-1.6606 4.1589-2.8169 0.246-0.8047 0.9773-1.8671 1.001-2.7094 0.8297-2.1533 1.1725-4.1997 1.2394-6.505 0.0573-1.9771 0.4483-2.449 1.6802-3.7956 1.7115-1.5203 5.2009-1.995 7.3646-2.6856 2.3073-0.7363 4.4553 0.8155 6.7449-0.2983l3.7538-1.8262c0.7942-0.896 1.2004-1.4605 1.2393-2.6736 0.0265-0.8248-0.0192-1.7358 0.1669-2.5304 0.3465-1.4795 1.0863-3.3478 1.6802-4.7386l-0.037-1.6444c-0.1175 5e-3 -0.2324 1e-3 -0.3443-0.0146l-6.1491-3.7837c-0.0911-0.9211-1.6859-3.7149-2.5144-4.1298 0-0.1591-2.1043-1.2124-2.3118-1.7187-0.3851-0.9399-0.4701-1.6877-1.2513-2.4707-1.6458-1.6493-4.0812 0.1835-5.6843-2.0411-0.8612-1.1952-2.5439-2.1188-3.2056-3.3658-0.9924-0.9944-1.6026-2.7935-2.4668-3.9627-0.0812-0.1098-0.1585-0.226-0.2323-0.3473-2.3667-0.2624-2.8156-0.6713-4.0336 0.4069-0.6647 0.5885-3.1071-0.2036-3.8849-0.4296-3.8705-1.1247-6.5412-0.4861-9.462 2.2439-2.042 1.9087-2.3243 1.8716-5.0289 1.4562-2.2133-0.34-3.3409 2.2225-6.1967 1.8858-1.7181-0.2026-2.0843 0.845-3.5274 0.6684l-5.4579-0.6684c-1.2443 0-1.1839-1.7525-3.0746-1.1697-1.2323 0.3799-2.7472 0.5668-4.0517 0.6207-3.0627 0.1266-3.9632-1.0185-6.5543-2.0291-1.4825-0.5781-3.1424 1.2732-4.1232 2.1484-0.9202 0.8212-3.8318 3.3186-4.9812 3.4611z" image-rendering="optimizeQuality"/></a>
 					</g>
          <image style="overflow:visible;" width="272" height="272" xlink:href="{{ asset('/images/map-locator.png') }}"  transform="matrix(5.003376e-02 0 0 5.003376e-02 100.9299 127.8524)">
          </image>
          <text transform="matrix(1 0 0 1 99.3357 153.3809)" font-size="6.35" class="st4 st5">Mangan</text>
          <image style="overflow:visible;" width="272" height="272" xlink:href="{{ asset('/images/map-locator.png') }}"  transform="matrix(5.003376e-02 0 0 5.003376e-02 122.6155 166.8382)">
          </image>
          <image style="overflow:visible;" width="272" height="272" xlink:href="{{ asset('/images/map-locator.png') }}"  transform="matrix(5.003376e-02 0 0 5.003376e-02 66.452 190.4473)">
          </image>
          <image style="overflow:visible;" width="272" height="272" xlink:href="{{ asset('/images/map-locator.png') }}"  transform="matrix(5.003376e-02 0 0 5.003376e-02 25.7703 149.5763)">
          </image>
          <text transform="matrix(1 0 0 1 25 171)" font-size="6.35" class="st4 st5">Pelling</text>
          <text transform="matrix(1 0 0 1 65 214)" font-size="6.35" class="st4 st5">Namchi</text>
          <text transform="matrix(1 0 0 1 119 188)" font-size="6.35" class="st4 st5">Gangtak</text>

				</svg>
			      
				  <h6 class="text-de-ls text-center">click on the map for details</h6><br>
       
            <div class="row">
              <div class="col-sm-1" style="height:20px;background-color:#a69d98;float: left;"></div>
              <div class="col-sm-10 text-left"> North Sikkim</div>
              <div class="col-sm-1" style="height:20px;background-color:#85c5e3;float: left;"></div>
              <div class="col-sm-10 text-left"> East Sikkim</div>
              <div class="col-sm-1" style="height:20px;background-color:#e7de69;float: left;"></div>
              <div class="col-sm-10 text-left"> South Sikkim</div>
              <div class="col-sm-1" style="height:20px;background-color:#e9a0a0;float: left;"></div>
              <div class="col-sm-10 text-left"> West Sikkim</div>
            
              </div>

				</div>

				<div class="col-lg-6">
				<h1 class="shead-style text-center">SIKKIM</h1>
				<p>Sikkim should be a part of everybody’s life. In other words everybody in their lifetime should at least once visit Sikkim. This is a place that provides everything a traveler wants. So such an opportunity should not be missed. </p>
				<h6>Districts:</h6>
				<h5><b>North sikkim</b></h5>
				
				<p class="more">
				if you want a place full of wilderness and list bit of people around you, north Sikkim is the perfect place for you . North Sikkim offers all the beautiful wilderness with the snow caped mountains and the valley of flowers. It is the place for solitude. The view of the snow filled mountains takes your soul to a place where u find peace. It is the place that is least populated in Sikkim and the has the best air u will ever breath.<br>
			
				<b>Places to visit –</b>
				<br>Yumthang meadow,
				<br>zero point
				<br>Yumthang hot baths
				<br>Shingba rhododendron sanctuary(starts on the way to Yumthang)
				<br>Lachung
				<br>Lachen
				<br>Gurudongmar lake
				<br>Kanchenjunga national park
				<br>crow’s lake, Cholamu lake
				<br>Thangu valley(gateway for Gurudongmar lake)
				<br>Chungthang (one of the main towns of north Sikkim)
				<br>Chopta valley(usually not accessible but can be reached from Lachen via Thangu)
				
		
				</p>

				<h5><b>South sikkim</b></h5>
				<p><span class="more">
				If you are going to find someplace that is not really like Sikkim but it is in Sikkim then you have to visit South Sikkim. With all its wilderness and lush vegetation south Sikkim provides its experience as a true land of Sikkim but it also provides some of the best places like tea gardens and the statue of Rinpoche.
				<br>
				<b>Places to visit –</b>
				<br>Namchi<br>Rabongla<br>Borong<br>Char dham<br>statue of Rinpoche<br>Tendong hill<br>Temi tea garden<br>Maenam wildlife sanctuary<br>Ralang monastery<br>Buddha park<br> Sai mandir<br> Ralong hot spring<br>Doling monastery<br> Rayong  sunrise viewpoint<br>Tumlong monastery
				</span></p>
				<h5><b>East sikkim</b></h5>
				<p><span class="more">
				East Sikkim is the Centre of Sikkim. It’s the place where you find the best places to stay and to visit some of the best places in Sikkim. Full of monasteries and viewpoints east Sikkim serves as the host for an unforgettable adventure.
				<br>
				<b>Places to visit –</b>
				<br>Nathula pass<br>Changu lake(Tsongmo lake)<br> Gangtok<br> Ganesh tok<br>Hanuman tok<br>Banjhakari waterfalls<br> Baba dham<br> Himalayan zoological park<br> Namgyal institute of Tibetology<br>Tashi view point<br> Flower exhibition centre<br> Do Drul chorten(stupa), Enkey monastery<br> seven sisters waterfalls<br>  Gangtok ropeway<br> Zuluk wildlife area<br> Gonjang monastery<br>Rumtek monastery<br> Saramsa garden<br> water garden<br> Fambong la wildlife sanctuary<br> Aritar lake<br> Tukla valley
				</span></p>
				<h5><b>West sikkim</b></h5>
				<p><span class="more">
				West Sikkim is the place where you find the mighty Kanchenjunga. It is the place where you find the true alpine environment, the best trekking routes and the true experience of what Himalaya is. 
				<br>
				<b>Places to visit –</b>
				<br>Pelling<br>Geyzing<br> Pemayangste monastery<br> Yuksom<br> Rabdentse ruins<br> legship<br> Barsey rhododendron sanctuary<br> Yangtey<br> Goecha la pass<br> Kanchenjunga national park<br>Biksthang, Tashiding monastery<br>Dubdi monastery<br> Sangacheling monastery <br> Khechelopalri lake<br>kasturi trek<br> Kanchenjunga falls<br> Singshore bridge<br> coronation throne of Norbugang<br> Rimbi waterfalls<br> Kartok lakes<br>  Darap village
				</span></p>
				<br>
        <div class="w3-padding-32"></div>
				</div>

				</div>


    </div>


<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
@endsection

@section('bottom')

@endsection
