<?php

if(isset($_POST['submit'])){

    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // $to = "rmeocnis@gmail.com";
    $to = "expressmedgh@gmail.com";
    $subject = "EXPRESSMED APPOINTMENT";
    $message = "NAME : ".$firstname." ".$lastname."\n"."E-MAIL : ".$email."\n"."PHONE : ".$phone."\n";
    $headers = "FROM : mail.expressmedgh.com";
    // $headers = "FROM : smtp.gmail.com";

    if(mail($to, $subject, $message, $headers)){
        echo "<h1 class='text-center'>Your appointment has been booked successfully! We’ll contact you shortly....Thank You</h1>";
        
    }
    else{
        echo "<h1 class='text-center'>Something went wrong, Please try again or contact us by phone or email...Thank You</h1>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta http-equiv="X-ua-compatible" content="ie=edge" />

    <title>Healthcare at your convinience</title>

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="text-center"> <a href="index.php" class="btn btn-info marginright-50"><i class="fa fa-arrow-left text-lowercase">&nbsp;</i>back to homepage</a></div>

    </div>
</body>

</html>
