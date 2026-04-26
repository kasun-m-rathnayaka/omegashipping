<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

if (isset($_POST)) {

    //exit();
    //$regex = "/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i";


    $to = "operations@omegashipping.net";
    $subject = "Messsage from " . $_POST['name'];

    $message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Dear Omegashipping , You have got an inquiry from a client.</p>
<table>
<tr>
<td><b> Name</b></td>
<td>" . $_POST['name'] . "</td>
</tr>
<tr>
<td><b>Email</b></td>
<td>" . $_POST['subject'] . "</td>
</tr>
<tr>
<td><b>Contact No</b></td>
<td>  " . $_POST['phone'] . " </td>
</tr>
<tr>
<td><b>Subject </b></td>
<td>" . $_POST['email'] . "</td>
</tr>
<tr>
<td><b>Message</b></td>
<td><p>" . $_POST['message'] . "</p></td>
</tr>
</table>
<br/>
<p>Thanks.</p>
<br/>
</body>
</html>
";

// Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
    $headers .= 'From: <' . $_POST['email'] . '>' . "\r\n";
    //$headers .= 'Cc: myboss@example.com' . "\r\n";

  mail($to, $subject, $message, $headers, '-f sales@pms.lk ');?>

     <script>alert("Thank you for contacting Prime Star , and we will contact you soon.. ");
 window.location="contact.html";
</script>
<?php  } ?>
