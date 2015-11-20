<div class="panel panel-default">
    <div class="panel-heading">
        <h2><i class="fa fa-fw fa-gift"></i>Contact Us</h2>
    </div>
    <div class="panel-body">

        <!-- All Content Start -->
        <div class="row">
            <div class="panel-body">


                <!-- Content Here -->
                <!-- Content Row -->
                <div class="row">
                    <!-- Map Column -->
                    <div class="col-md-8">
                        <!-- Embedded Google Map -->
                        <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
                    </div>
                    <!-- Contact Details Column -->
                    <div class="col-md-4">
                        <h3>Contact Details</h3>
                        <p>
                            <small style="text-decoration: underline;">Dhaka Division</small><br>
                            Yakub Mollah Complex (2nd Floor),<br>
                            BMTF Main Gate No. 2, P.O: BOF<br>
                            BIDC Bazar, Gazipur City Corporation<br>
                            Gazipur-1700, Bangladesh.
                        </p>
                        <p><i class="fa fa-phone"></i> 
                            <abbr title="Phone">P</abbr>: (+880) 9256096</p>
                        <p><i class="fa fa-mobile"></i> 
                            <abbr title="Phone">M</abbr>: (+880) 1727-765817, (+880) 1977-765817</p>
                        <p><i class="fa fa-fax"></i> 
                            <abbr title="Phone">P</abbr>: (+880) 9256096</p>
                        <p><i class="fa fa-envelope-o"></i> 
                            <abbr title="Email">E</abbr>: <a href="mailto:info@innocous-energy.com">info@innocous-energy.com</a>
                        </p>
                        <p><i class="fa fa-envelope-o"></i> 
                            <abbr title="Phone">W</abbr>: <a href="www.innocuous-energy.com">www.innocuous-energy.com</a></p>
                        <p><i class="fa fa-clock-o"></i> 
                            <abbr title="Hours">H</abbr>: Sunday - Thursday: 9:00 AM to 5:00 PM</p>
                        <ul class="list-unstyled list-inline list-social-icons">
                            <li>
                                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="row">
                    <div class="col-md-8">
                        <h3>Send us a Message</h3>
                        <form method="post" action="<?php echo base_url();?>home/save_user_message" name="sentMessage" id="contactForm" novalidate>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label for="name">Full Name:</label>
                                    <input type="text" class="form-control" id="name" name="full_name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label for="phone">Phone Number:</label>
                                    <input type="tel" class="form-control" id="phone" name="phone_number" required data-validation-required-message="Please enter your phone number.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label for="email">Email Address:</label>
                                    <input type="email" class="form-control" id="email" name="email_address" required data-validation-required-message="Please enter your email address.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label for="message">Message:</label>
                                    <textarea rows="10" cols="100" class="form-control" id="message" name="user_message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                                </div>
                            </div>
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>

                </div>
                <!-- /.row -->


            </div>
        </div>

        <!-- All Content End -->
    </div>
</div>
<!-- /.row -->