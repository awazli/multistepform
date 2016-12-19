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
<title>Services</title>
<meta name="description" content="">
<meta name="author" content="">

</head>
<body class="main">
	<!--wrapper starts-->
    <div class="wrapper">
        <!--header starts-->
        <?php include('header.php'); ?>
        <!--header ends-->
        <!--main starts-->
        <div id="main">
        	<!--fullwidth_banner starts-->
            <!-- <section class="fullwidth_banner">
            	<div class="container">
	            	<h1> Our Services </h1>
                </div>
            </section> -->
            <!--fullwidth_banner ends-->
            <!--breadcrumb-section starts-->
            <div class="breadcrumb-section">
                <div class="container">
                    <h1>Services</h1>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--primary starts-->
            <section id="primary" class="content-full-width services_page">
                <!--container starts-->
                <div class="container">
					<?php foreach ($service as $ser){ ?>
                    <!-- services_block -->
                	<div class="services_block">
                        <h2><?php echo $ser->TITLE; ?></h2>
                        <div class="services_content">
                            <div class="img_container">
                                <?php if($ser->IMAGE_URL){ ?>
									<img src="<?php echo $URL.'upload_document/'.$ser->IMAGE_URL; ?>" alt="" title=""> 
								<?php } else { ?>
								<img src="<?php echo $URL.'upload_document/no_image_available.jpg'; ?>" alt="" title=""> 
								<?php } ?>
                            </div>
                            <p><?php echo $ser->DESCRIPTION; ?></p>
                            <p>&nbsp;</p>
                        </div>
                    </div>
					<?php } ?>
                    
					 <!-- pagination -->
                        <div class="pagination">

								<?php echo $links; ?>
	
							  
                        </div>
                        <!-- End: pagination -->
                       
                    <div class="dt-sc-hr"></div>
                </div>
                <!--container ends-->
                <?php /* ?>
                <div class="dt-sc-hr"></div>
                
                
                <!--fullwidth-background starts-->
                <section class="fullwidth-background dt-sc-parallax-section turquoise-bg">
                    <!--container starts-->
                    <div class="container">
                        <!--dt-sc-one-half starts-->
                        <div class="dt-sc-one-half column first">
                            <h2>What do we teach?</h2>
                            <!--dt-sc-one-half starts-->
                            <div class="dt-sc-one-half column first">
                                <?php $i=1; foreach($facility as $faci){ ?>
                                <div class="dt-sc-ico-content type2">
                                    <div class="icon"> 
                                        <span> <?php echo $i; ?> </span> 
                                    </div>
                                    <h4><a href="#" target="_blank"> <?php echo $faci->TITLE; ?> </a></h4>
                                    <p><?php echo $faci->DESCRIPTION ; ?>....</p>
                                </div>
                                <div class="dt-sc-hr-very-small"></div>
                                <?php $i++; } ?>
                                
                            </div>
                        </div>
                        <!--dt-sc-one-half ends-->
                        
                        <!--dt-sc-one-half starts-->
                        <div class="dt-sc-one-half column">
                        
                            <div class="ad-slider-wrapper">
                                <ul class="add-slider">
                   
                                    <li> <img src="<?php echo base_url(); ?>images/brocher-home.png" alt="" title=""> </li>
                                </ul>
                            </div>
                        </div>
                        <!--dt-sc-one-half ends-->
                    </div>
                    <!--container ends-->
                </section>
                <!--fullwidth-background ends-->
                
                
                <div class="dt-sc-hr"></div>
                <!--container starts-->
                <div class="container">
                	<!--dt-sc-one-half starts-->
                         
                    <!--dt-sc-one-half ends--> 
                    <div class="dt-sc-hr-very-small"></div>  
                    <!--dt-sc-one-half starts-->
                          
                    <!--dt-sc-one-half ends--> 
                </div>
                <!--container ends-->
                <div class="dt-sc-hr"></div>  
                <?php */ ?>
                    <?php /* ?>
                    <!--fullwidth-background starts-->
                    <section class="fullwidth-background turquoise-plain-bg">
                        <!--container starts-->
                        <div class="container"> 
                        	<h2 class="dt-sc-hr-white-title">Admission Form</h2> 
                            <form method="post" action="" class="admission-form">
                                <p class="dt-sc-one-third column first">
                                    <input id="name" name="name" type="text" placeholder="Name" required>
                                </p>
                                <p class="dt-sc-one-third column">
                                    <input id="age" name="age" type="text" placeholder="Age" required>
                                </p>
                                <p class="dt-sc-one-third column">
                                    <input id="class" name="class" type="text" placeholder="Class" required>
                                </p>
                                
                                <p class="dt-sc-one-third column first">
                                    <input id="medium" name="medium" type="text" placeholder="Medium" required>
                                </p>
                                <p class="dt-sc-one-third column">
                                    <input id="contact" name="contact" type="text" placeholder="Contact NO" required>
                                </p>
                                <p class="dt-sc-one-third column">
                                    <input id="email" name="email" type="text" placeholder="Mail ID" required>
                                </p>
                                <p>
                                	<textarea id="Desc" name="Desc" placeholder="Description"></textarea>
                                </p>
                                <div id="ajax_admission_msg"> </div>
                                <p class="aligncenter">
                                    <input name="submit" type="submit" id="submit" value="Submit Form">
                                </p>
                            </form>
                        </div>
                        <!--container ends-->
                    </section>
                    <!--fullwidth-background ends--> 
                    <?php */ ?>
            </section>
            <!--primary ends-->
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
