<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" itemscope="" itemtype="http://schema.org/Product">  
<head>
	
	<title>c&#818;o&#818;t&#818;t&#818;o&#818;n&#818;Tracks</title>
	<link rel="icon" type="image/vnd.microsoft.icon" href="http://www.cottontracks.com/media/images/ct-favicon16.png">
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=9">

  <link rel="stylesheet" type="text/css" href="style.css">

  <!-- +1 snippet personalisation -->
  <meta property="og:title" content="cottonTracks - Stories of Your Web Navigation">
  <meta property="og:image" content="http://www.cottontracks.com/media/images/cT_logo.png">
  <meta property="og:description" content="cottonTracks is a browser extension that lets you easily remember the best of what you browse. Check it out on www.cottontracks.com">

	<script type="text/javascript" src="javascript/ga.js"></script>

  <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script>
  <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js'></script>

	<!-- Underline menu link on mouse over -->
	<script src='javascript/menu.js'></script>
	
	<!-- Triangle in the top background -->
	<?php 
	include("functions.php");
	$browser = get_browser_type();
	if($browser=="chrome"||$browser=="chrome-mac"||$browser=="safari"){
		echo '<script src="javascript/triangle.js"></script>';
	}
	?>

  <!-- Registration pop-up script -->
  <script src="javascript/popUpForm.jquery.js"></script>
   <script>
   $(document).ready(function() {
       $('.registration a').popUpForm({
           container   : '#modalform',
           onSuccess   : function() {},
           onError     : function() {}
       });
   });
   </script>
  
</head>
<body>
  
  <!-- Facebook SDK -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  
  <div id="top_bg">
		<?php
			if($browser=="chrome"||$browser=="chrome-mac"||$browser=="safari"){
				echo'<div id="triangle_container">';
		}
		else{
			echo'<div id="triangle_FF_IE_O_Support">';
		}?>
			<div id="triangle">
			</div>
		</div>
	
    <div id="top_menu_area">

      <div class="container">
        <div id="logo">
          <h1 class="offleft"><a href="http://cottontracks.com">cottonTracks</a></h1>
        </div>
        
        <div id="top_menu">
          <ul>
            <li><a href="http://cottontracks.com/jobs.html">Join the <span>Adventure</span></a></li>
            <li><a href="http://cottontracks.com/contact.html">Drop us a <span>Line</span></a></li>
            <li><a href="http://blog.cottontracks.com">Read our <span>Blog</span></a></li>
            <li><a href="http://cottontracks.com/team.html">Meet the <span>Team</span></a></li>
          </ul>
        </div><!--top_menu-->
				
      </div><!--container-->

    </div><!--top_menu_area-->
  
  </div><!--top_bg-->
  
  <div id="middle_bg">

    <div class="container">
        
      <div id="web-browser-wraper">

        <div id="web-browser">

          <div id="wb_text_area">

            <h2>Stories of Your Web Navigation</h2>
            <p>Every day you browse hundreds of pages.</p>
            <p>We gather automatically the most memorable pieces</p>
            <p>and create storylines of your insights and influences.</p>
            
            <div id="wb_register">

              <div id="button_container" class="registration">
                <a href="registration.html" class="download_btnCWS"></a>
              </div>  
							
              <div id="button_container">
                <a href="https://addons.opera.com/en/extensions/details/cottontracks/?display=en" class="download_btnON"></a>
              </div>

            </div>
            
          </div><!--wb_text_area-->

        </div><!--web-browser-->

      </div><!--web-browser-wraper-->
      
      <div id ="gray_line_wraper">        
        <div id="gray_line"></div>  
      </div>
      
      <div id="features1">
        <img id="browser_mini" src="media/images/browser_mini.png" alt="mini browser" />
        <div id="features1_text">
          <p id="feature_title">Contextual</p>
          <p>Click the c&#818; button and access the best</p>
          <p>of what you know about the subject of any page.</p>
          <p id="feature_title" style="margin-top:43px;">Private</p>
          <p>Everything happens on your machine.</p>
          <p>No log-in. 100% private.</p>
        </div>
      </div>  

      <div id ="gray_line_wraper2">        
        <div id="gray_line2"></div>  
      </div>      

      <div id="features2">
        <img id="gears" src="media/images/gears.png" alt="gears" />
        <div id="features2_text">
          <p id="feature_title">Automated</p>
          <p>No more bookmarking.</p>
          <p>Everything is aggregated automatically.</p>
          <p id="feature_title" style="margin-top:39px;">Accurate</p>
          <p>Mash-up of your favorite blocks in each page.</p>
          <p>Cluster all your favorite subjects.</p>
        </div>
      </div> 
    </div><!--container-->
  </div><!--middle_bg-->
  
  <div id="social_medias">
    <div class="container">
      <div id="bottom_logo">
        <h1 class="offleft"><a href="http://cottontracks.com">cottonTracks</a></h1>
      </div>
      
        <div id="sharelinks">
          <!-- Angel List button -->
          <div id="angellist-button"><a href="https://angel.co/cottontracks?follow=1&type=Startup&id=171846"></a></div>
          <script src="https://angel.co/javascripts/embed.js" type="text/javascript"></script>
          <!-- Google+ button -->
          <div id="gplusone">
            <g:plusone size="medium" href="http://www.cottontracks.com/"></g:plusone>
          </div>
          <script type="text/javascript">
            (function() {
              var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
              po.src = 'https://apis.google.com/js/plusone.js';
              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
            })();
           </script>
          
          <!-- Twitter button -->
          <div id="twitter-button"><a href="https://twitter.com/share" class="twitter-share-button"  data-url="http://www.cottontracks.com/" data-text="@cottonTracks" data-count="horizontal">Tweet</a>
            <script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
          </div>
          
          <!-- Facebook button -->
          <div class="fb-like" data-href="http://facebook.com/cottontracks" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
        </div><!--sharelinks-->
      
    </div><!--container-->
  </div><!--social_medias-->
  
  <div id="footer">
    <div class="container">
      <div id="bottom_menu">
        <ul>
          <li><a href="http://cottontracks.com/team.html">Meet the Team</a></li>
          <li><a href="http://cottontracks.tumblr.com">Read our Blog</a></li>
          <li><a href="http://cottontracks.com/contact.html">Drop us a Line</a></li>
          <li><a href="http://cottontracks.com/jobs.html">Join the Adventure</a></li>
        </ul>
      </div><!--bottom_menu-->
      <p id="copyright">cottonTracks, Inc. 2012 | <a href="http://cottontracks.com/legals.html">End User License Agreement</a></p>
    </div><!--container-->
  </div><!--footer-->  
  
</body>
</html>