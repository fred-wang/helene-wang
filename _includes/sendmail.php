{% raw %}
<?php
  $encoding = "utf-8";
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $subject = htmlspecialchars($_POST["subject"]);
  $message = htmlspecialchars($_POST["message"]);
  $message = wordwrap($message, 80);

  $header = "Content-type: text/plain; charset=".$encoding." \r\n";
  $header .= "From: ".$name." <".$email."> \r\n";
  $header .= "MIME-Version: 1.0 \r\n";
  $header .= "Content-Transfer-Encoding: 8bit \r\n";
  $header .= "Date: ".date("r (T)")." \r\n";

  $subject_preferences = array(
    "input-charset" => $encoding,
    "output-charset" => $encoding,
    "line-length" => 80,
    "line-break-chars" => "\r\n"
  );
  $header .= iconv_mime_encode("Subject", $subject, $subject_preferences);

  $success = mail("info@helene-wang.fr", $subject, $message, $header);
?>
{% endraw %}
