
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
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Shruti Laya Priya</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">

     <link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/demo.css">
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
     <div class="footer">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0"><tr>
  <td width="30%" valign="middle" align="center">
 <a href="https://www.facebook.com/ramadasbhat" target="_blank" title="Me on Facebook"><img src="core/flogo.png" height="30"></a> &nbsp; <a href="https://plus.google.com/113241305087469935578" target="_blank">
  <img src="core/glogo.png" width="30"></a> &nbsp; <a href="http://twitter.com/#!/ramadasbhat130" target="_blank"><img src="core/tlogo.png" height="30"></a> &nbsp; <a href="http://www.youtube.com/user/ramadasbhat" target="_blank"> <img src="core/ylogo.png" height="26"></a>
  </td>

  <td width="10%" >
   
    <!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-size="medium"></div>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
    
    </td>
    <td align="center" width="10%" valign="middle">
    <a href="https://twitter.com/share" class="twitter-share-button" data-hashtags="Layathandava">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    
    </td>
    
  <td width="100">
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=370991952956142";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="https://www.facebook.com/Layathandava" data-send="true" data-layout="button_count" data-height="40" data-width="50" data-show-faces="false" data-font="arial"></div>
    </td>
   
    
  
  <td width="10%" align="center" valign="middle">
&copy;2010-<? echo date("Y");?>
  </td>
  <td>Visitors:-<? echo $_SESSION["visited"];?></td>
  
</tr></table>
  </div>
  </div>
  

    
  </div>
</body>
</html>