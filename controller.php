<?php

if ( isset ( $_REQUEST [ 'cmd' ] ) )
{
    $cmd = $_REQUEST[ 'cmd' ];
    
    switch ( $cmd )
    {
        case 1:
            add_nurse ( );
            break;
            default:
            echo '{"result":0,message:"failed command"}';
            break;
    }
    
}


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