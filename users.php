<?php
	include_once ( "adb.php" );
class users extends adb
{	
    
    function add_nurse($firstname,$lastname,$age,$dob){
       $insert_query= "insert into new_nurse set firstname='$firstname', lastname = '$lastname', age ='$age', dob = '$dob', usertype='nurse'";
        return $this->query ( $insert_query );
    }
	
	}
	