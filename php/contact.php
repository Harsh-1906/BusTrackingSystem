
<html>
 <head>
  <link rel="shortcut icon" href="favicon.ico" />
 <title>
        
     Bus Tracking System</title>
 <link rel="stylesheet" href="bootstrap-3.3.7\dist\css\bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-3.3.7\dist\css\bootstrap.css">
 
   <script src="bootstrap-3.3.7/js/tests/vendor/jquery.min.js"></script>
        <script src="bootstrap-3.3.7/js/collapse.js"></script>
        <script src="bootstrap-3.3.7/js/transition.js"></script>
        <script src="bootstrap-3.3.7/js/dropdown.js"></script>
         <script src="bootstrap-3.3.7/js/tab.js"></script>
         <script src="bootstrap-3.3.7/js/modal.js"></script>
         

 </head>
 <body>
      <nav class="nav navbar-inverse navbar-static-top">
         
            <div class="navbar-header" style="margin-left:2em">
          
               <h1 style="color: lightblue">Bus Tracking System</h1>
            </div>
             
        <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target="#abc"> 
                <span class="sr-only">Button</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            </button>

        <div class="collapse navbar-collapse pull-right" id="abc" style="margin-top:5%; margin-right:2em; color:white;">
            <ul class="nav navbar-nav">
               <li class="active"><a href="index.html"> <b>Home</b></a></li>
                   <li class="active"><a href="searchBus.html"><b>Search Bus</b></a></li>
                 <li class="active"><a href="trackBus.html"><b>Track Bus</b></a></li>
               
            </ul>
       </div>    
        </nav>
        <?php
require "PHPMailer-master/PHPMailerAutoLoad.php";
$mail = new PHPMailer();
$name= $_POST['fname'];
$Email=$_POST['mail'];
$sub=$_POST['subject'];
$com=$_POST['comments'];
//$mail->isSMTP();
//$mail->SMTPSecure = 'tls';
if(!(empty($name)||empty($com)||empty($sub)||empty($Email))){
$mail->Host = 'ssl://smtp.gmail.com';
$mail->Port = 465;

$mail->IsSMTP(); // send via SMTP
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "ptrivedi.1970@gmail.com"; // Enter your SMTP username
$mail->Password = "nilkeshtrivedi"; // SMTP password
$webmaster_email = $_POST['mail']; //Add reply-to email address
$email="ptrivedi.1970@gmail.com"; // Add recipients email address
 // Add Your Recipient’s name
$mail->From = $webmaster_email;
$mail->FromName = $_POST['fname'];;
$mail->AddAddress($email,$name);


//$mail->AddAttachment(“/var/tmp/file.tar.gz”); // attachment
//$mail->AddAttachment(“/tmp/image.jpg”, “new.jpg”); // attachment
$mail->IsHTML(true); // send as HTML
 
$mail->Subject = $_POST['subject'];
 
$mail->Body =   $_POST['comments'] ;      //HTML Body
 
$mail->AltBody = "Hi, this is your email body, etc, etc"; 
}
else{
    echo "Please Enter Data";
}
?>
<div class="container">
    <div class="jumbotron">
        <?php
        if(!$mail->Send()){
echo "Mailer Error: ". $mail->ErrorInfo;
} else {
echo "<h4 align=\"center\">Message has been sent successfully <a href=\"index.html\">Click Here</a> </h4>";
}
        ?>
        </div>
    </div>   

</body>
</html>