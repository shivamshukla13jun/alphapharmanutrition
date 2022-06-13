<?php include ("header.php"); ?>

<section class="ls columns_padding_25 section_padding_top_75 section_padding_bottom_130">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 to_animate" data-animation="scaleAppear">
                <h3>Contact Form</h3>
                <form class="row columns_padding_10" id="my_captcha_form" method="post" action="">
                    <div class="col-sm-6">
                        <div class="contact-form-name"> <label for="name">Full Name <span
                                    class="required">*</span></label> <input type="text" aria-required="true" size="30"
                                value="" name="name" id="name" class="form-control" placeholder="Full Name"> </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="contact-form-email"> <label for="email">Email address<span
                                    class="required">*</span></label> <input type="email" aria-required="true" size="30"
                                value="" name="email" id="email" class="form-control" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="contact-form-phone"> <label for="phone">Phone Number</label> <input type="text"
                                size="30" value="" name="phone" id="phone" class="form-control"
                                placeholder="Phone Number"> </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="contact-form-phone"> <label for="phone">City/Country</label> <input type="text"
                                size="30" value="" name="city" id="city" class="form-control"
                                placeholder="Enter Your City or State Name"> </div>
                    </div>
                     
                    <div class="col-sm-6">
                        <div class="contact-form-phone"> <label for="phone">Product Name</label> <input type="text"
                                size="30" value="" name="product" id="phone" class="form-control"
                                placeholder="Product Name"> </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="contact-form-phone"> <label for="phone">Product Code</label> <input type="text"
                                size="30" value="" name="vcode" id="phone" class="form-control text-uppercase"
                                placeholder="Enter Your Product Code"> </div>
                    </div>
                   
                    <!--<div class="col-sm-12">-->
                    <!--    <div class="contact-form-message"> <label for="message">Message</label> <textarea-->
                    <!--            aria-required="true" rows="5" cols="45" name="message" id="message" class="form-control"-->
                    <!--            placeholder="Your Message"></textarea> </div>-->
                    <!--</div>-->
                    <div class="col-sm-12">
                        <div class="contact-form-message">
                         <div id="checkbox" name="checkbox" class="g-recaptcha"  aria-required="true" data-sitekey="6LeEcNseAAAAADHq8sI6d_scGt0k-4K68_hvboW6"></div>
                         </div>
                   
                    </div>
                     
                    <div class="col-sm-12">
                        <div class="contact-form-submit topmargin_80"> <button type="submit" id="contact_form_submit"
                                name="submit" class="theme_button color2 inverse min_width_button">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--.col-* -->
            
            <!--.col-* -->
        </div>
        <!--.row -->
    </div>
    <!--.container -->
</section>









<?php

if(isset($_POST['submit']))
{
  include "config.php";
$secret = '6LeEcNseAAAAAEehj-o8TAV0cgXUXhz485e_4oNh';
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
$responseData = json_decode($verifyResponse);
if($responseData->success)
{
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $phone =mysqli_real_escape_string($conn,$_POST['phone']);
 
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $city = mysqli_real_escape_string($conn,$_POST['city']);
  $state = mysqli_real_escape_string($conn,$_POST['state']);
  $product = mysqli_real_escape_string($conn,$_POST['product']);
  $vcode = strtoupper($_POST['vcode']);
  $to = "sales@alphapharmanutrition.com";
  $subject = "New Order";
  $txt="Full Name:".$name."\r\nEmail:".$email."\r\nContact No:".$phone."\r\n city:".$city."\r\n Verification Code:".$vcode;
  $from = $_POST['email']; 
  $headers = "From: $from";
  mail($to ,$subject,$txt,$headers);
  $cars =array("DHDH125","DH15851F","DH1251ND","DH1251","DHDH125551"
,"YDH15851U","DHDH1255HDH","IDHDH1255","HDH125","WDH1251S",
"FDH15851R","DH15851N","DH1251RDH125","DH1251S","WIDHDH1255H",
"HIS485","DHDH1255HDH125Y","DH1251DH","BDH125","HDH1251",
"FRDH1585","DH15851R","HDH1251D","BYHDGF","WDH1585D");
  
  if (in_array($vcode,$cars)) {
      

    $select = mysqli_query($conn, "select * FROM authenticate WHERE vcode='$vcode' ");
    if(mysqli_num_rows($select)) {
        
     echo "<script>
     alert('Your code is already Used');
     
     window.location='';
     </script>";
     
    }else
      
      mysqli_query($conn,"insert into authenticate(name,email,phone,city,product,vcode)values('$name','$email', '$phone','$city','$product','$vcode')");
      
      
     
      echo "<script> swal('Congratulations!', 'Your Product Has Been Verified!', 'success');
      </script>";
       
        
       
  
  
              
    }else{
      echo "<script>swal('Sorry!', 'Sorry The Product Code Is Invalid!', 'error');
      </script>";
       
        
     
    }
   }
       
  
  }
  
 

  
  ?>


<?php include ("footer.php"); ?>