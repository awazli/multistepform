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
<title>Schools</title>
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
                	<h1>Our School Overview</h1>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--container starts-->
            <div class="container">
            	<!--primary starts-->
            	<section id="primary" class="content-full-width">

                    <div class="column dt-sc-one-half first" style="margin:0 auto !important; float:none;">
                    	<div class="about-slider-wrapper">
                            <ul class="about-slider">
                               	<li> <img src="<?php echo $URL.'upload_document/'.$aboutUs->PHOTO1; ?>" alt="" title=""> </li>
                                <li> <img src="<?php echo $URL.'upload_document/'.$aboutUs->PHOTO2; ?>" alt="" title=""> </li>
                                <li> <img src="<?php echo $URL.'upload_document/'.$aboutUs->PHOTO3; ?>" alt="" title=""> </li>
                            </ul>
                        </div>	
                    </div>
                    
                    <!--dt-sc-one-half starts-->
                     <div  class='column dt-sc-one-half' style="width:100% !important;" >
              <h2>Our School </h2>
              <?php echo $aboutUs->CONTENT; ?>
               <p>&nbsp;</p>
            </div>
                    <!--dt-sc-one-half ends-->
                    
                    <div class="dt-sc-hr"></div>
                    
                  
                    
                    <div class="dt-sc-hr"></div>
                    
                    
                    <div class="dt-sc-hr"></div>
                    
                    
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
