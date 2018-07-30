<!DOCTYPE html>
<html>



<!DOCTYPE html>
<html lang="en">
<head>
 <head>
     <title>Validation</title>
</head>

  <h1 class = "text-center">CSC 642 Summer 2018 Individual Assignment: Patrick Wong </h1>
  <h2 class = "text-center"> Registration Form </h2>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
  <style>
    
      p{
        font-family: 'Roboto', sans-serif;
      }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
      
    #map {
        height: 320px;  /* The height is 400 pixels */
        width: 75%;  /* The width is the width of the web page */
       }
  </style>
</head>
<body>


  
<div class="container-fluid text-center">    
  <div class="row content">
    
      
         <div class="container text-center">
        <p>Thank you for submitting this form. 
        <p>We have successfully received it.    
        <p>Below is a summary of the information you provided.<br><br> </p> 
  <div class="row">
    <div class="col-sm-6" text-center>
        First Name : <?php echo $_GET["FirstName"]; ?><br>
        Last Name : <?php echo $_GET["LastName"]; ?><br>
        Address : <?php echo $_GET["Address"]; ?><br>
        City : <?php echo $_GET["City"]; ?><br>
        State : <?php echo $_GET["State"]; ?><br>
        Zip Code: <?php echo $_GET["ZipCode"]; ?><br>
        Education Status: <?php echo $_GET["EducationStatus"]; ?><br>
        Income:  <?php echo $_GET["Income"]; ?><br>
        Phone Number: <?php echo $_GET["PhoneNumber"]; ?><br>
        Email Address: <?php echo $_GET["EmailAddress"]; ?><br>
            </div>
    
                <div class="col-sm-6">
                    <div id="map"></div>
                 </div>
             </div>
          </div>

    </div>

  </div>

    
    <script>
        // Initialize and add the map
            function initMap() {
              // The location of Uluru
              var sf = {lat: 37.7219, lng: -122.4782};
              // The map, centered at Uluru
              var map = new google.maps.Map(
                  document.getElementById('map'), {zoom: 4, center: sf});
              // The marker, positioned at Uluru
              var marker = new google.maps.Marker({position: sf, map: map});
              var mapOptions = {center: sf, zoom: 10};
            }
    </script>
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgWzjBegv5zRMklJR6eTHIPd_vDSDZuZg&callback=initMap">
    </script>

</body>
</html>
