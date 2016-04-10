<!DOCTYPE html>

<?php 
include('db_connect.php');
$selData=mysql_fetch_array(mysql_query("select * from startuptv where id=1"));
$btnText=$selData['btnText'];
$currentHost=$selData['currentHost'];
$bio=$selData['bio'];
$topic=$selData['topic'];
$div1=$selData['div1'];
$div2=$selData['div2'];
$div3=$selData['div3'];
$div1Text=$selData['div1Text'];
$div2Text=$selData['div2Text'];
$div3Text=$selData['div3Text'];

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	
    
    <title>Startup TV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="./css/bootstrap-responsive.css" type="text/css">
    <link rel="stylesheet" href="./css/strip.css" type="text/css">
    <link rel="stylesheet" href="./css/strip-responsive.css" type="text/css">
   	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,700' rel='stylesheet' type='text/css'>
    
</head><body style= "background-color:#ffffff !important;">
<section class="section-box shadow" style=" margin-bottom: -30px; ">
<div class="container">
    <nav class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <a href="#" class="brand">     Startup TV <img id="feature-screenshot" src="img/FitnessBelt.png" alt="screenshot" style="height: 120px;"></a>
                   <ul class="nav">
                    <li class="active" style="float: left;    padding-top: 59px;"><a href="#">Be Featured on Startup TV </a></li>
                    
                </ul>
               
            </div>
        </div>
    </nav>
</div>
</section>

<section class="section-box shadow">
<div class="container"> 
    <div class="row" >
        <header class="highlight span12" >
            <h3 style="font-size: 28px;">Startup TV gets behind the scenes of the startup world, daily. </h3> <br/>
		<img src="img/snapus.png" style="margin:-20px;vertical-align:top;" />			
            <img id="feature-screenshot" src="uploadImg/snapchat.png1460257196.png" alt="screenshot" style="height: 300px;">           
            <p style="margin-left: 36px;"><?php echo $btnText; ?></p>
			
		
        </header>        
    </div>   
    </div>    
</section>

<section class="section-box shadow">
    <div class="container">     	
        <div class="row">
             <h3 style="font-size: 28px; margin-left: 36px;">Upcoming Takeovers</h3> 
    	
            <article class="span4 center-align">
                <img src="<?php echo $div1; ?>" alt="responsive"/>                    
                <?php echo $div1Text; ?>
            </article>
            <article class="span4 center-align">
                <img src="<?php echo $div2; ?>" alt="twitter"/>
                <?php echo $div2Text; ?>
            </article>
            <article class="span4 center-align">
            	<img src="<?php echo $div3; ?>" alt="heartwork" />
                 <?php echo $div3Text; ?><br/><br/>
            </article>                    	
   		</div>
<p style="font-size: 22px; text-align:center;"><br> The world's most passionate founders, makers, and startup enthusiasts hang out on Startup TV on Snapchat and share their stories, products, and insights about tech. </p>
    </div>   
</section> 


				
        </header>        
    </div>   
    </div>    
</section>
<footer class="container footer-box">   
    <hr class="shadow-line" />         
                 <p><?php echo $btnText; ?></p>

     <h5>Copyright © 2016 Startup TV. All rights reserved. Not affiliated with Snapchat, Inc. <img draggable="false" class="emoji" alt="🔑" src="img/ghost.png" style=" height: 26px; ">
<img draggable="false" class="emoji" alt="🔑" src="img/key.png" style=" height: 26px; ">
        </h5>
</footer>
<script src="./js/jquery-1.8.0.min.js"></script>
<script src="./js/bootstrap.js"></script>

</body>
</html>

