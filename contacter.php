<?php

session_start();


$con=mysqli_connect('localhost','root','');

mysqli_select_db($con, "contact");

$name   	=  $_POST['name'];
$mail       =  $_POST['email'] ;
$message    =  $_POST['message'] ;



$s=  "  select * from  contact_table where name='$name' &&  email ='$mail' ";


$result  =  mysqli_query($con, $s);


$num =  mysqli_num_rows($result);

if($num == 1){
	$_SESSION['name'] = $name;
	header('location:about1.html');
	echo "success";

}else{
	header('location:about1.html');
}


?>