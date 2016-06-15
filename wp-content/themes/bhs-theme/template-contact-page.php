<?php
/*
  Template Name: template-contact-page
 */
?>

<?php get_header(); ?>

                         <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                                    <img src="<?php bloginfo('template_url'); ?>/images/services-men-in-group.jpg" alt="front page image" class="img-fluid">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                                    <h2>Contact Us</h2>
                                    <p class="remove-left-padding">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente illo, ut amet libero eius quaerat ea excepturi modi repellendus maxime repudiandae voluptas veritatis minima et non unde inventore iste cupiditate.
                                    </p>
                                </div> <!-- END 6-column grid -->
                                 <?php
                                 if(isset($_POST['send'])) {
                                     $to = "jayevanjohnson@gmail.com";
                                     $subject = trim($_POST['name']) . " has filled out the Web Site Contact Form";
                                     $from = trim($_POST['email']);
                                     $headers = "From: $from";
                                     $message = trim(stripslashes($_POST['message']));
                                     mail($to, $subject,$message, $headers);
                                 }
                                 ?>

                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <form id="frmContact" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <div>
                                                    <label for="name">Name</label>
                                        <input id="name" name="name" type="text" value="<?php if(isset($_POST['name'])) { echo stripslashes($_POST['name']); } ?>" />
                                                    <span id="nameInfo">What's your name?</span></div>
                                        <div>
                                                    <label for="email">E-mail</label>
                                        <input id="email" name="email" type="text" value="<?php if(isset($_POST['email'])) { echo stripslashes($_POST['email']); } ?>" />
                                                    <span id="emailInfo">Valid E-mail please</span></div>
                                        <div>
                                                    <label for="message">Message</label>
                                                    <textarea id="message" name="message"><?php if(isset($_POST['message'])) { echo stripslashes($_POST['message']); } ?></textarea>
                                                    <span id="messageInfo">Write your message here</span></div>
                                        <div>
                                        <input id="send" name="send" type="submit" value="Send" /></div>
                                        </form>
                                        </div> <!-- END 6-column grid -->
                                    </div> <!-- END 12-column grid -->
                                </div> <!-- END .row -->
                            </div> <!-- END 12-column grid -->
                        </div> <!-- END .row -->


      <?php get_footer(); ?>
