
<?php
session_start();
error_reporting(0);
include('core/db.php');
//get no of visites
if(isset($_SESSION["visited"])){
}else{
	$vq=mysql_query("SELECT data FROM about WHERE id=4")or die(mysql_error());
	$vr=mysql_fetch_array($vq);
	$_SESSION["visited"]=$vr["data"]+1;
	 	mysql_query("UPDATE about SET data = '$_SESSION[visited]' WHERE id=4");
}
?>



<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	var pageTitle = document.title; //HTML page title
	var pageUrl = location.href; //Location of the page

	
	//user hovers on the share button	
	$('#share-wrapper li').hover(function() {
		var hoverEl = $(this); //get element
		
		//browsers with width > 699 get button slide effect
		if($(window).width() > 699) { 
			if (hoverEl.hasClass('visible')){
				hoverEl.animate({"margin-left":"-117px"}, "fast").removeClass('visible');
			} else {
				hoverEl.animate({"margin-left":"0px"}, "fast").addClass('visible');
			}
		}
	});
		
	//user clicks on a share button
	$('.button-wrap').click(function(event) {
			var shareName = $(this).attr('class').split(' ')[0]; //get the first class name of clicked element
			
			switch (shareName) //switch to different links based on different social name
			{
				case 'facebook':
					var openLink = 'https://www.facebook.com/ramadasbhat'
					break;
				case 'twitter':
					var openLink = 'https://twitter.com/ramadasbhat130'
					break;
				case 'youtube':
					var openLink = 'https://www.youtube.com/user/ramadasbhat'
					break;
				case 'stumbleupon':
					var openLink = 'http://www.stumbleupon.com/submit?url=' + encodeURIComponent(pageUrl) + '&amp;title=' + encodeURIComponent(pageTitle);
					break;
				case 'delicious':
					var openLink = 'http://del.icio.us/post?url=' + encodeURIComponent(pageUrl) + '&amp;title=' + encodeURIComponent(pageTitle);
					break;
				case 'google':
					var openLink = 'https://plus.google.com/+RAMADASBHAT/' 
					break;
				case 'email':
					var openLink = 'mailto:?subject=' + pageTitle + '&body=Found this useful link for you : ' + pageUrl;
					break;
			}
		
		//Parameters for the Popup window
		winWidth 	= 650;	
		winHeight	= 450;
		winLeft   	= ($(window).width()  - winWidth)  / 2,
		winTop    	= ($(window).height() - winHeight) / 2,	
		winOptions   = 'width='  + winWidth  + ',height=' + winHeight + ',top='    + winTop    + ',left='   + winLeft;
		
		//open Popup window and redirect user to share website.
		window.open(openLink,'Share This Link',winOptions);
		return false;
	});
});
</script>
<style>


/* Share button */

/* outer wrapper */
#share-wrapper {
	margin-top: -300px;
	position:fixed;
	left: 0;
}

/* inner wrapper */
#share-wrapper ul.share-inner-wrp{
	list-style: none;
	margin: 0px;
	padding: 0px;
}

/* the list */
#share-wrapper li.button-wrap {
	background: url(img/img12.jpg);
	padding: 0px 0px 0px 10px;
	display: block;
	width: 140px;
	margin: 0px 0px 1px -117px;
}

/* share link */
#share-wrapper li.button-wrap > a {
	padding-right: 60px;
	height: 32px;
	display: block;
	line-height: 32px;
	font-weight: bold;
	color: #FFF;
	text-decoration: none;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}

/* background image for each link */
#share-wrapper .facebook > a{
	background: url(img/facebook.jpg) no-repeat right;
}
#share-wrapper .twitter > a{
	background: url(img/twitter.jpg) no-repeat right;
}
#share-wrapper .youtube > a{
	background: url(img/Youtube-icon.png) no-repeat right;
}
.stumbleupon > a{
	background: url(buttons/stumbleupon.jpg) no-repeat right;
}
#share-wrapper .delicious > a{
	background: url(img/delicious.jpg) no-repeat right;
}
#share-wrapper .google > a{
	background: url(img/google.jpg) no-repeat right;
}


/* small screen */
@media all and (max-width: 699px) {
	.tiwtter{ display:none;}
	.fb{ display:none;}
	.g{ display:none;}
	
	#share-wrapper {
		bottom: 0;
		position: 100px;;
		padding: 5px 5px 10px 5px;
		background: url(img/img12.jpg);
		width: 100%;
		margin: 0px;
		-webkit-box-shadow: 0 -1px 4px rgba(0, 0, 0, 0.15);
		-moz-box-shadow: 0 -1px 4px rgba(0,0,0,0.15);
		-o-box-shadow: 0 -1px 4px rgba(0,0,0,0.15);
		box-shadow: 0 -1px 4px rgba(0, 0, 0, 0.15);
	}
	#share-wrapper ul.share-inner-wrp {
		list-style: none;
		margin: 0px auto;
		padding: 0px;
		text-align: center;
		overflow: auto;
	}
	#share-wrapper li.button-wrap {
		display: inline-block;
		width: 52px!important;
		margin : 0px;
		padding: 0px;
		margin-left:0px!important;
	}
	#share-wrapper li.button-wrap > a {
		height: 32px;
		display: inline-block;
		text-indent: -10000px;
		width: 32px;
		padding-right: 0;
		float: right;
	}
}


</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Shruti Laya Priya</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">

     <link rel="stylesheet" href="css/normalize_intro.css">
     <link rel="stylesheet" href="css/style_intro.css">
	<link rel="stylesheet" href="css/base_intro.css">
	<link rel="stylesheet" href="css/grid_intro.css">
	
	<link rel="stylesheet" href="css/demo_intro.css">
	<link rel="icon" type="image/png" href="img/flame-with-hexgon3.png">
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="js/scripts.js"></script>
</head>

<body>
<div class="container clearfix">
 <div class="grid_12 ">
    <p>
    
    </p>
  </div>
  
  <div class="clear"></div>
 <div class="grid_12 ">
    <p>
    
    </p>
  </div>
  
  <div class="clear"></div>
 <div class="grid_12 ">
    <p>
    
    </p>
  </div>
  
  <div class="clear"></div>
  
  <div class="grid_20">
    <div class="bg">
    <img src="img/newlayabg1.png" width="1000" >
   </div>
  </div>
  
  <div class="clear"></div>
  
  <div class="grid_4 prefix_4 suffix_3 ">
    <div class="enter">
     <a href="enter.php"> Enter
     
     </a>
    
     
  </div></div>                  
  <div class="clear"></div>
     
      <div class="grid_12 ">
   
  </div>
  
  <div class="clear"></div>
  
   <div class="grid_12 ">
    <p>
    
    </p>
  </div>
  
  <div class="clear"></div>
   <div class="grid_12 ">
    <p>
    
    </p>
  </div>
  
  <div class="clear"></div> <div class="grid_12 ">
    <p>
    
    </p>
  </div>
  
  <div class="clear"></div>
   <div class="grid_12 ">
    <p>
    
    </p>
  </div>
  
  <div class="clear"></div>
   <div class="grid_12 ">
    <p>
    
    </p>
  </div>
  
  <div class="clear"></div>
   <div class="grid_12 ">
    <p>
    
    </p>
  </div>
  
  <div class="clear"></div>
  
     
     <div class="grid_12 ">
   
<div id="share-wrapper">
    <ul class="share-inner-wrp">
     <!-- Google -->
        <li class="google button-wrap"><a href="#">Plus Share</a><div class="g"><div class="g-plusone" data-size="medium"></div>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script></div></li>
        <!-- Facebook -->
        <li class="facebook button-wrap"><a href="#">Facebook</a> <div class="fb"><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script><div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div></div></li>
        
        <!-- Twitter -->
        <li class="twitter button-wrap"><a href="#">Tweet</a> <div class="tiwtter"><a href="https://twitter.com/share" class="twitter-share-button" data-hashtags="Layathandava">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div></li>
        
         <!-- Digg -->
        <li class="youtube button-wrap"><a href="#">You Tube</a></li>
        
        <!-- Stumbleupon -->
        <li class="stumbleupon button-wrap"></li>
      
         <!-- Delicious -->
        <li class="delicious button-wrap"></li>
        
       
        
        <!-- Email -->
       
    </ul>
</div>



</div>
  
  

  

  
  
  
  
</body>
</html>