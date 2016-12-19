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
<title>FAQ</title>
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
                    <h1>FAQ</h1>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--primary starts-->
            <section id="primary" class="content-full-width">
                <!--container starts-->
                <div class="container">
                	<!-- <h2 class="dt-sc-hr-green-title">Course Overview</h2>  -->
                    
                    <!--dt-sc-one-half starts-->
                    <!-- <div class="dt-sc-one-half column first">
                        <div class="dt-sc-toggle-frame-set">
                            <?php foreach($course1 as $cors1){?>
							<div class="dt-sc-toggle-frame">
                                <h5 class="dt-sc-toggle-accordion active"><a href="#"><?php echo $cors1->Course_Title; ?></a></h5>
                                <div class="dt-sc-toggle-content">
                                    <div class="block">
                                       <?php echo $cors1->Description; ?> 
                                    </div>
                            	</div>
                            </div>
							<?php } ?>
                    	</div>
                    </div> -->
                    <!--dt-sc-one-half ends-->
                    
                    
                    <!--dt-sc-one-half starts-->
                    <div class="col-lg-12">
                        <div class="dt-sc-toggle-frame-set course">
							<?php foreach($course2 as $cors2){?>
                            <h5 class="dt-sc-toggle-accordion active"><a href="#"><?php echo $cors2->Course_Title; ?></a></h5>
                            <div class="dt-sc-toggle-content">
                                <div class="block">
                                    <?php echo $cors2->Description; ?>
                                </div>
                            </div>
							<?php } ?>
                            
                        </div>
                    </div> 
                    <!--dt-sc-one-half ends-->
                    
                       
                </div>
                <!--container ends-->
                <div class="dt-sc-hr"></div>
                
                
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
