<?php




function add_nurse( ){
	include("users.php");
	$obj=new users();
	$firstname=$_REQUEST['firstname'];
	$lastname=$_REQUEST['lastname'];
	$age=$_REQUEST['age'];
    $dob =$_REQUEST['dob'];
	
	if(!$obj->add_nurse($firstname,$lastname,$age,$dob)){
		echo  '{"result":0,"message": "failed to add nurse"}';
	}
	else{
		echo  '{"result":1,"message": "Successfully added nurse"}';
	
	}
}
	
?>