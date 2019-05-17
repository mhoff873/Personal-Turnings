<html>
<head>
<?php
$clientemail=$_POST["clientemail"];
$subject=$_POST["subject"];
$message=$_POST["message"];
mail("mark@personalturings", $subject, $message, "From: ".$clientemail);
?>

<title>Thank You!</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="description" content="Unique Wood, Antler, and Stone Turnings"/>
<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />
	
</head>
<body>
  <div id="wrapper">
    <div id="header2"> </div>
    <div id="left">
      <div id="logo">
        <h1>&nbsp;</h1>
      </div>
      <div id="nav">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="onlinestore.html">Online Store</a></li>
          <li class="important"><a href="contactus.html">Contact Us</a></li>
          <li><a href="links.html">Links to Friends</a></li>
          <li><a href="photos.html">Photos</a></li>
        </ul>
      </div>
      <div id="news"></div>
      <div id="support">
        <p>&nbsp;</p>
      </div>
    </div>
    <div id="right2">
      <h2>Contact Personal Turnings</h2>
      <div id="welcome">

<form action="email_script.php" method="POST">
<b><p align="center" style="font-size:large; font:'Courier New', Courier, monospace; color:#000">Your message has been sent sucessfully!</p></b>

</form>

      </div>
      </div><div class="clear"> </div>
    <div id="spacer"> </div>
    <div id="footer">
      <div id="copyright">
        Copyright &copy; 2011 Personal Turnings All right reserved.
      </div>
	  <div id="footerline"></div>
    </div>
  </div>
  
<!--  <script type="text/JavaScript">var TFN='';var TFA='';var TFI='0';var TFL='0';var tf_RetServer="rt.trafficfacts.com";var tf_SiteId="fbda6c3a573a7b13522aa09eeefd1d5e0258c9d8";var tf_ScrServer=document.location.protocol+"//rt.trafficfacts.com/tf.php?k=fbda6c3a573a7b13522aa09eeefd1d5e0258c9d8;c=s;v=5";document.write(unescape('%3Cscript type="text/JavaScript" src="'+tf_ScrServer+'">%3C/script>'));</script><noscript><img src="http://rt.trafficfacts.com/ns.php?k=fbda6c3a573a7b13522aa09eeefd1d5e0258c9d8" height="1" width="1" alt=""/></noscript> -->
  
</body>
</html>
