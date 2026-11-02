<?php
  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
      header("Location: /contact-flotation-systems/");
      exit;
  }

  $fields = ['name', 'phonenumber', 'email', 'message'];
  foreach ($fields as $field) {
      $$field = isset($_POST[$field]) ? addslashes($_POST[$field]) : '';
  }
  $comments = $message;

  $toemail = "info@aluminumboatdocks.com, amber@aluminumboatdocks.com";
  $subject = "From FLOAT Contact Form";

  $headers = "MIME-Version: 1.0\n"
            ."From: \"Flotation Systems\" <info@aluminumboatdocks.com>\n"
            ."Reply-To: \"".$name."\" <".$email.">\n"
            ."Content-type: text/html; charset=iso-8859-1\n";

  $body =   "Name: ".$name."<br>\n"
            ."Phone: ".$phonenumber."<br>\n"
            ."Email: ".$email."<br>\n"
            ."Comments:<br>\n"
            .$comments;

    mail($toemail, $subject, $body, $headers);
    header("Location: thankyou.html");
?>