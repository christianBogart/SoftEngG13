<?php
/*
*includes adb class
*/

/**
 * This contains functions for retrieving and entering data of tasks into database
 *
 * The functions included in this class enable the user to retrieve a particular tasks
 * as well as all tasks. It also allows the user to search and delete tasks.
 *
 * @author      George Esiful Assan <george.assan@ashesi.edu.gh>
 * @copyright  2015-2016 
 */
include_once ( "adb.php" );
class Task extends adb
{	
    /**
    * Constructor for task class
    **/
    function  Task ( ){
    }
	 
    /**
    * A function to add a task. Using the values given to it submits a 
    * a query to the adb class and returns a boolean value based on
	* whether the entry was successful
	*
	* @param $name The title of the task
    * @param $start_date The date the task starts
	* @param $due_date The date the task is due
	* @param $description The details of the tasks
	* @param $nurse_id The id of the nurse
	* @param $superviser_id The id of the superviser
	* @return returns a boolean value
    **/

    function add_task ($name,$start_date,$due_date,$description,$nurse_id,$superviser_id)
    {
		$insert_query = "insert into task set task_name='$name',start_date = '$start_date', due_date = '$due_date'," .
		                "description ='$description', nurse_id = '1'," .
						" superviser_id = '1'";
        return $this->query ($insert_query);
    }
}

?>