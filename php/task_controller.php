<?php


if ( isset ( $_REQUEST [ 'cmd' ] ) )
{
    $cmd = $_REQUEST[ 'cmd' ];
    
    switch ( $cmd )
    {
        case 1:
            addtask ( );
            break;
        default:
            echo '{"result":0,message:"failed command"}';
            break;
    }//end of switch
    
}//

function addtask(){
	include("task.php");
	$obj=new task();
	$name=$_REQUEST['nme'];
	$ddate=$_REQUEST['ddate'];
	$des=$_REQUEST['des'];
	$sdate=$_REQUEST['sdate'];
	$supv_id = 1;
	$nurse_id =1;
	if(!$obj->add_task($name,$sdate,$ddate,$des,$nurse_id,$supv_id)){
		echo  '{"result":0,"message": "failed to add task"}';
	}
	else{
		echo  '{"result":1,"message": "Successfully added task"}';
	
	}
}
?>