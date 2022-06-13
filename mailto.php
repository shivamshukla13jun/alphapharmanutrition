
<?php
 include "header.php";
if(isset($_POST['submit']))
{
  include "config.php";

        $to = "sales@alphapharmanutrition.com";
        $subject = "New Order";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $txt="Full Name:".$name."\r\nEmail:".$email."\r\nContact No:".$phone."\r\n Message:".$message;
        $from = $_POST['email']; 
        $headers = "From: $from";
        
       
        
        mail($to ,$subject,$txt,$headers);
       
        echo  "<script>
        
        swal('Thank You For Contacting Us!', 'our executive team will call you soon!', 'success');
        window.location='thankyou.php' ;
       </script>";
       
     
    }
   
       
  
 ?>
 
 <?php include "footer.php"; ?>