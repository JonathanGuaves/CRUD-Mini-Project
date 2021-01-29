<?php

function Createdb()
{
	$servername = "localhost";
	$username = "root";
	$password = "";

	$dbname = "Bookshelf";

	$con = mysqli_connect($servername, $username, $password);

	if(!$con)
	{
		die("Connection failed" .mysqli_connect_error());
	}

	$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

	if(mysqli_query($con, $sql))
	{
		$con = mysqli_connect($servername, $username, $password, $dbname);

		$sql = "
				CREATE TABLE IF NOT EXISTS bookshelf(
					id INT(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
					book_name VARCHAR(50) NOT NULL,
					publisher VARCHAR(20) NOT NULL
				)

		";

	if(mysqli_query($con, $sql))
	{
		return $con;
	}
	else
	{
		echo "Cannot create table";
	}

	}
	else
	{
		echo "Error while creating database".mysqli_error($con);
	}
}