<?php

/****************************************************************************************
*	This file displays the main page of the site
*****************************************************************************************/

require_once("includes.php");


try
{
	dispHeader('');
	dispHomeContent();
	dispWorkContent();
    dispPubContent();
	dispAboutContent();
	dispContContent();
	dispStuffContent();
	dispFooter();
}
catch(Exception $e)
{
	dispHeader("Error:");
	echo $e->getMessage();
	dispFooter();
	exit;
}      

?>
