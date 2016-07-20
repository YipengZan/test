<?php
if (mysql_connect('localhost','root','1962313')){
	echo "connection succeed";} 
	else {
		echo "conncection fail";
	}

	echo 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq';
	cho 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq';
	
if (mysql_select_db("yipeng")) 	
{echo 'database selection succeed';}
else {
	echo 'database selection fail';}

if (mysql_query('insert into boats values("", "nang", "Blue")')) {
	echo 'insert succeed';} 
	else { 
		echo mysql_error();
		echo 'insert fail';
		} 

	mysql_close();
?>