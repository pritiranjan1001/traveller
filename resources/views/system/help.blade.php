 
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>visitboard</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
        <!-- Styles -->
        <style>
        body, html {
        height: 100%;
        font-family: "Inconsolata", sans-serif;
        }
        a{
        text-decoration:none;
        } 

 html, body, .container-table {
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

/*p {
  -webkit-column-count: 2;
  -moz-column-count: 2;
  column-count:2;
}*/

        </style>
    </head>
<body>

<!-- Contact/Area Container -->


    <div class="container container-table">
        <div class="row vertical-center-row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="col-lg-10 col-lg-offset-1">
                <br>
                <a href="{{ url('/') }}"><img class="profile" src="{{ asset('images/mountain.jpg') }}" /></a>
                <h1 class="text-center"><span class="">About Us</span></h1>
                </div>
                <div class="col-lg-6">
                    
                    <p class="text-justify">
                    The journey itself is more beautiful than the destination and it is true for all conditions. Since the beginning of our attempt to do something for those who love to travel, we have set this journey of exploring and travelling to different places which are out there.</p>
                    <p class="text-justify">
                    Every place has its own tale. For that tale to be told it should have a narrative. So if a person wants to tell the story of a place he should know the narrative i.e. he should travel.
                    Our sole purpose is to enrich each and every single one of the travelers with the required information.While it is possible to travel to a new place with little information, it is very confusing and weird to accept the situations everyone faces without proper information.</p><p class="text-justify">
                    Information in proper form can definitely help people who are in need. This is the way we want to help travelers in need of required information.</p>
                 </div>
                  <div class="col-lg-6">
                    <p class="text-justify">
                    In Visitboard.com we have specified the required areas and topics with understandable and catchy interpretations. Our way is to give the information to travelers in a colorful and disciplined way which will be understood and interpreted properly.</p><p class="text-justify">
                    In Visitboard.com we also allow users to share their experiences through our site. One can share their information, pictures, memories, artworks through their registered accounts in our website.
                    We also feature a magazine which will cover all the details on specific states/countries/areas. The magazine will feature pictorial representations of areas/places with stories/information/personal experiences and featured details.
                    We hope to connect the world o f travelers and make them know the places worth dying for. 
                    </p>    
                    <p><strong>for any inquiries you have you can send us a message:</strong></p>
                </div>


                <div class="col-lg-4 col-lg-offset-1 col-sm-4">
                <p><span class="text-left""><a href="{{ url('/security') }}"><< previous</a></span></p>
                </div>

                <div class="col-lg-2 col-lg-offset-5 col-sm-2 col-lg-sm-5">
                <p><span class="text-right""><a href="{{ url('/') }}"> home >></a></span></p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
