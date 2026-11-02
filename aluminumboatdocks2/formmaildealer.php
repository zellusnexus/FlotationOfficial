<?php
  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
      header("Location: /become-boat-dock-dealer-flotation-systems/");
      exit;
  }

  $fields = ['name', 'company', 'title', 'address1', 'address2', 'address3', 'address4', 'address5', 'address6', 'phonenumber', 'email', 'access', 'office', 'lakes', 'message'];
  foreach ($fields as $field) {
      $$field = isset($_POST[$field]) ? addslashes($_POST[$field]) : '';
  }

  $toemail = "info@aluminumboatdocks.com, amber@aluminumboatdocks.com";
  $subject = "Become A Dealer Request Form";

  $headers = "MIME-Version: 1.0\n"
            ."From: \"Flotation Systems\" <info@aluminumboatdocks.com>\n"
            ."Reply-To: \"".$name."\" <".$email.">\n"
            ."Content-type: text/html; charset=iso-8859-1\n";

  $body =   "Name: ".$name."<br>\n"
            ."Company: ".$company."<br>\n"
            ."Title: ".$title."<br>\n"
            ."Street Address: ".$address1."<br>\n"
            ."Apt/ Suite/ Bldg: ".$address2."<br>\n"
            ."City: ".$address3."<br>\n"
            ."State: ".$address4."<br>\n"
            ."Zip Code: ".$address5."<br>\n"
            ."Country: ".$address6."<br>\n"
            ."Phone: ".$phonenumber."<br>\n"
            ."Email: ".$email."<br>\n"
            ."Access to Boats/ Trucks: ".$access."<br>\n"
            ."Can Come to Office: ".$office."<br>\n"
            ."Lakes Serviced: ".$lakes."<br>\n"
            ."Comments: ".$message."<br>\n";

    mail($toemail, $subject, $body, $headers);
    header("Location: thankyou.html");
?>
