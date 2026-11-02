<?php
  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
      header("Location: /customer-satisfaction-form/");
      exit;
  }

  $fields = ['name', 'address1', 'address2', 'address3', 'address4', 'address5', 'address6', 'phone', 'email', 'bow', 'dealer', 'deliver', 'deadlines', 'comms', 'service', 'quality', 'overall', 'message'];
  foreach ($fields as $field) {
      $$field = isset($_POST[$field]) ? addslashes($_POST[$field]) : '';
  }

  $toemail = "info@aluminumboatdocks.com, amber@aluminumboatdocks.com";
  $subject = "Customer Satisfaction Form";

  $headers = "MIME-Version: 1.0\n"
            ."From: \"Flotation Systems\" <info@aluminumboatdocks.com>\n"
            ."Reply-To: \"".$name."\" <".$email.">\n"
            ."Content-type: text/html; charset=iso-8859-1\n";

  $body =   "Name: ".$name."<br>\n"
            ."Street Address: ".$address1."<br>\n"
            ."Apt/ Suite/ Bldg: ".$address2."<br>\n"
            ."City: ".$address3."<br>\n"
            ."State: ".$address4."<br>\n"
            ."Zip Code: ".$address5."<br>\n"
            ."Country: ".$address6."<br>\n"
            ."Phone: ".$phone."<br>\n"
            ."Email: ".$email."<br>\n"
            ."Body of Water: ".$bow."<br>\n"
            ."Dealer: ".$dealer."<br>\n"
            ."Deliver results?: ".$deliver."<br>\n"
            ."Deadlines Met: ".$deadlines."<br>\n"
            ."Communication: ".$comms."<br>\n"
            ."Deliver: ".$deliver."<br>\n"
            ."Quality: ".$quality."<br>\n"
            ."Overall Experience: ".$overall."<br>\n"
            ."Comments: ".$message."<br>\n";

    mail($toemail, $subject, $body, $headers);
    header("Location: thankyou.html");
?>
