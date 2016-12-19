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
<title>Gallery</title>
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
                	<h1>Gallery</h1>
                    <!--<div class="breadcrumb">
                        <a href="index.html">Home</a>
                        <span class="fa fa-angle-double-right"></span>
                        <span class="current">Portfolio Four Column</span>
                    </div>-->
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--container starts-->
            <div class="container">
            	<!--primary starts-->
            	<section id="primary" class="content-full-width gallery_page">
                    <!--<div class="dt-sc-sorting-container">
                        <a href="#" title="" class="active-sort" data-filter="*"> All (12) </a>
                        <a href="#" title="" data-filter=".arts"> Arts (1) </a>
                        <a href="#" title="" data-filter=".innovation"> Innovation (3) </a>
                        <a href="#" title="" data-filter=".fun"> Fun (4) </a>
                        <a href="#" title="" data-filter=".listen"> Listen (5) </a>
                        <a href="#" title="" data-filter=".music"> Music (6) </a>
                    </div>--> 

                    
                    <!--dt-sc-portfolio-container starts-->
                    <div class="dt-sc-portfolio-container">
                        
                        <?php foreach($gallery as $img){ ?>
                        
                        <div class="portfolio dt-sc-one-fourth column all music">
                            <div class="gallery_album">
                                <div class="portfolio-thumb">
    							<a href="<?php  echo site_url('home_controller/gallery_details/'.$img->ALBUM_ID)?>">
                                	<img class="item-mask" src="<?php echo base_url(); ?>images/portfolio-mask.png" alt="" title="">
                                    <img src="<?php echo $URL.'upload_document/'.$img->COVER_IMAGE; ?>" alt="" title="">
    							</a>	
                                    <!-- <div class="image-overlay">
                                        
                                    </div> -->
                                </div>
                                <div class="portfolio-detail">
                                    <div class="portfolio-title">
                                        <h5><a href="<?php  echo site_url('home_controller/gallery_details/'.$img->ALBUM_ID)?>"> <?php echo $img->ALBUM_NAME; ?> </a></h5>
                                        <!-- <p><a href="#"><?php echo $img->Details; ?></a></p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                                                
                    </div>
                    <!--dt-sc-portfolio-container ends-->

                    <!-- pagination -->
                        <div class="pagination_ci">
                            
                            <?php echo $links; ?>                
                            
                        </div>
                        <!-- End: pagination -->

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
