<?php

require_once("db.php");
require_once("component.php");

$con = Createdb();

if(isset($_POST['Add']))
{
	Createdata();

	getData();
}

function Createdata()
{
	$bookname = textboxValue(value: "book_name");
	$publisher = textboxValue(value: "book_publisher");

	if($bookname && $publisher)
	{
		$sql = "INSERT INTO bookshelf(book_name,publisher)
				VALUES ('$bookname','$publisher')";

		if(mysqli_query($GLOBALS['con'],$sql))
		{
			alertrec();
		}
		else
		{
			alerterror();
		}

	}
	else
	{
		alertempty();
	}

}

function textboxValue($value)
{
	$txtbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));

	if(empty($txtbox))
	{
		return false;
	}
	else
	{
		return $txtbox;
	}
}

/*
function textNode($classname, $msg)
{
	$element = "<h6 class='$classname'>$msg</h6>";
	echo $element;
}
*/

function getData()
{
	$sql = "SELECT * FROM bookshelf";

	$result = mysqli_query($GLOBALS['con'], $sql);

	if(mysqli_num_rows($result) > 0)
	{
		return $result;
	}
}

function alertrec()
{
	echo '<script language="javascript">';
	echo 'alert("Book recorded")';
	echo '</script>';
}

function alertupdate()
{
	echo '<script language="javascript">';
	echo 'alert("Book Updated")';
	echo '</script>';
}


function alertempty()
{
	echo '<script language="javascript">';
	echo 'alert("Input fields are empty")';
	echo '</script>';
}


function alerterror()
{
	echo '<script language="javascript">';
	echo 'alert("Error")';
	echo '</script>';
}

function alertdelete()
{
	echo '<script language="javascript">';
	echo 'alert("Book Deleted")';
	echo '</script>';
}


