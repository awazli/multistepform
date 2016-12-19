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
<title>Staff</title>
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
                    <h1>Staff</h1>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--primary starts-->
            <section id="primary" class="content-full-width staff_page">

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

                    <!-- staff_listing -->
                    <div class="staff_listing">

                        <div class="staff_listing_box">
                            <header>Administrative Staff</header>
                            <div class="staff_listing_body">
                                <div class="sl_box">
                                    <a href="<?php echo site_url('home_controller/staff_details/7');?>"><img src="../../images/staff/super_admin.png" alt=""></a>
                                </div>
                                <div class="sl_box">
                                    <a href="<?php echo site_url('home_controller/staff_details/1');?>"><img src="../../images/staff/admin.png" alt=""></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End: staff_listing -->

                    <!-- staff_listing -->
                    <div class="staff_listing">

                        <div class="staff_listing_box">
                            <header>Non Teaching Staff</header>
                            <div class="staff_listing_body">
                                <div class="sl_box">
                                    <a href="<?php echo site_url('home_controller/staff_details/3');?>"><img src="../../images/staff/supervisor_section.png" alt=""></a>
                                </div>
                                <div class="sl_box">
                                    <a href="<?php echo site_url('home_controller/staff_details/8');?>"><img src="../../images/staff/account_section.png" alt=""></a>
                                </div>
                                <div class="sl_box">
                                    <a href="<?php echo site_url('home_controller/staff_details/9');?>"><img src="../../images/staff/hr_section.png" alt=""></a>
                                </div>
                                <div class="sl_box">
                                    <a href="<?php echo site_url('home_controller/staff_details/13');?>"><img src="../../images/staff/library.png" alt=""></a>
                                </div>
                                <div class="sl_box">
                                    <a href="<?php echo site_url('home_controller/staff_details/12');?>"><img src="../../images/staff/transports.png" alt=""></a>
                                </div>
                                <div class="sl_box">
                                    <a href="<?php echo site_url('home_controller/staff_details/10');?>"><img src="../../images/staff/store_purchase.png" alt=""></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End: staff_listing -->

                    <!-- staff_listing -->
                    <div class="staff_listing">

                        <div class="staff_listing_box">
                            <header>Academic Staff</header>
                            <div class="staff_listing_body">
                                <div class="sl_box">
                                    <a href="<?php echo site_url('home_controller/staff_details/4');?>"><img src="../../images/staff/teacher_section.png" alt=""></a>
                                </div>
                                <!--<div class="sl_box">
                                    <a href="<?php echo site_url('home_controller/staff_details/5');?>"><img src="../../images/staff/student_section.png" alt=""></a>
                                </div>-->
                            </div>
                        </div>

                    </div>
                    <!-- End: staff_listing -->

                    <?php /* ?>
                    <!-- staff_listing -->
                    <div class="staff_listing">

                        <div class="staff_listing_box">
                            <header>Subordinate Staff</header>
                            <div class="staff_listing_body">
                                <div class="sl_box">
                                    <a href="<?php echo site_url('home_controller/staff_details/');?>"><img src="../../images/staff/clerk.png" alt=""></a>
                                </div>
                                <div class="sl_box">
                                    <a href="<?php echo site_url('home_controller/staff_details/');?>"><img src="../../images/staff/peon.png" alt=""></a>
                                </div>
                                <div class="sl_box">
                                    <a href="<?php echo site_url('home_controller/staff_details/');?>"><img src="../../images/staff/sweeper.png" alt=""></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End: staff_listing -->
                    <?php */ ?>


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
