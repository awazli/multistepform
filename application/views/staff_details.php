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
<title>Staff Details</title>
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
                    <h1>Staff Details</h1>
                    <div class="breadcrumb">
                        <a href="<?php echo site_url('home_controller/staff/');?>">Back</a>
                        <span class="fa fa-angle-double-right"></span>
                        <span class="current">Staff Details</span>
                    </div>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--primary starts-->
            <section id="primary" class="content-full-width staff_details_page">

                <div class="container">
                    <?php /* ?>
                    <h2 class="dt-sc-hr-green-title">Trustee</h2>
                    <?php foreach($user as $staff){ ?>
                    <div class="column dt-sc-one-fourth first">
                      <div class="dt-sc-team">
                        <div class="image"> <img class="item-mask" src="<?php echo base_url(); ?>images/mask.png" alt="" title="">
                            <img src="<?php echo $URL.'upload_document/'.$staff->IMAGE_URL; ?>" alt="" title="">
                          <div class="dt-sc-image-overlay"> <a href="#" class="link"><span class="fa"></span></a>
                          <a href="#" class="zoom"><span class="fa"></span></a> </div>
                        </div>
                        <div class="team-details">
                          <h4> <?php echo $staff->FIRST_NAME." ".$staff->MIDDLE_NAME; ?> </h4>
                          <h6> <?php  echo $staff->QUALIFICATION;  ?> </h6>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                    <?php */ ?>

                    <!-- staff_details -->
                    <div class="staff_details">

                        <div class="row">
							<?php foreach ($user as $us) { ?>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                <div class="sd_box">
                                    <p class="sd_image">
									<?php if($us->IMAGE_URL) {?>
                                        <img src="<?php echo $URL.'upload_document/'.$us->IMAGE_URL; ?>" alt="" title="">
									<?php } else { ?>
										<img src="<?php echo $URL.'upload_document/1462272022.jpg'; ?>" alt="" title="">
									<?php } ?>
                                    </p>
                                    <p class="sd_heading"><?php echo $us->FIRST_NAME.' '.$us->LAST_NAME; ?></p>
                                    <!--<p class="sd_qualification">M.A., B.ED.</p>-->
                                </div>
                            </div>
							<?php } ?>
                        </div>

                    </div>
                    <!-- End: staff_details -->

                    <!-- pagination -->
                    <div class="pagination_ci">
						<?php echo $links; ?>
                    </div>
                    <!-- End: pagination -->


                    <div class="dt-sc-hr"></div>
                </div>
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
