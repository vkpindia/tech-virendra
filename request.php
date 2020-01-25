<?php
#echo $_POST['name'].'--'.$_POST['phone'].'--'.$_POST['comments'];
#exit;
$to = "virendra.kpande@gmail.com";
$subject = "New Member Request";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Dear Admin, There is a New Memeber request from kha-dhi.com, check below details</p>
<table border='0' cellpadding='5' cellspacing='5'>
<tr>
<td>Name</td><td>".$_POST['name']."</td>
</tr>
<tr>
<td>Name</td><td>".$_POST['email']."</td>
</tr>
<tr>
<td>Phone</td><td>".$_POST['phone']."</td>
</tr>
<tr>
<td>Comments</td><td>".$_POST['comments']."</td>
</tr>
<tr>
<td>Date of Submission</td><td>".date('d-M-Y')."</td>
</tr>

</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: No Reply' . "\r\n";
$headers .= 'Cc: infovkpg@gmail.com' . "\r\n";

$result= mail($to,$subject,$message,$headers);
echo $result;
?>