
            function sendRequest ( u )
           {
               var obj = $.ajax({url:u,async:false});
                var result=$.parseJSON(obj.responseText);
                return result;
           }

            function addnurse(){
				var name = encodeURI(document.getElementById("firstname").value);
				var user = encodeURI(document.getElementById("lastname").value);
				var pass = encodeURI(document.getElementById("age").value);
				var dept = encodeURI(document.getElementById("dob").value);
				
				 var url = "controller.php?cmd=1&firstname="+firstname+"&lastname="+lastname+"&age="+age+"&dob="+dob;
               var obj = sendRequest ( url );
			  
			 }
			
			 
			 