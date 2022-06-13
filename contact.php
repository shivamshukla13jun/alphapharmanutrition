<?php include "header.php";?>
		<section class="ls columns_padding_25 section_padding_top_75 section_padding_bottom_130">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 to_animate" data-animation="scaleAppear">
                <h3>Contact Form</h3>
                <form class="row columns_padding_10" id="my_captcha_form" method="post" action="mailto.php">
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
                    <div class="col-sm-12">
                        <div class="contact-form-message"> <label for="message">Message</label> <textarea
                                aria-required="true" rows="5" cols="45" name="message" id="message" class="form-control"
                                placeholder="Your Message"></textarea> </div>
                    </div>
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
	
			<?php include "footer.php";?>