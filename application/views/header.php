<?php
	/*$this->db->where('SCHOOL_ID','1');
	$query = $this->db->get('school');
	$abt = $query->row();	*/
	$this->db->where('ABOUT_ID','1');
	$query = $this->db->get('front_about_us');
	$abt = $query->row();
	
	if (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] != "" && $_SERVER['SERVER_PORT'] != 80) {
	$SERVER_NAME_GLOB = 'localhost:' . $_SERVER['SERVER_PORT'];
	//$SERVER_NAME_GLOB='demo-edumaster.in:'.$_SERVER['SERVER_PORT'];
	} else {
	$SERVER_NAME_GLOB = 'localhost';
	//$SERVER_NAME_GLOB='demo-edumaster.in';
	}
	$SITE_FOLDER_NAME_GLOB = 'edusystem_demo';
	$APK_DL_LINK = "http://".$SERVER_NAME_GLOB."/".$SITE_FOLDER_NAME_GLOB."/Apk/SchoolERP.apk";
	$USER_LIST_LINK = "http://".$SERVER_NAME_GLOB."/".$SITE_FOLDER_NAME_GLOB."/user_list.php";
	
?>

<!DOCTYPE HTML>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Edumaster : An Ultimate Education ERP</title>
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico" type="image/x-icon" />
<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>css/shortcodes.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>css/shortcodes.css" rel="stylesheet" type="text/css">
<link rel='stylesheet' id='layerslider-css' href="<?php echo base_url(); ?>css/layerslider.css" type='text/css' media='all' />
<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet" type="text/css">
<!--prettyPhoto-->
<link href="<?php echo base_url(); ?>css/prettyPhoto.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 7]>
<link href="css/font-awesome-ie7.css" rel="stylesheet" type="text/css">
<![endif]-->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--Fonts-->
<!--<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Bubblegum+Sans' rel='stylesheet' type='text/css'>-->
<link href="<?php echo base_url(); ?>css/fonts.css" rel="stylesheet" type="text/css">
<!--jquery-->
<script src="<?php echo base_url(); ?>js/modernizr-2.6.2.min.js"></script>
</head>
<body class="main">
<!--wrapper starts-->
<div class="wrapper"> 
  <!--header starts-->
  <header>
  
 
    <div class="container">
      <div class="row">
      <?php /* ?>
      <div class="logo"> 
	     <!--<img src="<?php echo $URL.'upload_document/'.$abt->LOGO_IMAGE;?>" alt="" title="" width = '150px' height='100px'>-->
      	<div class="logo">
          <a href="<?php echo site_url('home_controller/index/');?>" title="Edu Master">
            <img src="<?php echo $URL.'upload_document/'.$abt->LOGO; ?>" alt="Edu Master" title="Edu Master">
          </a>
        </div>
	 
	     <!--<a href="<?php echo site_url('home_controller/index/');?>" title="Edu Master"><img src="<?php echo base_url(); ?>images/logo.png" alt="Edu Master" title="Edu Master"></a> 
	  
	  --></div>
      <div class="contact-details">
        <p class="mail"> <a href="#"><?php echo $abt->EMAIL; ?></a> <span class="fa fa-envelope"></span> </p>
        <!--<p class="phone-no"> <i><?php echo $abt->PHONE_NO; ?></i> <span class="fa fa-phone"></span> </p>-->
		    <p class="phone-no"> <i><?php echo $abt->CONTACT_NO; ?></i> <span class="fa fa-phone"></span> </p>
      </div>
      <?php */ ?>

        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="logo">
            <a href="<?php echo site_url('home_controller/index/');?>" title="Edu Master">
              <img src="<?php echo $URL.'upload_document/'.$abt->LOGO; ?>" alt="Edu Master" title="Edu Master">
            </a>
          </div>
        </div>
        <div class="scol-md-6 col-sm-6 col-xs-12">

          <div class="header_right">

            <ul class="dt-sc-social-icons">
              <li><a href="<?php echo "https://".$abt->FACEBOOK_LINK; ?>" target="_blank" class="dt-sc-tooltip-bottom facebook" title="Facebook"><span class="fa fa-facebook"></span></a></li>
              <li><a href="<?php echo "https://".$abt->YOUTUBE_LINK; ?>" target="_blank"  class="dt-sc-tooltip-bottom youtube" title="Youtube"><span class="fa fa-youtube"></span></a></li>
              <li><a href="<?php echo "https://".$abt->TWITTER_LINK; ?>" target="_blank" class="dt-sc-tooltip-bottom twitter" title="Twitter"><span class="fa fa-twitter"></span></a></li>
              <li><a href="<?php echo "https://".$abt->GOOGLE_LINK; ?>" target="_blank" class="dt-sc-tooltip-bottom gplus" title="Google Plus"><span class="fa fa-google-plus"></span></a></li>
              <li><a href="<?php echo $APK_DL_LINK; ?>" target="_blank" class="dt-sc-tooltip-bottom android" title="Android"><span class="fa fa-android"></span></a></li>  
            </ul>
            <!-- End: dt-sc-social-icons -->

            

          </div>
          <!-- End: header_right -->
        </div>
      </div>
    </div>
    <!-- End: container -->
    <div id="menu-container">
      <div class="container">
        <nav id="main-menu">
          <div class="dt-menu-toggle" id="dt-menu-toggle">Menu<span class="dt-menu-toggle-icon"></span></div>
          <ul id="menu-main-menu" class="menu">
            <li id="menu-item-137" class="red menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-71 menu-item-depth-0 menu-item-simple-parent ">
              <a href="<?php echo site_url('home_controller/index/');?>">Home</a>
            </li>
            <li id="menu-item-138" class="orange menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-depth-0 menu-item-simple-parent ">
              <a href="<?php echo site_url('home_controller/about/');?>">About Us</a>
              <!--<ul class="sub-menu">
                <li id="menu-item-544" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-depth-1"><a href="<?php echo site_url('home_controller/about_intro/');?>">Introduction</a></li>
                <li id="menu-item-545" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-depth-1"><a href="<?php echo site_url('home_controller/about_history/');?>">History</a></li>
              </ul>-->
            </li>
            <li id="menu-item-142" class="yellow menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0 menu-item-simple-parent ">
              <a href="<?php echo site_url('home_controller/Services/');?>">Services</a>
            </li>
            <li id="" class="green menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0 menu-item-simple-parent ">
              <a href="<?php echo site_url('home_controller/news/');?>">News &amp; Updates</a>
            </li>
            <li id="menu-item-142" class="pink menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-depth-0 menu-item-simple-parent ">
              <a href="<?php echo site_url('home_controller/gallery/');?>">Gallery</a>
            </li>
            <!-- <li id="menu-item-138" class="orange menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-depth-0 menu-item-simple-parent ">
              <a>department</a>
              <ul class="sub-menu">
                <li id="menu-item-544" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-depth-1"><a href="<?php echo site_url('home_controller/School/');?>">Schools</a></li>
                <li id="menu-item-545" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-depth-1"><a href="<?php echo site_url('home_controller/College/');?>">collage</a></li>
              </ul>
            </li>
            <li id="menu-item-149" class="green menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0 menu-item-simple-parent  ">
              <a href="<?php echo site_url('home_controller/Philosophy/');?>">Philosophy</a>
            </li> -->
            <li id="" class="green menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0 menu-item-simple-parent ">
              <a href="<?php echo site_url('home_controller/staff/');?>">Staff</a>
            </li>
            <li id="" class="green menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0 menu-item-simple-parent ">
              <a href="<?php echo site_url('home_controller/faq/');?>">FAQ</a>
            </li>
            <li id="" class="green menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0 menu-item-simple-parent ">
              <a href="<?php echo site_url('home_controller/admission_inquiry/');?>">Admission Inquiry</a>
            </li>
            <li id="menu-item-138" class="yellow menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0 menu-item-simple-parent ">
              <a href="<?php echo site_url('home_controller/ContactUs/');?>">Contact Us</a>
            </li>
            <li id="menu-item-149" class="pink menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-depth-0 menu-item-simple-parent ">
              <a href="<?php echo $USER_LIST_LINK; ?>">login</a>
            </li>
          </ul>
        </nav>
        <!-- <ul class="dt-sc-social-icons">
          <li><a href="<?php echo "https://".$abt->FACEBOOK_LINK; ?>" target="_blank" class="dt-sc-tooltip-top facebook"><span class="fa fa-facebook"></span></a></li>
          <li><a href="<?php echo "https://".$abt->YOUTUBE_LINK; ?>" target="_blank"  class="dt-sc-tooltip-top youtube"><span class="fa fa-youtube"></span></a></li>
          <li><a href="<?php echo "https://".$abt->TWITTER_LINK; ?>" target="_blank" class="dt-sc-tooltip-top twitter"><span class="fa fa-twitter"></span></a></li>
          <li><a href="<?php echo "https://".$abt->GOOGLE_LINK; ?>" target="_blank" class="dt-sc-tooltip-top gplus"><span class="fa fa-google-plus"></span></a></li>
		      <li><a href="http://localhost/edusystem_demo/Apk/SchoolERP.apk" target="_blank" class="dt-sc-tooltip-top android"><span class="fa fa-android"></span></a></li>	
		    </ul> -->
      </div>
    </div>
  </header>