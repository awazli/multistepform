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
<title>News Details</title>
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
                    <h1>News Details</h1>
                    <div class="breadcrumb">
                        <a href="<?php echo site_url('home_controller/news/');?>">Back</a>
                        <span class="fa fa-angle-double-right"></span>
                        <span class="current">News Details</span>
                    </div>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--primary starts-->
            <section id="primary" class="content-full-width">
                <!--container starts-->
                <div class="container">
                	<!-- <h2 class="dt-sc-hr-green-title">Course Overview</h2>  -->
                    
                    <!-- news_container -->
                    <div id="news_container" class="news_details">

                        <article>
                            <h1><?php echo $news->NEWS_TITLE; ?></h1>
                            <!--<div class="news_date"><?php echo $news->START_DATE; ?> To <?php echo $news->END_DATE; ?></div>-->
							<div class="news_date"><?php echo date('d/m/Y',strtotime($news->START_DATE)); ?></div>
                            <div class="news_img">
                            <?php if($news->IMAGE_URL){?>
                                <img src="<?php echo $URL.'upload_document/'.$news->IMAGE_URL; ?>" alt="" title=""> 
							<?php } else { ?>
								<img src="<?php echo $URL.'upload_document/no_image_available.jpg'; ?>" alt="" title=""> 
							<?php } ?>
                            </div>
                            <div class="news_content">
                                
                                <div class="news_description">
                                    <p><?php echo $news->CONTENT_DESC;?></p>
                                    <!--<blockquote>
                                        <q>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Maecenas nec odio et ante tincidunt tempus.</q> 
                                    </blockquote>-->
                                   
                                </div>
                            </div>
                        </article>


                    </div>
                    <!-- End: news_container -->


                       
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
