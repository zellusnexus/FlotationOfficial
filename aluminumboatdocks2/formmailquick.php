<?php
  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
      header("Location: /quick-connect/");
      exit;
  }

  $fields = ['name', 'phonenumber', 'email', 'water'];
  foreach ($fields as $field) {
      $$field = isset($_POST[$field]) ? addslashes($_POST[$field]) : '';
  }

  $toemail = "info@aluminumboatdocks.com, amber@aluminumboatdocks.com";
  $subject = "From Quick Connect Contact Form";

  $headers = "MIME-Version: 1.0\n"
            ."From: \"Flotation Systems\" <info@aluminumboatdocks.com>\n"
            ."Reply-To: \"".$name."\" <".$email.">\n"
            ."Content-type: text/html; charset=iso-8859-1\n";

  $body =   "Name: ".$name."<br>\n"
            ."Phone: ".$phonenumber."<br>\n"
            ."Email: ".$email."<br>\n"
            ."Lake: ".$water."<br>\n";

    mail($toemail, $subject, $body, $headers);
    header("Location: thankyou.html");
?>
