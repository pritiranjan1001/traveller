@extends('../layouts.travel')
@section('title', 'kerela tourism')  
@section('head')


  <style type="text/css">
    path:hover{
      fill:#f18973;
    }
  /* scroll to top */
   
.slide:nth-child(1) .slide__bg {
  left: 0;
   background-image: url("../images/top-image/kerela-tea-gargen-munnar.jpg");
}


.slide:nth-child(2) .slide__bg {
  left: -50%;
     background-image: url("../images/top-image/kerela-water-kerela.jpg");
}


.slide:nth-child(3) .slide__bg {
  left: -100%;
  background-image: url("../images/top-image/kerela-Kovalam,.jpg");
}

.slide:nth-child(4) .slide__bg {
  left: -150%;
 background-image: url("../images/top-image/kerela-Alappuzha.jpg");
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
                            <h2 class="slide__text-heading">munnar</h2>
                            <p class="slide__text-desc">Munnar is such a beautiful place in Kerala, which cannot be portrayed in a single canvas. Everything and anything here will make us excited. The hills, the mist, the valleys, the streams, the waterfalls, tea plantations, rare flora and fauna.... It is a beautiful tea town in Idukki district of Kerala easily accessible from Kochi and Coimbatore. The gorgeous hill station is ideally placed in the South Western Ghats of India. With an area of around 557 sq km, Munnar in Devikulam Taluk is the largest panchayat in Kerala.</p>
                            <h6>Photo by Vivek Kumar</h6>
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
                            <h2 class="slide__text-heading">Backwaters Kerela</h2>
                            <p class="slide__text-desc">The scenic backwaters of Kerala comprise serene stretches of lakes, canals and lagoons located parallel to the coast of the Arabian Sea. The backwater regions of Kerala are one of the most popular tourist destinations in the world. The tranquil backwater cruises are a once in a lifetime experience. Alappuzha, known as the 'Venice of the East', is especially popular for its houseboat cruises where you can soak in nature at its finest form.</p>
                            <h6>Photo by Sholto Ramsay</h6>
        
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
                        <h2 class="slide__text-heading">Kovalam</h2>
                        <p class="slide__text-desc">Kovalam is an internationally renowned beach with three adjacent crescent beaches. It has been a favourite haunt of tourists since the 1930s. A massive rocky promontory on the beach has created a beautiful bay of calm waters ideal for sea bathing.</p>
                        <h6>Photo by Anfal Shamsudeen</h6>
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
                        <h2 class="slide__text-heading">Alappuzha</h2>
                        <p class="slide__text-desc">Referred to as the Venice of the East, Alappuzha has always enjoyed an important place in the maritime history of Kerala. Today, it is famous for its boat races, backwater holidays, beaches, marine products and coir industry. Alappuzha Beach is a popular picnic spot. The pier, which extends out to the sea here, is over 137 years old. Entertainment facilities at the Vijaya Beach Park add to the attraction of the beach. There is also an old lighthouse nearby which greatly intrigues all visitors.</p>
                        <h6>Photo by kyran low</h6>
                        </div>
                    </div>
                </div>
        </div>
    </div>

<!--end of slide-->



 
    	<div class="container margin-top-box w3-padding-32" style="max-width:1000px;">

  			<div class="col-lg-4 top-box text-center">

  			<svg version="1.1" viewBox="0 0 113.49637 220.74127" xmlns="http://www.w3.org/2000/svg">
 <g transform="translate(-46.905 -29.013)" fill="#85c5e3" stroke="#fff" stroke-width=".5">
  <a href="place-details/49">
  <path id="Kottayam"  class="enabled"  stroke="#fff" fill="#85c5e3" d="m111.38 180.46c0.2689 6.5289 0.2689 6.5289 2.3914 5.7988 4.0606 2.5452 2.5592 4.166-2.7978 1.7804 0.22911 1.1716 0.58204 0.74955 1.3546 1.5051 0.9763 0.95934 1.9441 2.4111 2.6403 3.5996 0.42448 0.73014 0.56034 1.664 1.3923 1.9526 0.60275 0.2121 2.012-0.10171 2.6912-0.12738 1.8507-0.068 3.0393-0.78107 2.6742-2.7252 1.6555-0.0764 4.6863-0.56031 6.0786 0.36505 0.93386 0.61125 1.0527 1.664 2.1734 1.9526 0.83199 0.22077 2.5554 0.15274 2.3601-1.0442 0.63673-0.0764 1.7658 0 2.3346 0.22909 0.95087 0.39901 0.79804 0.5943 0.84899 1.647 1.0612 0.0423 2.0035-0.26312 3.0478-0.2121-0.29713-1.1801 0.39052-2.7337-0.2291-3.6081-0.65371-0.9254-2.0375-0.84049-2.4365-2.0121-0.29714-0.87442 0.21208-2.3601 0.22909-3.294 0.016-1.0527 0.21242-2.4365 0-3.4722-0.20375-0.99331-1.6725-2.3601-2.8441-2.1564-0.29712-0.47543-0.085-1.0103-0.31412-1.5027-0.34809-0.75558-0.5688-0.38202-0.97632-0.81499-0.62822-0.66218-0.79803-2.3601-2.2158-2.1479-0.18674-0.35659-0.42447-0.74711-0.65371-1.0612-2.1309 0.67068-4.4231-0.42447-6.2484-1.0272-0.13573 0.36504-0.34807 0.60278-0.35658 1.0272-1.7064 0.0764-3.5826 0.4839-4.1345-1.2395-0.98481-0.11038-2.3092-8.7e-4 -3.294 0.11038-0.89991 0.11038-2.063 0.36505-2.9374 0.6367-1.3159 0.4075-0.6452 1.2819-1.7404 1.8168-0.38202 0.18675-0.1476 1.1212 0.88955 2.0943l0.0725 1.9295z"/></a>
  <a href="place-details/50">
  <path id="Alappuzha" fill="#e7de69" stroke="#fff" class="enabled" d="m108.75 197.4c0.37355 0.86593 0.4392 1.9456 0.84669 2.7946 0.29714 0.61975 0.71387 1.0991 1.444 2.5591 0.56959 1.7086 0.15145 1.3376 1.0227 2.7789 0.68593 1.1344 2.2847 6.4944 2.2847 6.4944 0.5603-0.2461-1.393-5.6249-0.81578-5.8456 0.42447-0.16975 0.78896 3.3884 1.205 3.2016 0.42447-0.18675 0.7207 0.13027 1.1112 0.44443 0.39054 0.31414 0.96162 1.1214 1.4795 1.2233 0.37357 0.068 0.45847-0.14439 0.68769-0.36506 0.53484-0.5009 1.1121-0.75558 1.7828-1.0103 1.0357-0.39054 2.428-0.40751 3.5062-0.25477 0.12739 0.016 0.27177 0 0.4075 0-0.11038-8.4e-4 -0.13573-1.1291-0.10204-1.248 0.10204-0.36506 0.33959-0.6452 0.33959-1.0612 0-0.25476-0.0424-0.5688-0.16975-0.798-0.14439-0.28011-0.33957-0.46692-0.53482-0.70466-0.20376-0.2461-0.35659-0.5688-0.54336-0.84047 3.3025-1.7064 1.3329-5.1278-1.7234-5.2721-1.197-0.0594-2.6488 0.19509-3.7864-0.28011-1.4942-0.63671-0.71313-3.7609-1.4517-5.0344-4.1318-5.8058-4.7674-6.1405-6.4937-10.256 0.24611-1.5197 1.6715-3.8281 0.49994-5.0846-1.3499-1.4517-1.5315-2.1398-2.572-6.7282-1.1544-2.7232-1.2833-3.459-3.2519-6.2185 0.64277 4.3914 0.82315 5.2482 1.7104 8.4121 0.86349 3.6508 0.89876 4.4713 1.0955 8.0195 0.19604 3.8164 0.14953 4.7505 0.51961 7.9118 1.6881 3.9526 1.7845 4.135 1.5017 7.1624z"/></a>
  <a href="place-details/50">
  <path id="Kollam" fill="#e7de69" stroke="#fff" class="enabled" d="m152.82 220.82c-1.9526-0.36506-5.9427-6.4691-2.9204-6.97-1.4178-0.61974-13.6-7.3011-13.991-6.155-0.11873 0.34808-0.13573 1.0612-0.034 1.4178 0.78956 0.1784 1.3499 0.7216 1.1801 1.5281-1.6895 0.32261-3.3874-0.56033-5.0768-0.52638-1.9441 0.0423-3.8204 0.28012-5.705 0.78956-1.4517 0.39052-2.3262 0.051-2.5639-1.4857h-0.4075c-0.72163 0-1.3838-0.11038-2.1054 0.016-0.66221 0.11038-1.3159 0.31412-1.9356 0.57727-0.56035 0.24611-1.0357 0.62823-1.5791 0.89991-0.41598 0.20374-0.6367 0.0764-0.91689-0.26312-0.24609-0.30578-0.52635-0.86593-0.95082-0.92536-0.22076-0.034-0.54334 0.068-0.78106 0.0764-0.75558 0.034 0 0 0.19476 1.4285-0.6109 2.1966 1.2144 4.4123 0.76444 5.2868 6.7042-5.2026 6.6974 2.1475 1.613 2.3856 0.98161 2.6207 0.59319 3.3393 4.0789 2.712 1.4525 0.28205 1.1338 1.83-0.70851 1.4224l0.76409 3.2006c1.2565-0.33111 1.4263-1.664 2.8865-1.8677 1.1886-0.16138 2.3941 0.15274 3.5062 0.51787-0.11873-0.84896-0.15274-1.7658-0.0764-2.7082 1.3923-0.0934 2.6997 0.051 2.9459 1.7149 2.5639 0.12739 2.6403 2.5044 4.8052 2.6912 3.3958 0.29713 2.0205-0.29712 2.878-2.8695 2.1649-0.034 4.3892 0.25477 6.3333 1.2565 1.2819 0.66218 2.2073 3.2006 3.7524 3.2346-0.1444 0-0.28877-8.4e-4 -0.42447-8.4e-4 0.22909 0.1444 0.45845 0.29713 0.68765 0.44995 0.73861-1.3329 2.3516-2.8016 3.3704-2.861 0.67918-1.5112 0.58577-3.3874 0.416-4.9664z"/></a>
  <a href="place-details/50">
  <path id="Thiruananthapuram" stroke="#fff" fill="#e7de69" class="enabled" d="m148.79 228.2c-1.197-0.034-2.2497-1.9441-3.0053-2.6573-1.7234-1.664-4.8222-1.8677-7.0804-1.8338-0.85746 2.5724 0.51788 3.1582-2.878 2.8695-2.1649-0.18674-2.2413-2.5724-4.8052-2.6912-0.25478-1.664-1.5536-1.8083-2.9459-1.7149-0.0764 0.94235-0.0423 1.8592 0.0764 2.7082-1.7998-0.58577-4.1854-1.1206-5.4843 0.67068-0.81973 0.88463-0.0257 1.1544 1.6674 3.6229 2.9037 3.3153 3.2244 4.0378 7.0902 8.7288 1.9711 2.1356 1.3949 1.3258 3.0923 3.6156 1.5955 3.2474 0.7927 2.1224 2.4121 4.4352 3.0707 1.5168 2.8548 1.3709 5.833 3.8016 0.9848-0.2291 3.5232-0.23777 3.7864-1.3584 0.28879 0.034 0.75558-0.016 1.0442-0.068 0.1444-1.5536 0.068-3.1751 0.2121-4.7287 0.30578 0.0424 0.74708-0.10204 1.0527-0.0594 0.10204-1.0018 0.068-2.046 0.16974-3.0478 4.2363 1.8083 2.878-1.9356 2.3007-4.7372-0.15273-0.034-0.31413-0.068-0.46694-0.11038-0.016-2.5214-3.243-4.4146-1.7998-7.0125-0.24611-0.12738-0.47541-0.27176-0.68765-0.44995l0.416 0.016"/></a>
  <a href="place-details/50">
  <path id="Pathanamthitta" stroke="#fff" fill="#e7de69" class="enabled" d="m153.46 202.63c-1.5281-0.83198-2.4875 0.12739-2.4195-2.4365 0.051-1.9611-8.7e-4 -2.8525-0.81501-4.5674-0.86597-1.8253-0.75558-1.6894-3.0138-1.8338-2.2837-0.14439-4.2788 0.35656-5.0938 2.7252-1.2904 0.24612-2.5554-0.50087-3.4298-1.3499-1.0442 0.24611-2.1564 0.30548-3.0818 0.11038 0.37357-1.6979-1.8932-1.8847-3.1581-1.7234-0.21242 2.1818-3.1751 1.0866-3.9222 0.0424-1.647-2.3092-4.1684-1.265-6.5031-1.1546-0.35656 4.0156-2.2413 2.2413-5.3994 2.6233-0.28878 3.277-0.18674 4.3807 3.328 4.3891 2.9883 0.016 6.9785 3.1157 2.7591 5.2976 0.84898 1.231 1.5112 1.4772 1.1206 3.2006-0.27178 1.1886-0.18675 3.3025 1.5451 3.1327 1.6979-0.16974 3.311-0.78102 5.0429-0.90838 2.1818-0.15274 4.542 0.84896 6.6474 0.45845 0.1784-0.79803-0.39052-1.3499-1.1801-1.5281-0.92539-3.4298 5.1787 0.23777 6.2399 0.75555 2.6148 1.2735 5.1278 2.8186 7.785 3.9902 4.1345-0.67918 3.5147-7.6492 4.1345-10.374-0.1614-0.35658-0.33108-0.70466-0.58579-0.84898"/></a>
  <a href="place-details/49">
  <path id="Idukki" class="enabled" stroke="#fff" fill="#85c5e3" d="m133.44 154.01c-1.9102-0.51787-3.744-0.11039-5.5777 0.0764-0.5688 0.62823-1.1546 1.248-1.7488 1.8593-0.16975 0.84049-0.34809 1.6724-0.51786 2.5129-0.47543 0.1444-0.49241 0.34809-0.815 0.60275 1.7404 0.72164 2.428 1.6894 4.2958 2.2413 1.1886 0.34809 3.8458 4.7967 3.5402 6.0616-0.44145 0.0257-5.5607 1.5876-5.5183 0.97632-0.16973 2.479-1.1631 1.9102-3.0987 3.0138-1.1376 0.6452-1.1292 1.5536-1.2055 2.7506 1.0357 0.51784 5.9173 2.4365 6.0616 0.90836 1.9696 2.1309 3.8119 2.8865 4.542 5.7645 2.3092 0.22077 2.8186 2.2413 2.8356 4.2109 8.4e-4 1.18-0.24609 2.2837-0.35657 3.4553-0.17841 2.0205 1.6555 2.2837 2.7252 3.5657-0.97631 2.2922 0.416 5.1193 3.4978 4.5165 1.197-3.4638 4.1514-2.8016 7.5303-2.5044 0.50087 0.0423 1.5197 4.143 1.4857 4.7457-0.051 0.96784-0.39054 2.6658 0.44995 3.4723 0.80651 0.78107 1.8083-0.33109 2.462 1.248 0.31412-1.3838 1.0273-2.3601 2.7422-1.9866-0.085-1.6215 0.798-3.6506 1.6045-4.9919 1.2395-0.5688-0.11039-2.9374 2.012-2.6827 0.22075-2.479-2.0545-3.676-1.8677-5.7305-1.5961-0.69616-2.2243 0.66221-2.895 1.7658-2.4535 0.4075-3.6675-2.5469-5.8918-2.9544 2.9714-0.11873 0.56033-6.9191 3.9052-7.8699-0.16974-0.92539-0.2801-2.0545-0.22074-3.0393-0.15274-0.034-0.31414-0.068-0.46694-0.11038-0.65371-3.1836 7.0974-8.8972 0.25477-9.9159 0.11873-1.1461-0.57727-1.9187-0.49236-3.0393 4.2363 0.45842 3.8967-9.0924 1.2989-10.519-1.7828-0.97632-5.1617-0.53485-6.4267 1.0357-1.613 2.0036-4.8646 1.4263-4.7966 4.6014-0.47544 0.28878-1.0612 0.38205-1.613 0.2461-0.23777-2.8525-3.2685-1.7404-4.4656-3.6506-1.0782 0.0257-1.9951-0.29713-3.2685-0.6367"/></a>
  <a href="place-details/49">
  <path id="Ernakulam" class="enabled" stroke="#fff" fill="#85c5e3" d="m105.94 167.12c2.681 2.8744 0.77786 1.2224 2.681 2.8744l1.5742 1.8906c-1.3006 3.4248 1.115 6.6507 0.98098 2.85 1.7658-0.068 8.252-2.8186 7.8869 0.34807 0.89992 0.085 1.7998 0.28012 2.7082 0.22911 1.6979-0.085 0.61973-2.4535 1.5706-3.3364 2.1649-2.0205 3.5232 0.16973 3.7864-3.6506-0.034 0.44995 5.0089-0.95084 5.5183-0.97632 0.30579-1.2735-2.3516-5.7135-3.5402-6.0616-1.8762-0.55183-2.5554-1.5196-4.2958-2.2413 0.32262-0.2461 0.3396-0.44995 0.81499-0.60276 0.16974-0.83198 0.34809-1.6724 0.5179-2.5129 0.59427-0.61125 1.1716-1.231 1.7488-1.8592-4.457 0.44146-8.1246-1.7234-12.505-1.5706 0.25477 2.3092-4.2363 2.7591-5.6371 2.827-8.6e-4 1.1121-0.0424 1.8762-0.75558 2.6742-1.9187 0.28011-2.7677 0.11038-4.9919-1.3414-1.5218 0.52638-1.118-0.16365-0.76408 2.063-1.3376 0.46574-0.78106 0.39052-0.4037 1.7721 0.32884 1.7245 0.12258 0.91621 0.49369 3.0096 0.98481 0.18675 0.72256-0.27435 2.6116 3.6149"/></a>
  <a href="place-details/49">
  <path id="Thrissur" class="enabled" stroke="#fff" fill="#85c5e3" d="m125.26 148.08c-2.6233-2.2668-4.0835-5.0259-7.9208-5.79-0.1954-1.5366-2.9968-8.4132 0.56032-7.6407 8.6e-4 -1.197 0.34807-2.2328 0.30577-3.4977-2.3686-0.44145-4.7118 0.43298-7.0804 0.1444-1.7319-0.2121-3.3194-1.4517-4.9834-2.0036 0.35659 5.2975-3.4977 1.5876-5.7814 1.7064-0.0934-0.25477-0.22077-0.42451-0.35659-0.55183 0.0934 0.798-0.1444 2.1224-0.1954 2.6742-3.4977 0.0934-0.0096 0.01-6.9785 0.38206 1.9662 2.0766 1.9981 2.2086 2.306 3.7381l0.88746 2.0257 0.97494 0.7053c-0.97494-0.7053 1.4867-1.8851 2.1829 1.1711 2.5767 2.6889-4.893-2.5431-0.65316 3.577 2.029 1.7064 2.9444 18.197 4.9055 8.3684 2.4365 6.7392 3.0393 5.306 5.5437 4.941 0.71314-0.80654 0.73861-1.5621 0.75559-2.6742 1.3923-0.068 5.8834-0.51786 5.6372-2.827 4.3807-0.15273 8.0567 2.0036 12.505 1.5706 3.1751-0.44148 5.8239 0.68766 8.8547 0.54334-0.29712-0.50089-0.59425-1.7064-0.84895-3.0053-1.2989-0.0423-2.5978-0.11038-3.8373-0.2291 0.33111-3.0648-4.9325-1.7319-6.7832-3.328"/></a>
  <a href="place-details/49">
  <path id="Palakkad" class="enabled" stroke="#fff" fill="#85c5e3" d="m117.11 109.6c-0.0934 1.0442-0.27178 2.4365 0.068 3.3704-1.7319 0.58581-0.75558 2.0375-3.1921 1.8678 0.1614 2.7337-2.2413 1.7149-4.3128 1.7998-0.0161 1.5536 3.294 1.9017 4.1345 2.9204 2.4196 2.9374-2.9374 3.1921-4.2872 3.2431-0.22076 2.428-4.6524 1.0527-6.4437 1.5281-0.034 0.60275-0.0764 1.2395-0.11038 1.8507-1.231 0.0423-3.1496-0.72164-4.2363 0.085-1.9526 1.4348 1.1291 3.0138 1.265 4.1854 0.13573 0.11873 0.26312 0.28879 0.35656 0.55183 2.2922-0.11872 6.138 3.5911 5.7815-1.7064 1.664 0.54336 3.2515 1.7913 4.9834 2.0036 2.3686 0.29712 4.7118-0.57731 7.0804-0.14439 0.0423 1.265-0.29712 2.3007-0.30578 3.4977-3.5572-0.77255-0.75558 6.1041-0.56035 7.6407 3.8374 0.75558 5.3061 3.5232 7.9208 5.79 1.5621 1.3499 7.1143 0.27178 6.7748 3.311 1.248 0.11038 2.5384 0.18675 3.8373 0.2291-0.61972-3.2261-0.75555-5.6881 0.1954-8.8717 0.61977-2.0885-0.25476-5.6286 1.9017-6.953 0.25476-2.5808 0.77255-5.9682-0.93387-8.201-1.0442-1.3584-6.5625-4.3382-8.3283-4.2363 0.54332-1.5621-0.0764-3.7185 0.71313-5.2721 0.67915 0.068 1.5027-0.11873 2.1818-0.034 0.10203-2.3092 1.0442-5.739-0.9254-7.5558-2.4026-2.2158-7.4709-1.1376-10.391-1.0102-0.016 0.0423-0.0424 0.085-0.051 0.12739-1.0188 0.0423-2.0884-0.051-3.1157-0.0161"/></a>
  <a href="place-details/49">
  <path id="Mallapuram" class="enabled" stroke="#fff" fill="#85c5e3" d="m106.41 95.625c-0.29714 1.4602-1.7064 3.5486-3.3194 3.4128-0.29714 3.277-0.89141 6.5455-4.6014 7.5049-3.0053 0.78102-5.9597-1.4008-6.3927 2.5639-1.0952 0.3226-3.0563 4.5505-3.7524 5.5607 1.1173 2.9488 0.86885 1.9197 1.5469 4.9014 0.77294 3.1291 0.6736 4.4488 1.3914 9.5935 2.13-1.4548 5.0525-1.1527 2.7837 0.73556l-1.5961 1.3753 0.36509 2.2328c4.2101-0.33416 2.6572-0.25477 6.97-0.37353 0.07637-0.88293 0.29712-1.7828 0.1954-2.6742-0.15274-1.2395-1.5876-1.3244-1.7319-2.6573-0.28879-2.7591 3.1327-1.5536 4.7033-1.613 0.034-0.60279 0.0764-1.2395 0.11039-1.8508 1.7913-0.4754 6.2229 0.89991 6.4436-1.5281 1.9696-0.0764 5.0429 0.26311 4.559-2.6827-0.32264-1.9526-4.4316-1.5112-4.4062-3.4893 2.0715-0.085 4.4656 0.94236 4.3127-1.7998 2.4366 0.1784 1.4602-1.2735 3.1921-1.8678-0.33958-0.93386-0.1614-2.3261-0.068-3.3704 1.0358-0.034 2.0969 0.051 3.1327 0.016 8.4e-4 -0.051 0.034-0.085 0.051-0.12739-0.80653 0.034-1.5791 0.051-2.2752 0.034 0.23777 0 0.48395 0 0.72163-0.0257 0.25478-1.3838 3.4128-5.9088 4.7203-6.4012 0.034-1.5281-1.4687-1.6385-2.5639-1.9866-1.3074-0.41597-1.6979-1.7404-2.7506-2.462-1.2819-0.8829-2.7676-0.38203-3.9562-1.4687-1.2904-1.1716-3.0648-0.81501-4.6863-0.95933-0.034-0.98478-0.051-2.012-0.016-3.0308-0.8829 1.248-2.0205 1.4517-3.0817 2.4366"/>
  </a>
  <a href="place-details/48">
  <path id="Kozhikode" fill="#a69d98" stroke="#fff" class="enabled" d="m87.515 110.16c0.76556 2.2472 0.8959 6.4032 0.85345 4.1789-8.67e-4 -0.33108 3.4128-5.1447 3.7354-5.2381 0.43297-3.9562 3.3789-1.7828 6.3927-2.5639 3.7185-0.95933 4.3127-4.2278 4.6014-7.5048 1.613 0.14439 3.0138-1.9441 3.3194-3.4129-0.54333 0.51788-0.75558 1.2735-1.5876 1.4857-0.55183-0.82348-1.3159-1.4772-1.248-2.5299-2.3007-2.1733-6.1465-1.2225-7.3436-4.8731-2.4874 0.4924-1.2649-3.5826-1.8508-4.873-0.51785-1.1376-1.9187-1.0273-2.895-1.4857-1.664-0.77259-3.277-2.6658-4.3297-4.126-0.52636 0.20375-0.85746 0.65371-0.92539 1.6555-1.1376 0.04236-2.4365-0.35658-3.4808 0.30547-1.0188 0.63673-1.1886 1.9526-2.2668 2.5724-1.3329 0.76405-1.6726 0.45842-3.2177 0.14439-0.08616 17.502 16.532 15.13 7.0466 15.706 2.147 2.3061 1.2857 3.42 1.9356 7.4964 2.8186-0.42447 4.1346-2.7449 1.2605 3.0628"/>
  </a>
  <a href="place-details/48">
  <path id="Wayanad" fill="#a69d98" stroke="#fff" class="enabled" d="m93.165 77.482c-1.5196 0.01604-2.5639-0.77256-4.2194-0.71313-0.06803 0.74708-0.05102 1.5196-0.11872 2.2667-0.68765 8.34e-4 -1.248 0.01604-1.6809 0.19509 0.94235 1.3159 2.1649 2.4195 3.3704 3.4977 1.0102 0.89991 2.3432 0.71313 3.3619 1.4687 1.5111 1.1376-0.39903 6.0616 2.3516 5.5098 1.2055 3.659 5.0429 2.7082 7.3436 4.873-0.068 1.0527 0.70463 1.7064 1.248 2.5299 1.1631-0.28878 3.9986-2.9714 4.6693-3.9222 0.0424-1.4687 0.1784-2.9289 0.50091-4.2448 1.8253 0.51788 2.5978 2.1564 4.9834 1.7489 0.32259-3.4044 3.9647-1.197 4.1939-4.907 0.12739-8.35e-4 0.28877-0.01604 0.46693-0.03401-1.1376-2.9289-0.81501-3.5317-4.3552-3.693-2.2328-0.11038-3.2855-3.7015-5.2551-3.2515-0.0257 0.11872-0.0594 0.23776-0.0764 0.35658-0.76406-0.09337-1.1206-2.2752-1.5112-2.7931-0.98477-1.2904-3.3534-1.0782-4.7287-0.76408-0.0594-1.4517 0.11038-2.9459 0.051-4.4061-2.2497-0.57728-4.9664 1.4433-7.5218 0.97631-0.63673 1.613-0.82351 5.2721-3.0733 5.306"/>
  </a>
  <a href="place-details/48">
  <path id="Kannur" fill="#a69d98" stroke="#fff" class="enabled" d="m67.619 57.651c-1.5112 0.06803-3.6336 0.52638-5.0768 1.0018-0.05943 0.60278 0.05943 1.1631 0.36506 1.681 0.4924 1.3074-0.61126 1.7743-1.1546 2.7761-1.3923 2.5809-1.4147 2.8718-2.7116 2.4728-0.2121-0.51788 1.2223 2.4447 4.2101 0.29295 3.0406 1.5401-2.926 1.2866 1.9845 3.0866 4.6905 2.2737-1.9225-0.35661 1.4455 4.5816 1.4385 2.0134 0.66088 1.2874 2.679 1.9981 1.5481 1.1552 1.6996 1.2505 3.5055 2.3739 1.1021 3.6638 1.7319 1.1122 3.1666 1.231 0.96783 0.07637 2.2582-0.23776 2.8695 0.75558 1.0697 1.7573-2.5384 2.4535-2.8525 3.9901 2.0036 0.3226 4.4571 0.55183 5.6541-1.4517 1.1376-1.9017 2.5384-1.4687 4.508-1.5451 0.11872-1.664 1.214-1.8338 2.6063-1.8507 0.06802-0.74711 0.05102-1.5281 0.11872-2.2667 1.6725-0.05936 3.5572 1.248 5.1957 0.56033 1.1885-0.49241 1.6809-4.126 2.08-5.1533-1.9017-0.34805-4.2873-1.1291-5.4249-2.8185-0.85744-1.2819 0.36506-3.7185-1.6045-4.2873-2.0036-0.5688-3.4383 0.34808-5.2212-1.197-1.5196-1.3159-2.9459-3.7694-5.2721-3.5996 0.19528-1.3074-1.1546-4.1684-2.3686-5.6201-2.2413 1.8507-7.386-0.14439-8.7019 2.9883"/>
  </a>
  <a href="place-details/48">
  <path id="Kasargod" fill="#a69d98" stroke="#fff" class="enabled" d="m52.19 39.815c1.2395 2.6233 0.73123 4.5891 1.835 8.7996 2.1224 1.6045 1.7424 7.0378 3.3045 9.364 3.0817 4.5844-0.37644 2.4252 1.712 7.6039 1.2017-0.08728 0.11327 1.6515 2.2871-1.5049 0.35655-0.90838 1.6385-1.9526 1.7149-2.895 0.0764-0.92539-0.70464-1.5876-0.50938-2.5384 1.4432-0.47543 3.5657-0.93389 5.0768-1.0018 1.3159-3.1327 6.4606-1.1291 8.7274-2.9969-1.3499-1.63-4.0411-0.46693-5.1108-2.029-0.95934-1.4008 0.67917-3.243-0.70464-4.491-1.8932-1.7064 2.029-2.6573 1.9102-4.2448-0.10188-1.4008-2.3601-0.62823-2.5469 0.41601-0.30562 0.09338-0.8999 0.07637-1.2055-0.02567-0.78104-1.5961-0.85745-2.7506-2.7082-3.2261 0.39052-0.91688 0.28866-2.3262 0.24621-3.3704-0.56882 8.35e-4 -2.7252 1.9102-2.9714 2.445-0.05943-0.75558 0.01701-1.5451-0.01701-2.3007-0.89142-0.08503-1.8253-0.05936-2.7167-0.13573-0.28012-1.1122 2.0969-2.0545 0.37352-3.1497-1.9356-1.2395-3.2515-1.9951-3.9901 0.72162-0.98478 0.2462-1.7149-0.64521-1.8168-1.4687 1.5961-0.67068-8.34e-4 -2.8016-1.4347-2.2328-0.15274-4.3382-0.66221-1.8083-3.9562-1.7913-3.8883 0.01701 1.0867-1.1121-2.7846-0.21226 2.3764 4.4005 3.7401 6.9879 5.2852 10.265"/></a>
 </g>
 <image style="overflow:visible;" width="272" height="272" xlink:href="{{ asset('/images/map-locator.png') }}"  transform="matrix(5.147059e-02 0 0 5.147059e-02 84.7044 199.9399)">
</image>
<text transform="matrix(1 0 0 1 35.3071 213.9399)" font-size="6.35" class="st3 st4">Thiruanantapuram</text>
<image style="overflow:visible;" width="272" height="272" xlink:href="{{ asset('/images/map-locator.png') }}"  transform="matrix(5.147059e-02 0 0 5.147059e-02 52.0003 121.838)">
</image>
<text transform="matrix(1 0 0 1 40.9246 135.8813)" font-size="6.35" class="st3 st4">Kochi</text>
<image style="overflow:visible;" width="272" height="272" xlink:href="{{ asset('/images/map-locator.png') }}"  transform="matrix(5.147059e-02 0 0 5.147059e-02 33.9246 59.1742)">
</image>
<text transform="matrix(1 0 0 1 8.7165 75.5)" font-size="6.35" class="st3 st4">Kozhikode</text>
</svg>

				 <h6 class="text-de-ls text-center">click on the map for details</h6><br>
        
         <div class="row">
          <div class="col-sm-1" style="height:20px;background-color:#a69d98;float: left;"></div>
          <div class="col-sm-10 text-left" style=""> North Division</div>
          <div class="col-sm-1" style="height:20px;background-color:#85c5e3;float: left;"></div>
          <div class="col-sm-10 text-left" style=""> Central Division</div>
          <div class="col-sm-1" style="height:20px;background-color:#e7de69;float: left;"></div>
          <div class="col-sm-10 text-left" style=""> South Division</div>
          </div>


				</div>

				<div class="col-lg-6  text-justify">
				<h1 class="shead-style text-center">KERALA</h1>
				<p>Popular by many nick names like “God’s own country” , “Spice garden of India” , “Land of coconuts” , Kerala is definitely your holiday retreat. Receiving visitors from all corners of the world Kerala is a very popular travel destination in India. A very diverse land Kerala is famous for its hill stations, backwaters , wildlife sanctuaries and religious places. The state of monsoon is naturally beautiful and receives the first rainfall of summer. Bordered by the Arabian sea on one side and the Western Ghats on the other much of the state is forested.</p><p>
        A look at the landscape of Kerala provides enough evidence of it’s beauty and flora and fauna. The Malabar coast is famous for its foods and cuisine. A wide variety of adventure activities also boom the popularity of Kerala. The presence of a number of Temples , mosques and churches also boost the pilgrimage of the region with more and more number of people coming to Kerala every year. A trip to Kerala not only makes you happy but also gives you the reason to be energetic and diverse.
        </p>
				<br>
				</div>
				</div>


    </div>

<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
@endsection

@section('bottom')

@endsection