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
<title>News & Updates</title>
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
                    <h1>News & Updates</h1>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--primary starts-->
            <section id="primary" class="content-full-width">
                <!--container starts-->
                <div class="container">
                	<!-- <h2 class="dt-sc-hr-green-title">Course Overview</h2>  -->
                    
                    <!-- news_container -->
                    <div id="news_container" class="news_listing">
					<?php foreach ($news as $new){ ?>
                        <article>
							<div class="news_img">
							<?php if($new->IMAGE_URL){?>
                                <a href="<?php echo site_url('home_controller/news_details/'.$new->NEWS_ID);?>"><img src="<?php echo $URL.'upload_document/'.$new->IMAGE_URL; ?>" alt="" title=""> </a>
							<?php } else { ?>
								<a href="<?php echo site_url('home_controller/news_details/'.$new->NEWS_ID);?>"><img src="<?php echo $URL.'upload_document/no_image_available.jpg'; ?>" alt="" title=""> </a>
							<?php } ?>
							
                            </div>
                            <div class="news_content">
                                <h4><a href="<?php echo site_url('home_controller/news_details/'.$new->NEWS_ID);?>"><?php echo $new->NEWS_TITLE; ?></a></h4>
                                <!--<div class="news_date"><?php echo $new->START_DATE; ?> To <?php echo $new->END_DATE; ?></div>-->
								<div class="news_date"><?php echo date('d/m/Y',strtotime($new->START_DATE)); ?></div>
                                <div class="news_description">
                                    <?php echo $new->CONTENT_DESC; ?>
                                    <a class="dt-sc-button small read-more" href="<?php echo site_url('home_controller/news_details/'.$new->NEWS_ID);?>"> Read More <span class="fa fa-chevron-circle-right"> </span></a>
                                </div>
                            </div>
                        </article>
					<?php } ?>

                        

                        <!-- pagination -->
                        <div class="pagination_ci">

								<?php echo $links; ?>
	
							  
                        </div>
                        <!-- End: pagination -->

                    </div>
                    <!-- End: news_container -->
                    
                    <div class="dt-sc-hr"></div>

                       
                </div>
                <!--container ends-->
                
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
