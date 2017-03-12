<?php

$name=$_POST["name"];
$from = $_POST["email"];
$msg=$_POST["message"];

$to ="sagard.cmagalur@gmail.com";

$header = "From: $from". "\r\n" ;

//$header .= "Reply-To: $from";

//if message is greater than 70 charecters
//$msg = wordwrap($msg, 70);

$subject = "Customer WriteUs(chinmayatradingcenter.com): ".$name;

$bool = mail($to,$subject,$msg, $header);

if($bool==true){
//echo '<script type="text/javascript">alert("Your messege has been recorded");</script>';
header("Location: contactUs.php");
exit();
}
else if($bool == false){
	echo"failed to record message...Please try again";
}


?>