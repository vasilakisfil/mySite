<?php

//including required files
require_once('includes.php');


function valid_email($address)
{
  //elegxos ths metavlhths pou periexei to email tou xrhsth
  if (ereg('^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$', $address))
    return true;
  else 
    return false;
}

function db_connect()
{
	//sundesh sth vash ws xrhsths akinauth
	$db_conn = mysql_connect("localhost", "username", "password");
	if (!$db_conn)
	{
		echo 'Η σύνδεση στη βάση απέτυχε.Αν το πρόβλημα επιμένει εποικινωνήστε με τον adminstrator.'.mysql_error();
		exit();
	}

	//epilogh vashs
	$db_selected = mysql_select_db("mysite", $db_conn);
	if (!$db_selected)
	{
		die ("Η σύνδεση στη βάση απέτυχε.Αν το πρόβλημα επιμένει εποικινωνήστε με τον adminstrator. " . mysql_error());
	}
	//epistrofh tou resource tou mysql_connect()
	return $db_conn;
}

function db_insert3($table,$column1,$column2,$column3,$data1,$data2,$data3)
{
	//sundesh sth vash
	$conn=db_connect();
	//ektelesh tou query
	$message="INSERT INTO $table ($column1,$column2,$column3) values ($data1,$data2,$data3);";
	echo "$message";
	$result = mysql_query("$message");
	if (!$result)
	{
		throw new Exception('Δεν ήταν δυνατή η εκτέλεση του INSERT.');
	}
	//kleisimo ths vashs
	mysql_close($conn);
}


function db_execute($message,$error)
{
	//sundesh sth vash
	$conn=db_connect();
	//ektelesh tou query
	$result = mysql_query("$message");
	echo "$message";
	if (!$result)
	{
		throw new Exception("Δεν ήταν δυνατόν να εκτελεστεί το query $error");
	}
	//kleisimo ths vashs
	mysql_close($conn);
	//epistrofh tou resource tou mysql_query()
	return $result;
}





?>