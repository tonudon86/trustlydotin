<?php

$message = "hello";

$headers = "From: noreply@trustly.co.in";
mail("arun.t22@gmail.com","Website Enquiry",$message,$headers);
header('Location: /');
exit;
?>