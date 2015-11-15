function sendRequest ( u )
           {
               var obj = $.ajax({url:u,async:false});
                var result=$.parseJSON(obj.responseText);
                return result;
           }//end of sendrequest

function addTask(){

            var taskname = encodeURI(document.getElementById("taskname").value);
            var des = encodeURI(document.getElementById("description").value);
            var sdate = encodeURI(document.getElementById("sdate").value);
            var ddate = encodeURI(document.getElementById("ddate").value);

             var url = "./php/task_controller.php?cmd=1&nme="+taskname+"&ddate="+ddate+"&des="+des+"&sdate="+sdate;
               var obj = sendRequest ( url );
               refreshAddForm();
			   }
function refreshAddForm(){
	  document.getElementById("taskname").value ="";
      document.getElementById("description").value ="";
      document.getElementById("sdate").value = "";
      document.getElementById("ddate").value = ""; 
}