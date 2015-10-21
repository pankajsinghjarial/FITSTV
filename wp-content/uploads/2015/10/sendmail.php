<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

if(isset($_POST['submit']))
{
   $to='siddiquiishan@gmail.com'; 
   $subject="New Join Request";
   $email=$_POST['email'];
   $dob=$_POST['dob'];
   $gender=$_POST['gender'];
   $zipcode=$_POST['zipcode'];
   $body="Hi Admin,
   <br> You have a join request.<br>
   Following is the detail:
	Email : ".$email."<br>Gender: ".$gender."<br>Date of Birth: ".$dob."<br>Zipcode: ".$zipcode."<br>Thanks.";
   $header='form : fitse.tv@fitse.net';
   
   if(mail($to,$subject,$body,$header))
   {
       echo 'Email has been sent '.$to;
   }
   else
   {
       echo 'there was error to sending mail';
   }
}


?>
