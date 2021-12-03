<?php
// get data from form  

 

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$contact=$_POST['phone'];
$to= "arun.thikrul@trustly.co.in";
 
$subject = "Mail From website";
// $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$txt="Contact Name:".$name."\n"."Contact Email: ".$email."\n"."Contact No:".$contact."\n"."Message:".$message;
$headers = "From: noreply@trustly.co.in" . "\r\n" .
"CC: info@trustly.co.in";
if($email!=NULL){
    if(mail($to,$subject,$txt,$headers))
    {
        echo "mail send";
    }
    else{
        echo "error";
        // print_f(error_get_last());

    }


}


 
// redirect
 
header("Location:index.php");

exit;

 
?>