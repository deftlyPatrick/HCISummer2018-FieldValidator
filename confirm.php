<!DOCTYPE html>
<html>

<head>
<title>Validation</title>
</head>
<h1 class = "text-center">CSC 642 Summer 2018 Individual Assignment: Patrick Wong </h1>
<h2 class = "text-center"> Registration Form </h2>
<p>Thank you for submitting this form. 

<p>We have successfully received it. 

<p>Below is a summary of the information you provided.<br><br> </p> 


    First Name : <?php echo $_GET["FirstName"]; ?><br>
    Last Name : <?php echo $_GET["LastName"]; ?><br>
    Address : <?php echo $_GET["Address"]; ?><br>
    City : <?php echo $_GET["City"]; ?><br>
    State : <?php echo $_GET["State"]; ?><br>
    Zip Code: <?php echo $_GET["ZipCode"]; ?><br>
    Education Status: <?php echo $_GET["Education"]; ?><br>
    Income: <?php echo $_GET["Income"]; ?><br>
    Phone Number: <?php echo $_GET["PhoneNumber"]; ?><br>
    Email Address: <?php echo $_GET["EmailAddress"]; ?><br>
    

</html>
