<?php $URL = $this->session->userdata('url'); ?>
<!DOCTYPE HTML>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en-gb" class="no-js"> <!--<![endif]-->
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
<title>Contact Us</title>
<meta name="description" content="">
<meta name="author" content="">
</head>
<body>
	<!--wrapper starts-->
    <div class="wrapper">
        <!--header starts-->
        <?php include('header.php'); ?>
        <!--header ends-->
        <!--main starts-->
        <div id="main">
        	<!--breadcrumb-section starts-->
            <div class="breadcrumb-section">
            	<div class="container">
                	<h1>Contact Us</h1> 
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--container starts-->
            <div class="container">
            	<!--primary starts-->
            	<section id="primary" class="content-full-width">
				
					<div class="contact_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.049797090341!2d72.79555110039371!3d21.190180678156636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04dd16ed32a8d%3A0x88e2492ad56bff57!2sWestern+Corridor%2C+Hazira+-+Adajan+Rd%2C+Guru+Ram+Pavan+Bhumi%2C+Adajan+Gam%2C+Adajan%2C+Surat%2C+Gujarat+395009!5e0!3m2!1sen!2sin!4v1459828548184" frameborder="0"allowfullscreen></iframe>
                    </div>
					<!--<div style="width:100%; height:500px;"><iframe src="https://maps.google.it/maps?q=<?php echo $aboutUs->ADDRESS; ?>&output=embed" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></div>-->
                    
                    <div class="dt-sc-hr"> </div>
                    <!-- form_container -->
                    <div class="form_container">             
                        <form class="contact-form" method="post" action="">
                            <h2>Inquiry Form</h2>
                            <p class="column dt-sc-one-third first">
                                <input id="name" name="name" type="text" placeholder="Name" required>
                            </p>
                            <p class="column dt-sc-one-third">
                                <input id="email" name="email" type="email" placeholder="Email ID" required>
                            </p>
                            <p class="column dt-sc-one-third">
                                <input id="subject" name="subject" type="text" placeholder="Subject" required>
                            </p>
                            <p>
                                <textarea id="message" name="message" placeholder="Message"></textarea>
                            </p>
                                <div id="ajax_contact_msg"> </div>
                            <p>
                                <input name="submit" type="submit" id="submit" class="dt-sc-button medium" value="Send">
                            </p>
                        </form>
                    </div>
                    <div class="dt-sc-hr"></div>
                    <!-- End: form_container -->

                    <!--dt-sc-two-third starts-->
                    <!-- <div class="column dt-sc-three-fourth first contact_form_outer">
                        <form class="contact-form" method="post" action="">
                        	<h2>We'd Like to Hear From You!</h2>
                            <p class="column dt-sc-one-third first">
                                <input id="name" name="name" type="text" placeholder="Name" required>
                            </p>
                            <p class="column dt-sc-one-third">
                                <input id="email" name="email" type="email" placeholder="Email ID" required>
                            </p>
                            <p class="column dt-sc-one-third">
                            	<input id="subject" name="subject" type="text" placeholder="Subject" required>
                            </p>
                            <p>
                            	<textarea id="message" name="message" placeholder="Message"></textarea>
                            </p>
                            <div id="ajax_contact_msg"> </div>
                            <p>
                                <input name="submit" type="submit" id="submit" class="dt-sc-button medium" value="Send">
                            </p>
                        </form>
                    </div> -->
                    <!--dt-sc-two-third ends-->
                    
                    <!--dt-sc-one-third starts-->
                    <!-- <div class="column dt-sc-one-fourth class_hours">
                    	
                        <div class="dt-sc-hr-small"></div>
                        <p><strong><span class="highlighter">We care</span> about your dearest</strong></p>
                        <ul class="dt-sc-social-icons">
                        	<li class="facebook"><a href="#" title="Facebook" class="dt-sc-tooltip-bottom"><img src="<?php echo base_url(); ?>images/facebook.png" alt="" title=""></a></li>
                            <li class="twitter"><a href="#" title="Twitter" class="dt-sc-tooltip-bottom"><img src="<?php echo base_url(); ?>images/twitter.png" alt="" title=""></a></li>
                            <li class="gplus"><a href="#" title="Google Plus" class="dt-sc-tooltip-bottom"><img src="<?php echo base_url(); ?>images/gplus.png" alt="" title=""></a></li>
                            <li class="pinterest"><a href="#" title="Pinterest" class="dt-sc-tooltip-bottom"><img src="<?php echo base_url(); ?>images/pinterest.png" alt="" title=""></a></li>
                        </ul>
                    </div> -->
                    <!--dt-sc-one-third ends-->
                    
                </section>
                <!--primary ends-->
            </div>
            <!--container ends-->
        </div>
        <!--main ends-->
        
        <!--footer starts-->
        <?php include('footer.php'); ?>
        <!--footer ends-->
        
    </div>
    <!--wrapper ends-->
    <a href="#" title="Go to Top" class="back-to-top">To Top ↑</a>

</body>
</html>
