<?php

/****************************************************************************************
*	This file displays the main page of the site
*****************************************************************************************/

require_once("includes.php");
if(isset($_POST['name'])) $name=trim($_POST['name']); else $name=NULL;
if(isset($_POST['email']) && trim($_POST['email'])!="") $email=trim($_POST['email']); else $email="webmaster@f.vasilak.is";
if(isset($_POST['message'])) $text=trim($_POST['message']); else $text=NULL;

$report = NULL;

try
{

	if(isset($_POST['submit']))
	{    
		if($name!=NULL && $text!=NULL)
		{
			// In case any of our lines are larger than 70 characters, we should use wordwrap()
			$text = wordwrap($text, 70);
			$to      = "vasilakis@ceid.upatras.gr";
			$subject = 'f.vasilak.is name: '. $name;
			$headers = "From: $email " . "\r\n" .
			"Reply-To: $email" . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
			// Send
			$ret=mail_utf8($to, $subject, $text, $headers);
			if($ret==true) $report="Message has been sent! ";
			else $report="Message has not been sent! ";
		}
		else $report="You didn't complete the form appropriately!";
	}
	
	dispHeader('');
	dispHomeContent();
	dispWorkContent();
    dispPubContent();
	dispAboutContent();
	dispContContent($report);
	dispStuffContent();
	dispFooter();
	if($report!=NULL) echo "<script> window.location.hash = '#contact' </script>";
}
catch(Exception $e)
{
	dispHeader("Error:");
	echo $e->getMessage();
	dispFooter();
	exit;
}      

?>
