<?php

if(isset($_REQUEST['submit']))
{
	$name=$_REQUEST['name'];
	
	if(empty($name))
	{
		echo"Enter your Name";
	}
	elseif(strlen($name)<=1)
	{
		echo"name is too short";
	}
	else
  {
    echo"OKAY";	
  }



if(isset($_REQUEST['submit']))
 {
	$email=$_REQUEST['submit'];
	if(empty($email))
	   {
		echo"Enter your email";
		}
		else
		{
			echo "OKAY";
		}

	}
	if(isset($_REQUEST['submit']))
 {
	$gender=$_REQUEST['submit'];
	if(empty($gender))
	   {
		echo"Choose a gender";
		}
		else
		{
			echo "OKAY";
		}

	}
	
}




?>