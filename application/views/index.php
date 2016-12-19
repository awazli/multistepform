<?php $URL = $this->session->userdata('url'); ?>
<!DOCTYPE HTML>
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Edumaster : An Ultimate Education ERP</title>
<meta name="description" content="">
<meta name="author" content="">

</head>
<body class="main">
<!--wrapper starts-->
<div class="wrapper"> 
  <?php include('header.php'); ?>
  <div id="main"> 
    
    <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
  <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

    
    <!--slider starts-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
	<?php $i = 1; foreach($slider as $sldr){ ?>
    <div class="item <?php if($i == 1){ echo 'active'; } ?>">
     <img src="<?php echo $URL.'upload_slider/'.$sldr->Slider_img; ?>" width="100%">
	</div>
	<?php $i++; } ?>

    <!--<div class="item ">
      <img src="<?php echo base_url(); ?>images/slider2.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="<?php echo base_url(); ?>images/slider1.jpg" alt="Flower">
    </div> -->
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
    

    
    <!--primary starts-->
    <section id="primary" class="content-full-width home_page">
      <!--container starts-->
      <div class="container">

        <?php /* ?>
    		<?php foreach($activity as $act){ ?>
            <div class="dt-sc-one-fourth column first">
              <div class="dt-sc-ico-content type1">
                <div class="icon"> <span class="icon-outer"> <img src="<?php echo $URL.'upload_activities/'.$act->Act_Photo; ?>" alt="" title=""> <span class="infolayer"> <a href="#"><i class="fa fa-link"></i></a> </span> </span> </div>
                <h4><a href="#"><?php echo $act->Act_Title; ?></a></h4>
                <p><?php echo $act->Act_Description; ?></p>
              </div>
            </div>
    		<?php } ?>
        <?php */ ?>

        <?php foreach($activity as $act){ ?>
            <div class="dt-sc-one-fourth column first featured_block">
              <div class="dt-sc-ico-content type1">
                <div class="featured_img">
                  <img src="<?php echo $URL.'upload_activities/'.$act->Act_Photo; ?>" alt="" title=""> 
                </div>
                <!-- <div class="icon"> 
                  <span class="icon-outer"> 
                    <img src="<?php echo $URL.'upload_activities/'.$act->Act_Photo; ?>" alt="" title=""> 
                    <span class="infolayer"> <a href="#"><i class="fa fa-link"></i></a> </span> </span> 
                </div> -->
                <h4><?php echo $act->Act_Title; ?></h4>
                <p><?php echo $act->Act_Description; ?></p>
              </div>
            </div>
        <?php } ?>

    
        <?php /* ?>
        <div class="dt-sc-one-fourth column">
          <div class="dt-sc-ico-content type1">
            <div class="icon"> <span class="icon-outer"> <img src="<?php echo base_url(); ?>images/service2.jpg" alt="" title=""> <span class="infolayer"> <a href="#"><i class="fa fa-link"></i></a> </span> </span> </div>
            <h4><a href="#">Music Class</a></h4>
            <p>Decor ostdcaer urabitur ultrices posuere mattis. Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, invest tibulum nisl ligula</p>
          </div>
        </div>
        <div class="dt-sc-one-fourth column">
          <div class="dt-sc-ico-content type1">
            <div class="icon"> <span class="icon-outer"> <img src="<?php echo base_url(); ?>images/service3.jpg" alt="" title=""> <span class="infolayer"> <a href="#"><i class="fa fa-link"></i></a> </span> </span> </div>
            <h4><a href="#">Yoga Class</a></h4>
            <p>Rabitur ultrices posuere mattis. Nam ullamcorper, diam sit  euismod pelleo ntesque, eros risus rhoncus libero, invest tibulum nisl gedretu osterftra ligula</p>
          </div>
        </div>
        <div class="dt-sc-one-fourth column">
          <div class="dt-sc-ico-content type1">
            <div class="icon"> <span class="icon-outer"> <img src="<?php echo base_url(); ?>images/service4.jpg" alt="" title=""> <span class="infolayer"> <a href="#"><i class="fa fa-link"></i></a> </span> </span> </div>
            <h4><a href="#">Kung fu Class</a></h4>
            <p>Curabitur ultrices posuere mattis. Nam ullamcorper, diam sit amet euismod pelleo ntesque, eros risus rhoncus libero, invest tibulum nisl ligula</p>
          </div>
        </div>
        <?php */ ?>

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
            <h2>Play As You Learn</h2>
            <!--dt-sc-one-half starts-->
            <div class="dt-sc-one-half column first">
            <?php $i=1; foreach($facility as $faci){ ?>
              <div class="dt-sc-ico-content type2">
                <div class="icon"><span> <?php echo $i; ?> </span></div>
                <h4><a href="#" target="_blank"><?php echo $faci->TITLE; ?></a></h4>
                <p><?php echo $faci->DESCRIPTION ; ?>....</p>
              </div>
              <?php $i++; } ?>
              <div class="dt-sc-hr-very-small"></div>

            </div>
            <!--dt-sc-one-half ends-->

          </div>
          <!--dt-sc-one-half ends-->

          <!--dt-sc-one-half starts-->
          <div class="dt-sc-one-half column">
            <div class="ad-slider-wrapper">
              <ul class="ad-slider">
                <li> <img src="<?php echo base_url(); ?>images/brocher-home.png" alt="" title=""> </li>
              </ul>
            </div>
          </div>
          <!--dt-sc-one-half ends-->
        </div>
        <!--container ends-->
      </section>
      <!--fullwidth-background ends-->
      <?php */ ?>

      <?php /* ?>
      <div class="dt-sc-hr"></div>
      <!--container starts-->
      <div class="container">
        <h2 class="dt-sc-hr-green-title">Our Portfolio</h2>

        <!--portfolio-content starts-->
        <div class="front-portfolio-container">
          <?php $i = 1; foreach($gallery as $img){ ?>
          <div class="portfolio-content portfolio-content<?php echo $i; ?>">
            <div class="front-portfolio">
              <div class="portfolio-outer">
                <div class="portfolio-thumb"> <img src="<?php echo $URL.'upload_gallery/'.$img->groupImage; ?>" alt="" title="">
                  <div class="image-overlay">
                    <h5><a href="#"><?php echo $img->gHeading; ?></a></h5>
                    <a href="#" ><span class="fa fa-link"></span></a><?php  foreach($photo as $im){ ?>
                    <a href="<?php echo base_url(); ?>images/<?php echo $im->gPhoto.'.jpg'; ?>" data-gal="prettyPhoto[gallery]" >
					<?php } ?>
                    <span class="fa fa-search"></span></a> </div>
                </div>
              </div>
            </div>
          </div>
          <?php $i++; } ?>
          <div class="dt-sc-hr-small"></div>

        </div>

        <!--front-portfolio-container ends-->

      </div>
      <!--container ends-->
      <?php */ ?>

      <?php /* ?>
      <div class="dt-sc-hr"></div>
      <!--fullwidth-background starts-->
      <section class="fullwidth-background orange-bg">
        <!--container starts-->
        <div class="container" style="height:100px;">
          <h2 class="dt-sc-hr-white-title">"Achieve your Goals...  Achieve your Dreams..." </h2>
        </div>
      </section>
      <div class="dt-sc-hr"></div>
      <div class="container">
        <h2 class="dt-sc-hr-green-title">Our Staffs</h2>
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
      </div>

      <div class="dt-sc-hr"></div>
      <section class="fullwidth-background dt-sc-parallax-section product_bg">
        <div class="container"> </div>
      </section>
      <?php */ ?>

    </section>
  </div>
  <?php include('footer.php'); ?>
  
  
</div>
<a href="#" title="Go to Top" class="back-to-top">To Top ↑</a> 
</body>
</html>
