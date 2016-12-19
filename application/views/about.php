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
<title>About Us</title>
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
                	<h1>About us</h1>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--container starts-->
            <div class="container about_page">
            	<!--primary starts-->
            	<section id="primary" class="content-full-width about_page">
                    
                    <!-- about_container -->
                    <div class="about_container">

                        <!-- slider_container -->
                        <div class="slider_container">
                            <div class="about-slider-wrapper">
                                <ul class="about-slider">
                                    <li> <img src="<?php echo $URL.'upload_document/'.$aboutUs->PHOTO3; ?>" alt="" title=""> </li>
                                    <li> <img src="<?php echo $URL.'upload_document/'.$aboutUs->PHOTO2; ?>" alt="" title=""> </li>
                                    <li> <img src="<?php echo $URL.'upload_document/'.$aboutUs->PHOTO1; ?>" alt="" title=""> </li>
                                </ul>
                            </div>  
                        </div>
                        <!-- End: slider_container -->

                        <h2><?php echo $aboutUs->SCHOOL_NAME; ?></h2>
                        <?php echo $aboutUs->CONTENT; ?> 

                    </div>
                    <!-- End: about_container -->

                    <?php /* ?>
                    <div class="column dt-sc-one-half first">
                    	<div class="about-slider-wrapper">
                            <ul class="about-slider">
                                <li> <img src="<?php echo $URL.'upload_document/'.$aboutUs->PHOTO3; ?>" alt="" title=""> </li>
                                <li> <img src="<?php echo $URL.'upload_document/'.$aboutUs->PHOTO2; ?>" alt="" title=""> </li>
                                <li> <img src="<?php echo $URL.'upload_document/'.$aboutUs->PHOTO1; ?>" alt="" title=""> </li>
                            </ul>
                        </div>	
                    </div>
                    
                    <!--dt-sc-one-half starts-->
                    <div  class="column dt-sc-one-half">
                    
                    <!-- <h2><u><?php echo $aboutUs->SCHOOL_NAME; ?></u> </h2> -->
                    <h2><?php echo $aboutUs->SCHOOL_NAME; ?></h2>
              		<?php echo $aboutUs->CONTENT; ?> 
                        <!-- </br>
                        <a href="#" class="dt-sc-button small read-more"> Read More <span class="fa fa-chevron-circle-right"> </span></a>    -->
                    </div> 
                    <!--dt-sc-one-half ends-->
                    <?php */ ?>
                    <div class="dt-sc-hr"></div>
                    
                    <!--dt-sc-one-half starts-->
                    
                    <!--dt-sc-one-half ends--> 
                    <?php /* ?>
                    <div class="dt-sc-hr"></div>
                    
                    <h2 class="dt-sc-hr-green-title">Our Teachers</h2>
                    <?php foreach($user as $staff){ ?>
                    <div class="column dt-sc-one-fourth first">
                      <div class="dt-sc-team">
                        <div class="image"> <img class="item-mask" src="<?php echo base_url(); ?>images/mask.png" alt="" title=""> 
                        <img src="<?php echo $URL.'upload_document/'.$staff->IMAGE_URL; ?>" alt="" title="">
                          <div class="dt-sc-image-overlay"> <a href="#" class="link"><span class="fa"></span></a> <a href="#" class="zoom"><span class="fa"></span></a> </div>
                        </div>
                        <div class="team-details">
                          <h4> <?php echo $staff->FIRST_NAME." ".$staff->MIDDLE_NAME; ?> </h4>
                          <h6> <?php  echo $staff->QUALIFICATION;  ?> </h6>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                    
                    <div class="dt-sc-hr"></div>
                    <?php */ ?>
                    
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
    <!--Java Scripts-->
    
</body>
</html>
