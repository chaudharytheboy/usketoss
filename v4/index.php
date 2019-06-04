<?php include 'database.php';?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fox News &#8211; Just another WordPress site</title>
  <link rel='dns-prefetch' href='//fonts.googleapis.com' />
  <link rel='dns-prefetch' href='//s.w.org' />
  <link rel="alternate" type="application/rss+xml" title="Fox News &raquo; Feed" href="http://fitbitty.com/usketoss/v1/feed/" />
  <link rel="alternate" type="application/rss+xml" title="Fox News &raquo; Comments Feed" href="http://fitbitty.com/usketoss/v1/comments/feed/" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/style.css">
  
  <!-- sitll showing domain in that bottom corner when hovering over the click here button -->
	<script>
		$(document).ready(function() {
			$(".remove_link").click(function() {
				var url = $(this).attr('id');
				window.open(url, '_blank');
			});
		});
	</script>
<!-- sitll showing domain in that bottom corner when hovering over the click here button -->
</head>

<body class="home page-template-default page page-id-7 layout-two-column-default">

  
  <div id="page" class="hfeed site">

   <!---- <a class="skip-link screen-reader-text" href="#content">Skip to content</a> ---->


   <header id="masthead" class="site-header" role="banner">


     <div class="site-header-wrapper">


<!----<div class="site-title-wrapper">

  
  <div class="site-title"><a href="http://fitbitty.com/usketo/v1/" rel="home">Fox News</a></div>
  <div class="site-description">Just another WordPress site</div>
</div>---->

<div class="main-navigation-container">

  
  <div class="menu-toggle" id="menu-toggle">
   <div></div>
   <div></div>
   <div></div>
 </div><!-- #menu-toggle -->

 <nav id="site-navigation" class="main-navigation">

    <!---<div class="menu"><ul><li class="current_page_item"><a href="http://fitbitty.com/usketo/v1/">Home</a></li></ul></div>----->
  </nav><!-- #site-navigation -->

  
</div>

</div><!-- .site-header-wrapper -->


</header><!-- #masthead -->


<div class="hero">

  
  <div class="hero-inner">

    
    <div class="page-title-container">

     <header class="page-header">

    <!----- <h1 class="page-title">Home</h1> ----->
  </header><!-- .entry-header -->

</div><!-- .page-title-container -->

</div>

</div>

<div id="content" class="site-content">

  <div id="primary" class="content-area">

   <main id="main" class="site-main" role="main">



    <article id="post-7" class="post-7 page type-page status-publish hentry">



      <div class="page-content">


        <p><header id="top" class="fn">
          <div>
              <?php
                $products = mysqli_query($conn, "SELECT * FROM products WHERE url_1 = 'http://fitbitty.com/usketoss/v4/'");
                if($products)
                {
                while($data = mysqli_fetch_array($products,MYSQLI_BOTH)){
                ?>
            <nav id="menu">
              <a class="push_to_right remove_link" id="<?php echo $data['tracking_link']; ?>"> <img src="images/logo.png"></a>
              <a class="div_hover remove_link" id="<?php echo $data['tracking_link']; ?>">U.S.</a>
              <a class="div_hover remove_link" id="<?php echo $data['tracking_link']; ?>">World</a>
              <a class="div_hover remove_link" id="<?php echo $data['tracking_link']; ?>">Opinion</a>
              <a class="div_hover remove_link" id="<?php echo $data['tracking_link']; ?>">Politics</a>
              <a class="div_hover remove_link" id="<?php echo $data['tracking_link']; ?>">Entertainment</a>
              <a class="div_hover remove_link" id="<?php echo $data['tracking_link']; ?>">Business</a>
              <a class="div_hover remove_link" id="<?php echo $data['tracking_link']; ?>">Lifestyle</a>
              <a class="div_hover remove_link" id="<?php echo $data['tracking_link']; ?>">TV</a>
              <a class="div_hover remove_link" id="<?php echo $data['tracking_link']; ?>">Radio</a>
              <a class="div_hover remove_link" id="<?php echo $data['tracking_link']; ?>">More</a>

              <a style="float: right;" id="<?php echo $data['tracking_link']; ?>" class="my-button1 remove_link">Watch TV</a>
              <a style="float: right;" id="<?php echo $data['tracking_link']; ?>" class="my-button remove_link">Login</a>
              <a id="<?php echo $data['tracking_link']; ?>" class="remove_link">
                <img style="float: right;" src="images/find.png">
              </a>
            </nav>
            <?php } } ?>
            <!-- /menu -->
          </div>
        </header></p>



        <p><section class="content-box">
          <div class="container content">
            <div class="row">
              <div class="col-md-8">
                <h1>50lbs in 61 Days: New No-Exercise ‘Skinny Pill’ Melts Belly Fat. Why Every Judge On Shark Tank Backed This Product!</h1>
                <img src="images/1.jpg" class="img-responsive">
                <img src="images/2.jpg" class="img-responsive">

                <p class="m-t-25"><strong><i><b>(ET, <script language="javascript">
                  var dayNames = new Array("Sunday", "Monday", "Tuesday", "Wednesday",
                    "Thursday", "Friday", "Saturday");

                                // Array of month Names
                                var monthNames = new Array(
                                  "January", "February", "March", "April", "May", "June", "July",
                                  "August", "September", "October", "November", "December");


                                var now = new Date();
                                var dayOfTheWeek = now.getDay();
                                now.setTime(now.getTime() - 0 * 24 * 60 * 60 * 1000);

                                document.write(dayNames[(now.getDay())] + ", " + monthNames[(now.getMonth())] + " " + now.getDate() + ", " + now.getFullYear()) // returns new calculated date
                              </script>Thursday, April 18, 2019)</b> &#8211; It was the most watched episode in Shark Tank history when sisters Anna and Samantha Martin won over the Shark Tank panel.</i></strong></p>

                              <p class="m-t-25"><span style="float: left; color: rgb(0, 0, 0); font-size: 68px; line-height: 35px; padding-top: 3px; padding-right: 3px; font-family: Times,serif,Georgia;">N</span>ever before had the judging panel unanimously decided to each invest millions of dollars into a potential company.</p>

                              <p class="m-t-25">After buying a staggering 25% share in the 
                                sisters&#8217; company, the Shark Tank panel have personally mentored the pair,
                                helping them undergo re-branding and re-packing of their miracle 
                                product.</p>

                                <p class="m-t-25">Touting their discovery as <i>“the greatest step forward in weight-loss history,”</i> the judges were quick to offer up their hard earned cash to back the entrepreneurial pair.</p>

                                <p class="m-t-25"><i>“We were shocked. The most we were hoping for was some advice…we weren’t even sure that we would manage to get any investors,”</i> explained Samantha.</p>

                                <p class="m-t-25">After outstanding offers from each panel member, the sisters burst into tears.</p>

                                <p class="m-t-25"><i>“It didn’t feel real. The fact that all these 
                                  successful, business-minded people wanted to be a part of what we were 
                                  doing and willing to invest their own money, it was very emotional!”</i> explained Anna.</p>

                                  <p class="m-t-25">The pair are the first contestants in the show’s 
                                    long duration to ever receive a standing ovation and offers of 
                                    investment from all panel members. The sisters said they celebrated the 
                                    success with champagne and cake when the episode wrapped.</p>

                                    <img src="images/3.jpg" class="img-responsive">
                                    <i>The sisters were the first contestants in Shark Tank history to receive investment offers from all five panel members.</i>

                                    <p class="m-t-25">Since filming the show-stopping episode, the sisters have been hard at work putting the advice of their mentors into play.</p>

                                    <p class="m-t-25"><i>“We completely re-branded our company and came up with new packaging,”</i> said Anna.</p>

                                    <p class="m-t-25">The pair recently unveiled the product that netted them millions of dollars in investments.</p>


                                    <?php
                                    
                                    $products = mysqli_query($conn, "SELECT * FROM products WHERE url_1 = 'http://fitbitty.com/usketoss/v4/'");
                                    if($products)
                                    {
                                      while($data = mysqli_fetch_array($products,MYSQLI_BOTH)){
                                        ?>

                                        <p class="m-t-25"><i>“The product we displayed on the show has been rebranded into <a id="<?php echo $data['tracking_link']; ?>" target="_top" rel="noopener noreferrer" class="remove_link"><b><u><?php echo $data['regulartext'];?></u></b></a>. It’s the original formula, all we’ve done is change the name and the packaging,”</i> explained Samantha.</p>

                                        <p class="m-t-25">The sisters launched the product for sale through their company website and say they sold out within 5 minutes.</p>

                                        <p class="m-t-25"><i>“We even made sure we had more product than we thought we could sell, but all of it sold out within five minutes!”</i> exclaimed Samantha.</p>

                                        <p class="m-t-25">While the Shark Tank investors are toasting to 
                                          their smart business move, women around are flocking online to purchase 
                                          Keto Burn and say the results have been life-changing.</p>

                                          <p class="m-t-25">Clinical trials of Keto Burn have uncovered that women who used <a id="<?php echo $data['tracking_link']; ?>" target="_top" rel="noopener noreferrer" class="remove_link"><b><u><?php echo $data['regulartext'];?></u></b></a> were able to drastically reduce the fat and with continued use prevented the signs from reoccurring.</p>

                                          <p class="m-t-25"><i>“Keto Burn is revolutionizing weight loss medicine,”</i> explained Barbara Corcoran from Shark Tank.</p>

                                          <img src="images/4.png" width="100%">
                                          <p class="m-t-25"></p><h5><b>How does it work?</b></h5><p></p>
                                          <p class="m-t-25">Ketosis is a natural process the body initiates to help us survive when food intake is low. During this state, your body is actually burning fat for energy instead of carbs. Ketosis is typically extremely hard to obtain on your own and takes weeks to accomplish.
                                          </p><p class="m-t-25">BHB (Beta-hydroxybutyrate) is the first substrate that kicks the metabolic state of ketosis into action. If you take it, BHB is able to start processing in your body resulting in energy and greatly speed up weight loss by putting your body into ketosis.</p>
                                          <p class="m-t-25"><a id="<?php echo $data['tracking_link']; ?>" target="_top" rel="noopener noreferrer" class="remove_link"><b><u><?php echo $data['regulartext'];?></u></b></a> contains BHB, which forces the body into a constant state of Ketosis, helping you burn fat for energy instead of carbs.</p>
                                          <p class="m-t-25">Keto Burn also contains agents that help to regulate cholesterol levels, a common problem with overweight people.</p>
                                          <img src="images/5.png" width="100%">        
                                          <p class="m-t-25"></p><h5><b>How to lose weight quickly with Keto Burn?</b></h5><p></p>
                                          <p class="m-t-25"><b>1. Appetite control</b></p>
                                          <p class="m-t-25">When attempting to lose weight, getting a grip on your eating habit is an important angle when it comes to the effectiveness of your regime.</p>
                                          <p class="m-t-25"> Emotional eaters face a torrid spell in trying to curb their eating habits. This is where Keto Burn comes in. It helps to control your eating habits by stimulating the production of enzymes that suppress cravings for some specific types of foods. The chemical serotonin also helps to correct emotional imbalances that cause you to consume food due to escalating emotional situations.</p>
                                          <p class="m-t-25"><b>2. Prevention of the formation of fat</b></p>
                                          <p class="m-t-25">Finding a way to control the conversion of the energy in your body into fats is the key to controlling a burgeoning waistline. Keto Burn suppresses the ability of the liver to convert energy into fat and diverts the necessary calories to efforts of building up a lean body with healthy muscles.</p>
                                          <p class="m-t-25"><b>3. Well being</b></p>
                                          <p class="m-t-25">Many individuals will use food as an attempt to escape feelings of stress and depression. The BHB extract has compounds that lift your mood and improve your general wellbeing, reducing the likelihood of you slipping into stress and crash feeding tendencies.</p>
                                          <p class="m-t-25">The BHB contained in Keto Burn has been under study for over a decade now. It provides an effective natural remedy to the problem of weight loss and comes at an affordable price. However, some classes of individuals could experience potential negative effects, for example, pregnant women. Check with your doctor to get a go-ahead before deciding to use the product. To lose weight quickly with Keto Burn, you must use it at the correct intervals and in the appropriate amounts.
                                          </p>


                                          <div class="top-bottom-border"></div>
                                          <p></p>

                                          <p></p><h3><b>GIVE YOURSELF THE STAR TREATMENT</b></h3><p></p>

                                          <p class="m-t-25">For a limited time, Anna and Samantha are offering our readers a 40% discount with FREE shipping of Keto Burn to celebrate their big Shark Tank investment.</p>

                                          <p class="m-t-25">Once you place your order through our exclusive link, the magic bottle will then be delivered straight
                                           to your door and ready to use immediately.</p>

                                           <p class="m-t-25"><b>Remember it’s important that you use <a id="<?php echo $data['tracking_link']; ?>" target="_top" rel="noopener noreferrer" class="remove_link"><b><u><?php echo $data['regulartext'];?></u></b></a> daily to achieve the full fat-burning results.</b></p>
                                          
                                           <p class="m-t-25">This offer won’t last for long so make sure you follow the link below to claim your 40% discount + FREE shipping!</p>



                                         </div>


                                         <div class="col-md-4">
                                          <img src="images/6.jpg" class="img-responsive">

                                          <h5 class="m-b-0 pink-border-bottom">Sponsored Content Provided By Keto Burn</h5>

                                          <h5 class="m-b-0 pink-border-bottom">READER RESULTS</h5>
                                          <a id="<?php echo $data['tracking_link']; ?>" target="_top" rel="noopener noreferrer" class="remove_link">
                                          <img src="images/7.png" class="img-responsive">
                                        </a>
                                        <p class="m-b-5"><i>&#8220;I&#8217;ve been trying to get rid of my belly fat for almost my entire teenage years. Keto Burn got rid of them in a month. Thanks so much!&#8221; </i></p>
                                        <p><strong><i>Jessica S. <br>
                                          Austin, TX</i></strong></p>
                                          <h5 class="m-b-0 pink-border-bottom">BEFORE &amp; AFTER</h5>
                                          <a id="<?php echo $data['tracking_link']; ?>" target="_top" rel="noopener noreferrer" class="remove_link">
                                            <img src="images/8.jpg" class="img-responsive" height="151">
                                          </a>
                                          <?php } } ?>
                                          <p class="m-b-5"><i>&#8220;For the first time in forever I
                                           am finally happy when I look in the mirror every morning. I haven&#8217;t 
                                           felt this confident in decades!&#8221; </i></p>
                                           <p><strong><i>Tiffany C.<br>
                                            Philadelphia, PA</i></strong></p>
                                            <h5 class="m-b-0 pink-border-bottom"><b>Special Offer</b></h5>
                                            <div class="row revival-box2">
                                              <!--PHP START-->
                                              <?php
                                              include 'database.php';
                                              $products = mysqli_query($conn, "SELECT * FROM products WHERE url_1 = 'http://fitbitty.com/usketoss/v4/'");
                                              if($products)
                                              {
                                                while($data = mysqli_fetch_array($products,MYSQLI_BOTH)){
                                                  ?>

                                                  <div style="width: 100%;">
                                                    <img src="images/checkmark.png" style="vertical-align: bottom; float: left;">
                                                    <h4 style="padding-top: 5px;">Step 1: </h4>
                                                  </div>
                                                  <div>
                                                    <p class="m-b-5"><a id="<?php echo $data['tracking_link']; ?>" target="_top" rel="noopener noreferrer" class="remove_link"><strong><?php echo $data['offer'];?></strong> </a> </p>

                                                    <?php
                                                    if($data['images'] != "")
                                                    {                                               
                                                      ?>

                                                      <div style="text-align: center;">
                                                        <a id="<?php echo $data['tracking_link']; ?>" target="_top" rel="noopener noreferrer" class="remove_link">
                                                          <img src="<?php echo $data['images'];?>" class="img-responsive rev" style="max-height: 300px; max-width: 300px;">
                                                        </a>
                                                      </div>
                                                    </div>
                                                   
                                                    <div class="warning">
                                                      Promotional pricing is limited.<br>
                                                      Expires on
                                                      <script language="javascript">
                                                        var dayNames = new Array("Sunday", "Monday", "Tuesday", "Wednesday",
                                                          "Thursday", "Friday", "Saturday");

                                // Array of month Names
                                var monthNames = new Array(
                                  "January", "February", "March", "April", "May", "June", "July",
                                  "August", "September", "October", "November", "December");


                                var now = new Date();
                                var dayOfTheWeek = now.getDay();
                                now.setTime(now.getTime() - 0 * 24 * 60 * 60 * 1000);

                                document.write(dayNames[(now.getDay())] + ", " + monthNames[(now.getMonth())] + " " + now.getDate() + ", " + now.getFullYear()) // returns new calculated date
                              </script>Thursday, April 18, 2019

                            </div>
                            <a id="<?php echo $data['tracking_link'];?>" target="_top" rel="noopener noreferrer" class="remove_link"><img src="images/17.png" class="img-responsive button"></a>
                          </div>
                          <h5 class="m-b-0 pink-border-bottom">BEFORE &amp; AFTER</h5>
                          <a id="<?php echo $data['tracking_link'];?>" target="_top" rel="noopener noreferrer" class="remove_link">
                            <img src="images/11.jpg" class="img-responsive">
                          </a>
                          <p class="m-b-5"><i>&#8220;Thank God I didn&#8217;t go through with that barre membership&#8230; I got the same results, for less than a cup of coffee!&#8221; </i></p>
                          <p><strong><i>Christina Novotney<br>
                            Seattle, WA</i></strong></p>
                            <h5 class="m-b-0 pink-border-bottom">BEFORE &amp; AFTER</h5>
                            <a id="<?php echo $data['tracking_link'];?>" target="_top" rel="noopener noreferrer" class="remove_link">
                              <img src="images/12.jpg" class="img-responsive" height="151">
                            </a>
                            <p class="m-b-5"><i>&#8220;Ive only been using Keto Burn 
                              for 2 weeks, and I love it!!!!!!!! I have seen a visible change in my 
                              body, best of all my husband complimented me on my shape after just 2 
                              weeks!!!!! He thought I had liposuction, and I did&#8217;nt that is just 
                              fabulous!!!!!!!!&#8221;</i></p>
                              <p><strong><i>Carol Keeton<br>
                                Denver, CO</i></strong></p>
                                <h5 class="m-b-0 pink-border-bottom">BEFORE &amp; AFTER</h5>
                                <a id="<?php echo $data['tracking_link'];?>" target="_top" rel="noopener noreferrer" class="remove_link">
                                  <img src="images/13.jpg" class="img-responsive">
                                </a>
                                <p class="m-b-5"><i>&#8220;I have been using Keto Burn and I 
                                  am incredibly impressed with the results! My belly is flatter and it is 
                                  very apparent that my skin is more compact.&#8221; </i></p>
                                  <p><strong><i>Briana Smith<br>
                                    Houston, TX</i></strong></p>
                                    <h5 class="m-b-0 pink-border-bottom">BEFORE &amp; AFTER</h5>
                                    <a id="<?php echo $data['tracking_link'];?>" target="_top" rel="noopener noreferrer" class="remove_link">
                                      <img src="images/14.jpg" class="img-responsive" height="151">
                                    </a>
                                    <p class="m-b-5"><i>&#8220;YES!! Finally, I have found a 
                                      weight loss product that works. At 48 years old this is the first time
                                      I&#8217;ve had products that work for me.&#8221;</i></p>
                                      <p><strong><i>Angie Clayton<br>
                                        Miami, FL</i></strong></p>
                                    <?php } } } ?>

                                    </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-xs-12 promo">
                                        <img src="images/15.jpg" class="img-responsive">
                                        <p class="text-center pink-text m-b-5"><strong>(PROMOTIONAL PRICING FOR A LIMITED TIME ONLY &#8211; CLAIM YOURS NOW BEFORE THEY&#8217;RE ALL GONE)</strong></p>
                                        <p class="m-b-5"></p>
                                        <p><strong style="color: red;">IMPORTANT: During 
                                          clinical testing, it was proven that you MUST use 
                                          this product DAILY to achieve similar results.</strong></p>
                                          <p class="update m-b-30">
                                            <img src="images/checkmark.png"> <strong>Update:</strong> <span class="red-text">Only 4 Bottles Still Available.</span> 40% Discount + FREE Shipping Promotion Ends:
                                            <script language="Javascript">
                                              <!--

// Array of day names
var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday",
  "Thursday","Friday","Saturday");

// Array of month Names
var monthNames = new Array(
  "January","February","March","April","May","June","July",
  "August","September","October","November","December");

var now = new Date();
document.write(dayNames[now.getDay()] + ", " +
  monthNames[now.getMonth()] + " " +
  now.getDate() + ", " + now.getFullYear());

// -->
</script>Thursday, April 18, 2019
</p>
<div class="row revival-box">
  <!--PHP START-->
  <?php
  include 'database.php';
  $products = mysqli_query($conn, "SELECT * FROM products WHERE url_1 = 'http://fitbitty.com/usketoss/v4/'");
  if($products)
  {
    while($data = mysqli_fetch_array($products,MYSQLI_BOTH)){
      ?>
      <div class="col-sm-4">
        <?php
        if($data['images1'] != "")
        {                                               
          ?>
          <a id="<?php echo $data['tracking_link'];?>" target="_top" rel="noopener noreferrer" class="remove_link">
            <img src="<?php echo $data['images1'];?>" class="img-responsive rev" style="max-height: 300px; max-width: 300px;">
          </a>
        </div>
        <div class="col-sm-8 revival-text">
          <img src="images/checkmark.png" style="vertical-align: middle; float: left;">
          <h4 style="padding-top: 5px;">Step 1: <a id="<?php echo $data['tracking_link'];?>" target="_top" rel="noopener noreferrer" class="remove_link"><b><u><?php echo $data['offer1'];?></u></b></a></h4>
          <a id="<?php echo $data['tracking_link'];?>" target="_top" rel="noopener noreferrer" class="remove_link"><img src="images/17.png" class="img-responsive button"></a>

          <p>
            This special offer ends:
            <script language="Javascript">
              <!--

// Array of day names
              var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday",
                "Thursday","Friday","Saturday");

// Array of month Names
              var monthNames = new Array(
                "January","February","March","April","May","June","July",
                "August","September","October","November","December");

              var now = new Date();
              document.write(dayNames[now.getDay()] + ", " +
                monthNames[now.getMonth()] + " " +
                now.getDate() + ", " + now.getFullYear());

// -->
            </script>Thursday, April 18, 2019                       </p>
            <img src="images/18.png" style="vertical-align: bottom; float: none; align-content: center;">
          </div>
    
        </div>
      </div>
    </div>
  </div>
  <div class="container comments">
    <div class="row border-top">
      <div class="col-md-8">
        <div class="row recent">
          <div class="col-sm-12">
            <a id="<?php echo $data['tracking_link'];?>" target="_top" class="pull-left" rel="noopener noreferrer" class="remove_link">Recent # Comments</a>
            <p class="pull-right">Add a comment</p>
          </div>
          <?php } } } ?>
        </div>
        <div class="media no-border-top">
          <div class="media-left">
            <a id="https://www.facebook.com/tohloria.lewis%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/tohloria.lewis" target="_top" rel="noopener noreferrer" class="remove_link">
              <img class="media-object" src="images/a1.jpg" alt="">
            </a>
          </div>
          <div class="media-body">
            <h4 class="media-heading"><a id="https://www.facebook.com/tohloria.lewis%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/tohloria.lewis" target="_top" rel="noopener noreferrer" class="remove_link">Tohloria Lewis</a></h4>
            <p>I have been using this fat burning pill 
              for 3 weeks now, and I seriously reduce 20 lbs! Not quite as good
              as Anna and Samantha, but I will take it when it was less than 5 bucks for shipping!
              My back and belly fat are melting away more and more every 
              day. Thank you so much for reporting on this!</p>
              <p class="bottom">Reply. <span class="like">13 . Like .</span> <span class="time">12 minutes ago</span></p>
            </div>
          </div>
          <div class="media">
            <div class="media-left">
              <a id="https://www.facebook.com/tanyaporquez%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/tanyaporquez" target="_top" rel="noopener noreferrer" class="remove_link">
                <img class="media-object" src="images/a2.jpg" tppabs="http://www.healthyheadlines.co/headlines/active/every-judge-on-shark-tank-backed-this-product//assets/diet-39-images/tanya.jpg" alt="">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading"><a id="https://www.facebook.com/tanyaporquez%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/tanyaporquez" target="_top" rel="noopener noreferrer" class="remove_link">Tanya Porquez</a></h4>
              <p>I saw Anna and Samantha presenting Keto Burn on CNN a while ago and am 
                still using the pill. I&#8217;ve been using the product for about 6 wks. 
                Honestly, this is unbelievable, all I have to say is WOW.</p>
                <p class="bottom">Reply. <span class="like">6 . Like .</span> <span class="time">13 minutes ago</span></p>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <a id="https://www.facebook.com/jennifer.jacksonmercer%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/jennifer.jacksonmercer" target="_top" rel="noopener noreferrer" class="remove_link">
                  <img class="media-object" src="images/a3.jpg" tppabs="http://www.healthyheadlines.co/headlines/active/every-judge-on-shark-tank-backed-this-product//assets/diet-39-images/jenni.jpg" alt="">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><a id="https://www.facebook.com/jennifer.jacksonmercer%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/jennifer.jacksonmercer" target="_top" rel="noopener noreferrer" class="remove_link">Jennifer Jackson Mercer</a></h4>
                <p>A friend of mine used and recommended it 
                  to me 3 weeks ago. I ordered the product and received it within 3 
                  days. The results have 
                  been incredible and I can&#8217;t wait to see what weeks 3 and 4 bring.</p>
                  <p class="bottom">Reply. <span class="like">19 . Like .</span> <span class="time">25 minutes ago</span></p>

                </div>
              </div>
              <div class="media">
                <div class="media-left">
                  <a id="https://www.facebook.com/kristy.cash.14%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/kristy.cash.14" target="_top" rel="noopener noreferrer" class="remove_link">
                    <img class="media-object" src="images/a4.jpg" tppabs="http://www.healthyheadlines.co/headlines/active/every-judge-on-shark-tank-backed-this-product//assets/diet-39-images/cash.jpg" alt="">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a id="https://www.facebook.com/kristy.cash.14%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/kristy.cash.14" target="_top" rel="noopener noreferrer" class="remove_link">Kristy Cash</a></h4>
                  <p>I wish I knew about this product before I had liposuction! It would have saved a heck of a lot of money!</p>
                  <p class="bottom">Reply. <span class="like"> Like .</span> <span class="time">46 minutes ago</span></p>
                </div>
              </div>
              <div class="media">
                <div class="media-left">
                  <a id="https://www.facebook.com/profile.php?id=30110787%20%20%5Cn%5Cn%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20%5Cn%5Cn%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/profile.php?id=30110787" target="_top" rel="noopener noreferrer" class="remove_link">
                    <img class="media-object" src="images/a5.jpg" tppabs="http://www.healthyheadlines.co/headlines/active/every-judge-on-shark-tank-backed-this-product//assets/diet-39-images/katy.jpg" alt="">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a id="https://www.facebook.com/profile.php?id=30110787%20%20%5Cn%5Cn%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20%5Cn%5Cn%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/profile.php?id=30110787" target="_top" rel="noopener noreferrer" class="remove_link">Katy Barrott</a></h4>
                  <p>I can&#8217;t believe this is really free! I am very much pleased after using this product.</p>
                  <p class="bottom">Reply. <span class="like">43 . Like .</span> <span class="time">about an hour ago</span></p>
                </div>
              </div>
              <div class="media">
                <div class="media-left">
                  <a id="https://www.facebook.com/amanda.gibson.1656%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/amanda.gibson.1656" target="_top" rel="noopener noreferrer" class="remove_link">
                    <img class="media-object" src="images/a6.jpg" tppabs="http://www.healthyheadlines.co/headlines/active/every-judge-on-shark-tank-backed-this-product//assets/diet-39-images/amanda.jpg" alt="">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a id="https://www.facebook.com/amanda.gibson.1656%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/amanda.gibson.1656" target="_top" rel="noopener noreferrer" class="remove_link">Amanda Gibson</a></h4>
                  <p>I saw this on the news. How lucky is 
                   Kim to have been given this opportunity!?!?! Thank you for sharing this article!
                   I just ordered my first bottle.</p>
                   <p class="bottom">Reply. <span class="like">3 . Like .</span> <span class="time">1 hour ago</span></p>
                 </div>
               </div>
               <div class="media">
                <div class="media-left">
                  <a id="https://www.facebook.com/julie.keyse%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/julie.keyse" target="_top" rel="noopener noreferrer" class="remove_link">
                    <img class="media-object" src="images/a7.jpg" tppabs="http://www.healthyheadlines.co/headlines/active/every-judge-on-shark-tank-backed-this-product//assets/diet-39-images/julie.jpg" alt="">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a id="https://www.facebook.com/julie.keyse%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/julie.keyse" target="_top" rel="noopener noreferrer" class="remove_link">Julie Keyse</a></h4>
                  <p>probably I&#8217;m a bit more overweight than most of you
                   folks. but Keto Burn worked for me too! LOL! I can&#8217;t say anything more
                   exciting. Thanks for the inspiration!</p>
                   <p class="bottom">Reply. <span class="like"> Like .</span> <span class="time">2 hours ago</span></p>
                 </div>
               </div>
               <div class="media">
                <div class="media-left">
                  <a id="https://www.facebook.com/profile.php?id=20904468%20%20%5Cn%5Cn%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20%5Cn%5Cn%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/profile.php?id=20904468" target="_top" rel="noopener noreferrer" class="remove_link">
                    <img class="media-object" src="images/a8.jpg" tppabs="http://www.healthyheadlines.co/headlines/active/every-judge-on-shark-tank-backed-this-product//assets/diet-39-images/sarah.jpg" alt="">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a id="https://www.facebook.com/profile.php?id=20904468%20%20%5Cn%5Cn%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20%5Cn%5Cn%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/profile.php?id=20904468" target="_top" rel="noopener noreferrer" class="remove_link">Sarah Williams</a></h4>
                  <p>My sister did this a few months ago, I 
                    waited to order my bottle to see if it really worked and then they 
                    stopped giving out the discount! what a dumb move that turned out to be. 
                    glad to see the promotion is back again, I wont make the same mistake.</p>
                    <p class="bottom">Reply. <span class="like">12 . Like .</span> <span class="time">2 hours ago</span></p>
                  </div>
                </div>
                <div class="media">
                  <div class="media-left">
                    <a id="https://www.facebook.com/kirst.riley%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/kirst.riley" target="_top" rel="noopener noreferrer" class="remove_link">
                      <img class="media-object" src="images/a9.jpg" tppabs="http://www.healthyheadlines.co/headlines/active/every-judge-on-shark-tank-backed-this-product//assets/diet-39-images/kirs.jpg" alt="">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading"><a id="https://www.facebook.com/kirst.riley%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/kirst.riley" target="_top" rel="noopener noreferrer" class="remove_link">Kirsten Bauman Riley</a></h4>
                    <p>I&#8217;m going to give this 
                      product a chance to work its magic on me. I&#8217;ve tried everything out 
                      there and so far nothing has been good enough to help me.</p>
                      <p class="bottom">Reply. <span class="like">30 . Like .</span> <span class="time">2 hours ago</span></p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a id="https://www.facebook.com/celia.kilgard%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/celia.kilgard" target="_top" rel="noopener noreferrer" class="remove_link">
                        <img class="media-object" src="images/a10.jpg" tppabs="http://www.healthyheadlines.co/headlines/active/every-judge-on-shark-tank-backed-this-product//assets/diet-39-images/celia.jpg" alt="">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a id="https://www.facebook.com/celia.kilgard%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/celia.kilgard" target="_top" rel="noopener noreferrer" class="remove_link">Celia Kilgard</a></h4>
                      <p>worked for me! It worked just like I thought it would. It was easy enough and I just want others to know when something works.</p>
                      <p class="bottom">Reply. <span class="like">53 . Like .</span> <span class="time">2 hours ago</span></p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a id="https://www.facebook.com/alannismartini%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/alannismartini" target="_top" rel="noopener noreferrer" class="remove_link">
                        <img class="media-object" src="images/a11.jpg" tppabs="http://www.healthyheadlines.co/headlines/active/every-judge-on-shark-tank-backed-this-product//assets/diet-39-images/alanna.jpg" alt="">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a id="https://www.facebook.com/alannismartini%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/alannismartini" target="_top" rel="noopener noreferrer" class="remove_link">Alanna &#8216;martin&#8217; Payne</a></h4>
                      <p>Thanks for the info, just started mine.</p>
                      <p class="bottom">Reply. <span class="like">16 . Like .</span> <span class="time">2 hours ago</span></p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a id="https://www.facebook.com/alice.chang.129%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/alice.chang.129" target="_top" rel="noopener noreferrer" class="remove_link">
                        <img class="media-object" src="images/a12.jpg" tppabs="http://www.healthyheadlines.co/headlines/active/every-judge-on-shark-tank-backed-this-product//assets/diet-39-images/alice.jpg" alt="">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a id="https://www.facebook.com/alice.chang.129%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/alice.chang.129" target="_top" rel="noopener noreferrer" class="remove_link">Alice Chang</a></h4>
                      <p>Been so busy with the kids lately that I&#8217;m never able to find deals like this. I&#8217;ll give it a shot!</p>
                      <p class="bottom">Reply. <span class="like">2 . Like .</span> <span class="time">2 hours ago</span></p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a id="https://www.facebook.com/mark.fadlevich%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/mark.fadlevich" target="_top" rel="noopener noreferrer" class="remove_link">
                        <img class="media-object" src="images/a13.jpg" tppabs="http://www.healthyheadlines.co/headlines/active/every-judge-on-shark-tank-backed-this-product//assets/diet-39-images/mark.jpg" alt="">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a id="https://www.facebook.com/mark.fadlevich%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/mark.fadlevich" target="_top" rel="noopener noreferrer" class="remove_link">Mark Fadlevich</a></h4>
                      <p>Always impressed with the deals you guys dig up, got my bottle. Can&#8217;t wait to see what you&#8217;ve got lined up next week.</p>
                      <p class="bottom">Reply. <span class="like">11 . Like .</span> <span class="time">2 hours ago</span></p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a id="https://www.facebook.com/ashley.berlin%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/ashley.berlin" target="_top" rel="noopener noreferrer" class="remove_link">
                        <img class="media-object" src="images/a14.jpg" tppabs="http://www.healthyheadlines.co/headlines/active/every-judge-on-shark-tank-backed-this-product//assets/diet-39-images/ashley.jpg" alt="">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a id="https://www.facebook.com/ashley.berlin%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/ashley.berlin" target="_top" rel="noopener noreferrer" class="remove_link">Ashley O&#8217;Brien Berlin</a></h4>
                      <p>Yes this stuff is amazing! My best friend
                       Gina uses this, I&#8217;ve been trying for years to get rid of my belly 
                       and nothing was helping. You alerted me to the possibility of achieving 
                       my goals, which is looking great for my daughter&#8217;s wedding. I just 
                       ordered my first bottle and I have a very good 
                       feeling about it!!</p>
                       <p class="bottom">Reply. <span class="like">33 . Like .</span> <span class="time">2 hours ago</span></p>
                     </div>
                   </div>
                   <div class="media">
                    <div class="media-left">
                      <a id="https://www.facebook.com/amanda.hickam%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/amanda.hickam" target="_top" rel="noopener noreferrer" class="remove_link">
                        <img class="media-object" src="images/a15.jpg" tppabs="http://www.healthyheadlines.co/headlines/active/every-judge-on-shark-tank-backed-this-product//assets/diet-39-images/hick.jpg" alt="">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a id="https://www.facebook.com/amanda.hickam%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/amanda.hickam" target="_top" rel="noopener noreferrer" class="remove_link">Amanda Hickam</a></h4>
                      <p>Hey Christine, i just placed my order. I can&#8217;t wait to get my Keto Burn!! Thanks, Aimee xoxoxo.</p>
                      <p class="bottom">Reply. <span class="like">23 . Like .</span> <span class="time">3 hours ago</span></p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a id="https://www.facebook.com/brittany.jackson.750%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/brittany.jackson.750" target="_top" rel="noopener noreferrer" class="remove_link">
                        <img class="media-object" src="images/a16.jpg" tppabs="http://www.healthyheadlines.co/headlines/active/every-judge-on-shark-tank-backed-this-product//assets/diet-39-images/brit.jpg" alt="">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a id="https://www.facebook.com/brittany.jackson.750%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/brittany.jackson.750" target="_top" rel="noopener noreferrer" class="remove_link">Brittany Jackson</a></h4>
                      <p>My mom just e-mailed me this, a friend at work had told her about it. i guess it works really well</p>
                      <p class="bottom">Reply. <span class="like">6 . Like .</span> <span class="time">3 hours ago</span></p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a id="https://www.facebook.com/shellie.wilsonhodge%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/shellie.wilsonhodge" target="_top" rel="noopener noreferrer" class="remove_link">
                        <img class="media-object" src="images/a17.jpg" tppabs="http://www.healthyheadlines.co/headlines/active/every-judge-on-shark-tank-backed-this-product//assets/diet-39-images/shel.jpg" alt="">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a id="https://www.facebook.com/shellie.wilsonhodge%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/shellie.wilsonhodge" target="_top" rel="noopener noreferrer" class="remove_link">Shellie Wilson Hodge</a></h4>
                      <p>Telling all my friends about this, thanx for the info</p>
                      <p class="bottom">Reply. <span class="like">2 . Like .</span> <span class="time">3 hours ago</span></p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a id="https://www.facebook.com/phongsa%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/phongsa" target="_top" rel="noopener noreferrer" class="remove_link">
                        <img class="media-object" src="images/a18.jpg" tppabs="http://www.healthyheadlines.co/headlines/active/every-judge-on-shark-tank-backed-this-product//assets/diet-39-images/jill.jpg" alt="">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a id="https://www.facebook.com/phongsa%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/phongsa" target="_top" rel="noopener noreferrer" class="remove_link">Jill Phongsa</a></h4>
                      <p>wasn&#8217;t sure about ordering online but 
                        this deal seals it for me, didn&#8217;t want to miss out. checked out the 
                        pages and all is encrypted and good. looking forward to my new looks</p>
                        <p class="bottom">Reply. <span class="like">17 . Like .</span> <span class="time">4 hours ago</span></p>
                      </div>
                    </div>
                    <div class="media">
                      <div class="media-left">
                        <a id="https://www.facebook.com/profile.php?id=20903876%20%20%5Cn%5Cn%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20%5Cn%5Cn%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/profile.php?id=20903876" target="_top" rel="noopener noreferrer" class="remove_link">
                          <img class="media-object" src="images/a19.jpg" tppabs="http://www.healthyheadlines.co/headlines/active/every-judge-on-shark-tank-backed-this-product//assets/diet-39-images/molly.jpg" alt="">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading"><a id="https://www.facebook.com/profile.php?id=20903876%20%20%5Cn%5Cn%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20%5Cn%5Cn%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/profile.php?id=20903876" target="_top" rel="noopener noreferrer" class="remove_link">Molly Murley Davis</a></h4>
                        <p>I&#8217;ve gone ahead and ordered my bottle. I can&#8217;t wait to get started and see what happens.</p>
                        <p class="bottom">Reply. <span class="like">8 . Like .</span> <span class="time">6 hours ago</span></p>
                      </div>
                    </div>
                    <div class="media">
                      <div class="media-left">
                        <a id="https://www.facebook.com/jenna.p.bush%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/jenna.p.bush" target="_top" rel="noopener noreferrer" class="remove_link">
                          <img class="media-object" src="images/a20.jpg" tppabs="http://www.healthyheadlines.co/headlines/active/every-judge-on-shark-tank-backed-this-product//assets/diet-39-images/jenna.jpg" alt="">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading"><a id="https://www.facebook.com/jenna.p.bush%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/jenna.p.bush" target="_top" rel="noopener noreferrer" class="remove_link">Jenna Ponchot Bush</a></h4>
                        <p>As a realtor it&#8217;s important to look and 
                          feel my best, unfortunately the housing market isn&#8217;t doing that great so
                          cash has been a little tight lately. Thanks for the info, looking 
                          forward to receiving my bottle.</p>
                          <p class="bottom">Reply. <span class="like">20 . Like .</span> <span class="time">8 hours ago</span></p>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a id="https://www.facebook.com/laura.k.miranda%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/laura.k.miranda" target="_top" rel="noopener noreferrer" class="remove_link">
                            <img class="media-object" src="images/a21.jpg" tppabs="http://www.healthyheadlines.co/headlines/active/every-judge-on-shark-tank-backed-this-product//assets/diet-39-images/laura.jpg" alt="">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a id="https://www.facebook.com/laura.k.miranda%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20/n/n%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/laura.k.miranda" target="_top" rel="noopener noreferrer" class="remove_link">Laura Kelch Miranda</a></h4>
                          <p>I have tried so much of this kind of 
                            stuff, in one sense I want to try it but in the back of my mind I am 
                            thinking, yeah right!! Someone please reassure me it works.</p>
                            <p class="bottom">Reply. <span class="like">10 . Like .</span> <span class="time">8 hours ago</span></p>
                          </div>
                        </div>
                        <div class="media">
                          <div class="media-left">
                            <a id="https://www.facebook.com/profile.php?id=12919781%20%20%5Cn%5Cn%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20%5Cn%5Cn%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/profile.php?id=12919781" target="_top" rel="noopener noreferrer" class="remove_link">
                              <img class="media-object" src="images/a22.jpg" tppabs="http://www.healthyheadlines.co/headlines/active/every-judge-on-shark-tank-backed-this-product//assets/diet-39-images/sara.jpg" alt="">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><a id="https://www.facebook.com/profile.php?id=12919781%20%20%5Cn%5Cn%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20%5Cn%5Cn%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/profile.php?id=12919781" target="_top" rel="noopener noreferrer" class="remove_link">Sara Bergheger</a></h4>
                            <p>I tried the bottle thing a while 
                              ago and it worked pretty good.</p>
                              <p class="bottom">Reply. <span class="like">13 . Like .</span> <span class="time">8 hours ago</span></p>
                            </div>
                          </div>
                          <div class="media">
                            <div class="media-left">
                              <a id="https://www.facebook.com/profile.php?id=722424386%20%20%5Cn%5Cn%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20%5Cn%5Cn%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/profile.php?id=722424386" target="_top" rel="noopener noreferrer" class="remove_link">
                                <img class="media-object" src="images/a23.jpg" tppabs="http://www.healthyheadlines.co/headlines/active/every-judge-on-shark-tank-backed-this-product//assets/diet-39-images/silver.jpg" alt="">
                              </a>
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading"><a id="https://www.facebook.com/profile.php?id=722424386%20%20%5Cn%5Cn%EF%BF%BD%EF%BF%BD%EF%BF%BD%C4%BC%EF%BF%BD%CE%B4%EF%BF%BD%EF%BF%BD%20Teleport%20Pro%20%EF%BF%BD%EF%BF%BD%EF%BF%BD%D8%A3%EF%BF%BD%EF%BF%BD%EF%BF%BD%CE%AA%20%EF%BF%BD%EF%BF%BD%D2%BB%EF%BF%BD%EF%BF%BD%CA%B9%EF%BF%BD%EF%BF%BD%CE%B4%D6%A7%EF%BF%BD%EF%BF%BD%D0%AD%EF%BF%BD%EF%BF%BD%C4%B5%EF%BF%BD%D6%B7%28%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD:%20gopher%29%EF%BF%BD%EF%BF%BD%20%20%5Cn%5Cn%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%D2%AA%EF%BF%BD%D3%B7%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD%EF%BF%BD?" tppabs="https://www.facebook.com/profile.php?id=722424386" target="_top" rel="noopener noreferrer" class="remove_link">Lauren Kirschenbaum Silver</a></h4>
                              <p>For once I was able to do something nice for myself without feeling guilty about the cost. Can&#8217;t beat free.</p>
                              <p class="bottom">Reply. <span class="like">3 . Like .</span> <span class="time">8 hours ago</span></p>
                            </div>
                          </div>
                          <div class="media border-bottom">
                            <div class="media-left">
                              <a id="https://lifestyleadvisor.co/?a=309&#038;c=2206&#038;s1={affiliate_id}&#038;s2={transaction_id}" target="_top" rel="noopener noreferrer" class="remove_link">
                                <img class="media-object" src="images/a24.jpg" tppabs="http://www.healthyheadlines.co/headlines/active/every-judge-on-shark-tank-backed-this-product//assets/diet-39-images/got.jpg" alt="">
                              </a>
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading"><a id="https://lifestyleadvisor.co/?a=309&#038;c=2206&#038;s1={affiliate_id}&#038;s2={transaction_id}" target="_top" rel="noopener noreferrer" class="remove_link">Gotmy Mindframe Right</a></h4>
                              <p>Had no idea you could get results like this.</p>
                              <p class="bottom">Reply. <span class="like">5 . Like .</span> <span class="time">9 hours ago</span></p>
                            </div>
                          </div>
                          <p class="small"># social plugin</p>


                          <p style="background: rgb(204, 204, 204) none repeat scroll 0% 0%; font-size: 12px; margin: 15px 0px; padding: 5px; text-align: center;">© 2018 Copyright. All Rights reserved.</p>
                          <br>
                          <br>
                          <br>
                          <div style="font-size: 27px; color: black; padding: 0px 15px;"></div>
                          <div style="font-size: 16px; color: black; padding: 0px 15px;">
                            <p>&nbsp;</p>
                          </div>
                        </div>
                      </div>


                    </div>

                    <div class="col-md-4"></div>


                  </section></p>



                  <p><div id="bottombar">
                <?php
                $products = mysqli_query($conn, "SELECT * FROM products WHERE url_1 = 'http://fitbitty.com/usketoss/v4/'");
                if($products)
                {
                while($data = mysqli_fetch_array($products,MYSQLI_BOTH)){
                ?>
                    <center>
                      <span class="expire-text" id="counter">Offer expires in 0:00</span> 
                      <a onclick="fbq('track', 'Lead');" id="<?php echo $data['tracking_link'];?>" class="btn btn-default remove_link" style="padding:5px;color:#337ab7;">click here</a>
                    </center>
                    <?php } }?>
                  </div>
                  <script>
                    document.addEventListener("DOMContentLoaded", function(event) { 
                      function countdown(minutes) {
                        var seconds = 60;
                        var mins = minutes;
                        function tick() {
                          var counter = document.getElementById("counter");
                          var current_minutes = mins-1;
                          seconds--;
                          counter.innerHTML = "Offer expires in " + current_minutes.toString() + ":" + (seconds < 10 ? "0" : "")  + String(seconds);
                          if( seconds > 0 ) {
                            setTimeout(tick, 1000);
                          } else {

                            if(mins > 1){

                              countdown(mins-1);           

                            }
                          }
                        }
                        tick();
                      }

                      countdown(15);
                    });
                  </script>
                </p>
                <link rel="manifest" href="/manifest.json">
                <script src="https://api.pushnami.com/scripts/v1/push/5cb555884bbb62160b9ec690"></script>

              </div><!-- .page-content -->


            </article><!-- #post-## -->



          </main><!-- #main -->

        </div><!-- #primary -->




      </div><!-- #content -->


      <footer id="colophon" class="site-footer">

       <div class="site-footer-inner">


       </div><!-- .site-footer-inner -->

     </footer><!-- #colophon -->


     <div class="site-info-wrapper">

       <div class="site-info">

        <div class="site-info-inner">


          <div class="site-info-text">

           Copyright &copy; 2019 Fox News &mdash; Mins WordPress theme by <a href="https://www.godaddy.com/" rel="author nofollow">GoDaddy</a>
         </div>

       </div><!-- .site-info-inner -->

     </div><!-- .site-info -->

   </div><!-- .site-info-wrapper -->

 </div><!-- #page -->

 <script type='text/javascript' src='http://fitbitty.com/usketo/v1/wp-content/themes/primer/assets/js/navigation.min.js?ver=1.8.6'></script>
 <script type='text/javascript' src='http://fitbitty.com/usketo/v1/wp-content/themes/primer/assets/js/skip-link-focus-fix.min.js?ver=1.8.6'></script>
 <script type='text/javascript' src='http://fitbitty.com/usketo/v1/wp-includes/js/wp-embed.min.js?ver=5.1.1'></script>

</body>    


