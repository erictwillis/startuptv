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
    
</head>
<body style= "background-color:#ffffff !important;">
<div class="container">
    <nav class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <a href="#" class="brand"><img id="feature-screenshot" src="img/transparent-logo.png" alt="screenshot" style="height: 120px;"></a>
                   <ul class="nav">
                    <li class="active" style="text-alin:center;"><a href="#" style="padding: 29px;">Be Featured on Startup TV </a></li>
                    
                </ul>
               
            </div>
        </div>
    </nav>
</div>
</section>


           <div class="container">    <div class="row" style="    text-align: center;">

					<?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
    <form  action="" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 
    Your name:<br> 
    <input name="name" type="text" value="" size="30"/><br> 
    Your email:<br> 
    <input name="email" type="text" value="" size="30"/><br> 
    Your message:<br> 
    <textarea name="message" rows="7" cols="30"></textarea><br> 
    <input type="submit" value="Send email"/> 
    </form> 
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } else {         
            require 'PHPMailerAutoload.php';

        //include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

        $mail             = new PHPMailer();

        $body             = "";
        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
        $mail->SMTPAuth   = true;                  // enable SMTP authentication
        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
        $mail->Host       = $_ENV["MAILGUN_SMTP_SERVER"];      // sets GMAIL as the SMTP server
        $mail->Port       = $_ENV["MAILGUN_SMTP_PORT"];                   // set the SMTP port for the GMAIL server
        $mail->Username   = $_ENV["MAILGUN_SMTP_LOGIN"];  // GMAIL username
        $mail->Password   = $_ENV["MAILGUN_SMTP_PASSWORD"];         // GMAIL password

        $mail->SetFrom($email, $name);

        $mail->Subject    = "Message sent using your contact form"; 

        $address = "etwillis@gmail.com";
        $mail->AddAddress($address, "Eric Willis");
        $mail->MsgHTML($body);

        if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Email sent!";
        }
        } 
    }   
?> 
     </div></div>

<footer class="container footer-box">   
    <hr class="shadow-line" />         
                 <p><?php echo $btnText; ?></p>

     <h5>Copyright Â© 2016 Startup TV. All rights reserved. Not affiliated with Snapchat, Inc. <img draggable="false" class="emoji" alt="ðŸ”‘" src="img/ghost.png" style=" height: 26px; ">
<img draggable="false" class="emoji" alt="ðŸ”‘" src="img/key.png" style=" height: 26px; ">
        </h5>
</footer>
<script src="./js/jquery-1.8.0.min.js"></script>
<script src="./js/bootstrap.js"></script>

</body>
</html>
