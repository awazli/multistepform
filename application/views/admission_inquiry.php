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
<title>Admision Inquiry</title>
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
	            	<h1> Admission Inquiry </h1>
                </div>
            </section> -->
            <!--fullwidth_banner ends-->
            <!--breadcrumb-section starts-->
            <div class="breadcrumb-section">
                <div class="container">
                    <h1>Admision Inquiry</h1>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--primary starts-->
            <section id="primary" class="content-full-width">
                    
                    <?php /* ?>
                    <!--fullwidth-background starts-->
                    <section class="fullwidth-background turquoise-plain-bg">
                        <!--container starts-->
                        <div class="container"> 
                        	<h2 class="dt-sc-hr-white-title">Admission Form</h2> 
                            <form method="post" action="" class="admission-form">
                                <p class="dt-sc-one-third column first">
                                    <input id="name" name="name" type="text" placeholder="Name" required>
                                </p>
                                <p class="dt-sc-one-third column">
                                    <input id="age" name="age" type="text" placeholder="Age" required>
                                </p>
                                <p class="dt-sc-one-third column">
                                    <input id="class" name="class" type="text" placeholder="Class" required>
                                </p>
                                
                                <p class="dt-sc-one-third column first">
                                    <input id="medium" name="medium" type="text" placeholder="Medium" required>
                                </p>
                                <p class="dt-sc-one-third column">
                                    <input id="contact" name="contact" type="text" placeholder="Contact No" required>
                                </p>
                                <p class="dt-sc-one-third column">
                                    <input id="email" name="email" type="text" placeholder="Mail ID" required>
                                </p>
                                <p>
                                	<textarea id="Desc" name="Desc" placeholder="Description"></textarea>
                                </p>
                                <div id="ajax_admission_msg"> </div>
                                <p class="aligncenter">
                                    <input name="submit" type="submit" id="submit" value="Submit Form">
                                </p>
                            </form>
                        </div>
                        <!--container ends-->
                    </section>
                    <!--fullwidth-background ends--> 
                    <?php */ ?>

                    <div class="container"> 
                    <!-- form_container -->
                    <div class="form_container">
                            <form method="post" action="" class="admission-form">
                                <p class="dt-sc-one-third column first">
                                    <input id="name" name="name" type="text" placeholder="Name" required>
                                </p>
                                <p class="dt-sc-one-third column">
                                    <input id="age" name="age" type="text" placeholder="Age" required>
                                </p>
                                <p class="dt-sc-one-third column">
									<select id="class" name="class">
									<?php foreach ($class as $cl) { ?>
									  <option value="<?php echo $cl->CLASS_ID; ?>"><?php echo $cl->CLASS_NAME; ?></option>
									<?php } ?>  
									</select>
									
                                </p>
                                
                                <p class="dt-sc-one-third column first">
									<select id="medium" name="medium">
									<?php foreach ($medium as $cl) { ?>
									  <option value="<?php echo $cl->MEDIUM_ID; ?>"><?php echo $cl->MEDIUM_NAME; ?></option>
									<?php } ?>  
									</select>
									
                                </p>
                                <p class="dt-sc-one-third column">
                                    <input id="contact" name="contact" type="text" placeholder="Contact No" required>
                                </p>
                                <p class="dt-sc-one-third column">
                                    <input id="email" name="email" type="text" placeholder="Mail ID" required>
                                </p>
                                <p>
                                    <textarea id="Desc" name="Desc" placeholder="Address"></textarea>
                                </p>
                                <div id="ajax_admission_msg"> </div>
                                <p class="">
                                    <input name="submit" type="submit" id="submit" value="Submit Form">
                                </p>
                            </form>
                        
                    </div>
                    <!-- End: form_container -->
                    </div>
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
