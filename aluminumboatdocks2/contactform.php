<?php
  $fname=addslashes($_POST['fname']);
  $lname=addslashes($_POST['lname']);
  $phone=addslashes($_POST['phone']);
  $email=addslashes($_POST['email']);
  $prop=addslashes($_POST['prop']);
  $sq=addslashes($_POST['sq']);
  $comments=addslashes($_POST['message']);

	
 // you can specify which email you want your contact form to be emailed to here

  $toemail = "homeinspector06@aol.com, ben@inklinkcreative.com, mattenglandhsv@gmail.com";
  $subject = "From Web Contact Form";

  $headers = "MIME-Version: 1.0\n"
            ."From: \"".$name."\" <".$email.">\n"
            ."Content-type: text/html; charset=iso-8859-1\n";

  $body = 	"First Name: ".$fname."<br>\n"
	  		."Last Name: ".$lname."<br>\n"
            ."Phone: ".$phone."<br>\n"
            ."Email: ".$email."<br>\n"
		    ."Property Address: ".$prop."<br>\n"
		    ."Square Footage: ".$sq."<br>\n"
            ."Comments:<br>\n"
            .$comments;


  // if (!ereg("^[a-zA-Z0-9_]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$", $email))
  // {
    
  // exit;
  // }

    mail($toemail, $subject, $body, $headers);
    header("Location: thankyou.html");
?>
