<?php
$to="gdeepak9192@gmail.com";
$subject="Hello , Mr Deepak Gupta";
$msg="This is a test the send mail or not";
// $header="From : Your@gmail.com\n\n";
if(mail($to,$subject,$msg))
{
	echo "Meassage Send Successfully";
}
else
{
	echo "Message Cann't Send Successfully";
}

?>