    
                
<!--
    2.7.1
-->
    
    
<script>
        	function save271(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var programmeCode = $($(rows[i]).find('select')[0]).val();
                        var v1 = $($(rows[i]).find('input')[0]).val();
                        var v2 = $($(rows[i]).find('input')[1]).val();
                        var v3 = $($(rows[i]).find('input')[2]).val();
                        if(programmeCode == "")
        				{
        					alert('Please select atleast one Programme Code to save');
        					return false;
        				}else if(v1=="" || v2=="" || v3==""){
                            alert('Please fill input fields to save');
        					return false;   
                        }
        				else
        				{
        				var idd = $(rows[i]).attr('id');		 
                            
        					rowss += "('"+"<?php echo $_SESSION['username']; ?>"+"','"+ programmeCode + "','"+ v1 + "','" + v2 + "','" + v3 + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){
         		   
         			       if (this.readyState == 4 && this.status == 200) {
                               
                               alert('Changes Saved Successfully');
                               $("#d271").slideToggle("slow");
                               rotate("tg271");
                               num_rows("tab271","ch271");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet271.php?rows="+rowss, true);
         			   			 xhttp.send();
        		}
        	}
        	
        	
        	function fetch_rows_271()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){
         	
        	
         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab271').find('tr');		
   					   $(x[x.length-1]).before(this.responseText);
   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          var pc = x[0];
	          			          var ay = x[1];
	          			          var idd = $(pc).attr('id');
	          			          idd = idd.substr(1);
	          			          //for deriving id#id
	            					fetch_programme_code(idd, $(pc).attr('value'));
                                   
	            					idd = idd.substr(2);
	            					console.log(x.length);
	            					//for deriving simple id for academic year
		            				//fetch_academic_year(idd, $(ay).attr('value'));
                                   
                                    
    							}        				
        			}
                    num_rows("tab271","ch271");
        		};
          			   			 xhttp.open("GET", "fetch271.php", true);
         			   			 xhttp.send();
        	}
		</script>
        
    <div class="col-sm-12" onclick='rotate("tg271"); $("#d271").slideToggle("slow");'>
        
        <div class="col-sm-1" id="ch271">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>
        
        <div id="h271" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>2.7.1<br> <br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>Online student satisfaction survey regarding teaching learning process.
                <br>
                <br>Please keep following and other relevant documents ready in hard copy:
                <br>* Upload any additional information
                <br>* Upload database of all currently enrolled students                
            </div>
        </div>
        
        <div id="to271" class="col-sm-1">
            <br><img class="image flip"  id="tg271" src="../images/toggle2.png" width="28" height="28">            
        </div>
        
    </div>

<center>
        <div class="col-sm-12" id="d271">
            <br>            
    <script>
        
    	function addRow271()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;
            
            /* onkeyup="percent_limit_input(this.value,this.id)"  onkeypress="return event.charCode >= 48"*/
            
            var html = '<tr id="'+i+'"><td><center><select id="'+ip+'" onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;" required></select></center></td><td><center><input id="'+ipn+'" type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td><td><center><input type="number" step="0.5" min="0" max="100"  placeholder="Number" style="width:120px;" required></center></td><td><center><input type="number" step="0.5" min="0" max="100"  placeholder="Number" style="width:120px;" required></center></td><td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';
    		var x = $('#tab271').find('tr');		
   			$(x[x.length-1]).before(html);
            
            fetch_programme_code(i);
    	}
    </script>
    <form>

        <table border="0" id="tab271">
            <tr>
                <th style="width:150px; padding:20px;">Programme Code</th>
                <th style="width:250px; padding:20px;">Programme Name</th>
                <th style="width:80px; padding:20px;">Number of students appeared in the final year examination</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Number of students passed in final year examination</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow271()" alt="Submit" width="48" height="48">
			</tr>
        </table>
        
        
        <input type="button" class="SAVE" onclick="save271($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">
        
    </form>
            
        </div>
    </center>    
    

