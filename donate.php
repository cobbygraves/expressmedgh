<?php

if(isset($_POST['donate'])){
    
    /* validate credentials */
    $errors = array();

    if (empty($_POST['first_name'])) {
        array_push($errors, 'First Name is required');
    }

    if (empty($_POST['last_name'])) {
        array_push($errors, 'Last Name is required');
    }

    if (empty($_POST['phone'])) {
        array_push($errors, 'Phone Number is required');
    }

    /* validate credentials */
    
    if(count($errors)==0){
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $comments = $_POST['message'];

    // $to = "rmeocnis@gmail.com";
    $to = "expressmedgh@gmail.com";
    $subject = "EXPRESSMED DONATION";
    $message = "NAME : ".$firstname." ".$lastname."\n"."E-MAIL : ".$email."\n"."PHONE : ".$phone."\n"."MESSAGE: ". $comments."\n";
    $headers = "FROM : mail.expressmedgh.com";
    // $headers = "FROM : smtp.gmail.com";

    if(mail($to, $subject, $message, $headers)){
        echo "<h1 class='text-center'>We appreciate your intention to donate to our community! We’ll contact you shortly....Thank You</h1>";
        
    }
    else{
        echo "<h1 class='text-center'>Something went wrong, Please try again or contact us by phone or email...Thank You</h1>";
    }
    }else{
         echo "<h1 class='text-center'>please check if  <span style='color: red;'>first name</span>, <span style='color: red;'>last name</span>  and  <span style='color: red;'>phone number</span> is not empty</h1>";
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
        <div class="text-center"> <a href="donation.php" class="btn btn-info marginright-50"><i class="fa fa-arrow-left text-lowercase">&nbsp;</i>back to donate</a></div>

    </div>
</body>

</html>
