<!DOCTYPE html>
<html>



<!DOCTYPE html>
<html lang="en">
<head>
 <head>
     <title>Validation</ title>
</head>
    
    

  <h1 class = "text-center">CSC 642 Summer 2018 Individual Assignment: Patrick Wong </h1>
  <h2 class = "text-center"> Registration Form </h2>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    
    
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
  </style>
</head>
<body>


  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
        <div class="col-sm-8 text-left"> 
                <p>Thank you for submitting this form.</p>
                <p>We have successfully received it.</p>    
                <p>Below is a summary of the information you provided.<br><br> </p> 
    
                <p>First Name : </p> <?php echo $_GET["FirstName"]; ?><br>
                <p>Last Name: </p> <?php echo $_GET["LastName"]; ?><br>
                <p>Address :</p> <?php echo $_GET["Address"]; ?><br>
                <p>City :</p> <?php echo $_GET["City"]; ?><br>
                <p>State :</p> <?php echo $_GET["State"]; ?><br>
                <p>Zip Code:</p> <?php echo $_GET["ZipCode"]; ?><br>
                <p>Education Status: <?php echo $_GET["EducationStatus"]; ?><br>
                <p>Income:</p> <?php echo $_GET["Income"]; ?><br>
                <p>Phone Number:</p> <?php echo $_GET["PhoneNumber"]; ?><br>
                <p>Email Address:</p> <?php echo $_GET["EmailAddress"]; ?><br>  

            </div>
        </div>
    <div class="col-sm-2 sidenav"> 
    </div>
</div>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgWzjBegv5zRMklJR6eTHIPd_vDSDZuZg&callback=myMap"></script>
    <!-- Add Google Maps -->
    <script>
        // Initialize and add the map
        function initMap() {
          // The location of Uluru
          var locate = {lat: 37.721903, lng: -122.478204};
          // The map, centered at Uluru
          var map = new google.maps.Map(
              document.getElementById('map'), {zoom: 4, center: locate});
          // The marker, positioned at Uluru
          var marker = new google.maps.Marker({position: uluru, map: map});
        } 
    </script>
    
</body>
</html>

