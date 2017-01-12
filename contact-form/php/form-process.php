<?php

$errorMSG = "";

// NAME
if (empty($_GET["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_GET["name"];
}

// EMAIL
if (empty($_GET["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_GET["email"];
}

// MESSAGE
if (empty($_GET["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_GET["message"];
}


$EmailTo = "odoxar@gmail.com";
$Subject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>