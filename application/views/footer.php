<?php
	$this->db->where('ABOUT_ID','1');
	$query = $this->db->get('front_about_us');
	$abt = $query->row();
	
	$this->db->limit(3);
	$query1 = $this->db->get('news');
	$news01 = $query1->result();
	
	$this->db->limit(6);
	$this->db->where('STATUS',1);
	$this->db->order_by('SORT_ORDER');
	$query20 = $this->db->get('front_services');
	$service = $query20->result();
?>

  <footer>
    <div class="footer-widgets-wrapper">
      <div class="container">

        <div class='column dt-sc-one-fourth first'>
          <aside id="text-2" class="widget widget_text">
            <!-- <h3 class="red_sketch widgettitle">About <?php echo $abt->SCHOOL_NAME; ?></h3> -->
            <h3 class="red_sketch widgettitle">About Us</h3>
            <div class="textwidget">
              <p>Happy <strong> <?php echo $abt->SCHOOL_NAME; ?> </strong> comes with powerful theme options, which empowers you to quickly and easily build incredible store.</p>
              <ul>
                <li> English Grammar Class </li>
                <li> Music class </li>
              </ul>
            </div>
          </aside>
        </div>

        <!-- <div class='column dt-sc-one-fourth '>
          <aside id="woocommerce_products-3" class="widget woocommerce widget_products">
            <h3 class="green_sketch widgettitle">Recent Products</h3>
            <ul class="product_list_widget">
              <li><i style="color:#F27C7E; padding-right:10px; font-weight:bold; ">1.</i>learning environment</li>
              <li><i style="color:#F7C44E; padding-right:10px; font-weight:bold; ">2.</i>tranning && management staff</li>
              <li><i style="color:#ACC158; padding-right:10px; font-weight:bold; ">3.</i>capital planning</li>
              <li><i style="color:#4CBCD4; padding-right:10px; font-weight:bold; ">4.</i>Parents and community members</li>
              <li><i style="color:#F27C7E; padding-right:10px; font-weight:bold; ">5.</i>recognize school facilities and training</li>
            </ul>
          </aside>
        </div> -->

        <div class='column dt-sc-one-fourth '>
          <aside id="woocommerce_products-3" class="widget woocommerce widget_products">
            <h3 class="green_sketch widgettitle">Services</h3>
            <ul class="product_list_widget">
			<?php foreach ($service as $s)  {?>
              <li><i style="color:#F27C7E; padding-right:10px; font-weight:bold; "></i><?php echo $s->TITLE; ?></li>
			<?php } ?>
            </ul>
          </aside>
        </div>

        <!-- <div class='column dt-sc-one-fourth '>
          <aside id="my_twitter-2" class="widget tweetbox">
            <h3 class="yellow_sketch widgettitle"><a href='http://twitter.com/iamdesigning/' title='Twitter Feeds'>Twitter Feeds</a></h3>
            <ul class='tweet_list'>
              <li class="tweet">We appreciate the school management software and services from Edumaster. The design is really impressive. We look forward to their continued support and services. </li>
              <li class="twitter">We could not have recieved this type of services anywhere else. Excellent team which is well organized and helped us to reach our Goal on time.</li>
            </ul>
          </aside>
        </div> -->

        <div class='column dt-sc-one-fourth '>
          <aside id="woocommerce_products-3" class="widget woocommerce widget_news">
            <h3 class="yellow_sketch widgettitle">News &amp; Updates</h3>

            <ul class="news_list">
			<?php foreach ($news01 as $data){ ?>
              <li>
                <a href="<?php echo site_url('home_controller/news_details/'.$data->NEWS_ID);?>"><?php echo $data->NEWS_TITLE; ?></a>
                <!--<div class="news_list_date"><?php echo $data->START_DATE; ?> To <?php echo $data->END_DATE 	; ?></div>-->				
				<div class="news_list_date"><?php echo date('d/m/Y',strtotime($data->START_DATE)); ?></div>
              </li>
			<?php } ?>
              
            </ul>

          </aside>
        </div>

        <div class='column dt-sc-one-fourth '>
          <aside id="text-3" class="widget widget_text">
            <h3 class="steelblue_sketch widgettitle">Contact</h3>
            <div class="textwidget">
              <p class="dt-sc-contact-info"><span class='fa fa-map-marker'></span> <?php echo $abt->ADDRESS; ?> </p>
              <!--<p class="dt-sc-contact-info"><span class='fa fa fa-phone'></span><?php echo $abt->PHONE_NO; ?></p>-->
              <p class="dt-sc-contact-info"><span class='fa fa fa-phone'></span><?php echo $abt->CONTACT_NO; ?></p>
              <p class="dt-sc-contact-info"><span class='fa fa-envelope'></span><a href='#'><?php echo $abt->EMAIL; ?></a></p>
            </div>
          </aside>
          
        </div>

      </div>
    </div>
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
            <div class="copyright-info">
              Copyright © <?php echo date('Y'); ?> | <?php echo $abt->SCHOOL_NAME; ?>. All rights reserved.
            </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <div class="powered-by">
              Developed by : <a href="http://easybzee.in/" target="_blank">Easybzee Innovative Technologies</a>
            </div>
          </div>
        </div>
        
        <!--<div class="footer-links">
          <p>Follow us</p>
          <ul class='dt-sc-social-icons'>
            <li class='facebook'><a href='#' target='_blank' title='Facebook'><img src='../../../designthemes.iamdesigning.netdna-cdn.com/themes/dt-kidslife/wp-content/themes/kidslife-1.4/images/sociable/facebook.png' alt='facebook.png' /> </a></li>
            <li class='dribbble'><a href='#' target='_blank' title='Dribbble'><img src='../../../designthemes.iamdesigning.netdna-cdn.com/themes/dt-kidslife/wp-content/themes/kidslife-1.4/images/sociable/dribbble.png' alt='dribbble.png' /> </a></li>
            <li class='flickr'><a href='#' target='_blank' title='Flickr'><img src='../../../designthemes.iamdesigning.netdna-cdn.com/themes/dt-kidslife/wp-content/themes/kidslife-1.4/images/sociable/flickr.png' alt='flickr.png' /> </a></li>
            <li class='technorati'><a href='#' target='_blank' title='Technorati'><img src='../../../designthemes.iamdesigning.netdna-cdn.com/themes/dt-kidslife/wp-content/themes/kidslife-1.4/images/sociable/technorati.png' alt='technorati.png' /> </a></li>
          </ul>
        </div>-->
      </div>
    </div>
  </footer>
  
  <!--footer ends--> 
  
</div>
<!--wrapper ends--> 
<a href="#" title="Go to Top" class="back-to-top">To Top ↑</a> 
<!--Java Scripts--> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-migrate.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.validate.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-easing-1.3.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.sticky.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.nicescroll.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.inview.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/validation.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.tipTip.minified.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.bxslider.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/twitter/jquery.tweet.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.parallax-1.1.3.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/shortcodes.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/custom.js"></script> 

<!-- Layer Slider --> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-transit-modified.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/layerslider.kreaturamedia.jquery.js"></script> 
<script type='text/javascript' src="<?php echo base_url(); ?>js/greensock.js"></script> 
<script type='text/javascript' src="<?php echo base_url(); ?>js/layerslider.transitions.js"></script> 
<!--<script type="text/javascript">var lsjQuery = jQuery;</script>--> 
<script type="text/javascript">var lsjQuery = jQuery;</script><script type="text/javascript"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == "undefined") { lsShowNotice('layerslider_1','jquery'); } else { lsjQuery("#layerslider_4").layerSlider({responsiveUnder: 1240, layersContainer: 1060, skinsPath: 'js/layerslider/skins/'}) } }); </script>
</body>
</html>
