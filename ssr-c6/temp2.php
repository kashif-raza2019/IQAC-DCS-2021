    
    
<!--
    6.5.4
-->
<script>
        	function save654(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var i1 = $($(rows[i]).find('select')[0]).val();
                        var i2 = $($(rows[i]).find('input')[0]).val();
                        var i3 = $($(rows[i]).find('input')[1]).val();
                        var i4 = $($(rows[i]).find('input')[2]).val();
                        var i5 = $($(rows[i]).find('input')[3]).val();
                        var i6 = $($(rows[i]).find('input')[4]).val();
                        
                        if(i1 == "" || i2 == "" || i3 == "" || i4 == "" || i5 == "" || i6 == "")
        				{
        					alert('Please input fields to save');
        					return false;
                        }else
        				{
                            var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ i1 + "','"+ i2 + "','" + i3 + "','" + i4 + "','"+ i5 + "','"+ i6 + "','" + idd +"')";
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
                               
                               //alert("Please make sure to cross check with data in 2.2.2");
                               
                               $("#d654").slideToggle("slow");
                               rotate("tg654");
                               num_rows("tab654","ch654");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet654.php?rows="+rowss, true);
         			   			 xhttp.send();
        		}
        	}
        	
        	
        	function fetch_rows_654()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){
         	
        	
         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab654').find('tr');		
   					   $(x[x.length-1]).before(this.responseText);
   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
                        
                        
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {

                                   
                                   
                                   x = $(responseRows[i]).find('select');
	          			           var ay = x[0];
                                   var idd = $(ay).attr('id');
                                                                      
	          			            idd = idd.substr(1);
                                    console.log(i+"****"+idd+"******************");
	            					console.log(x.length);
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));   

    				           }        				
        			}
                    num_rows("tab654","ch654");
        		};
          			   			 xhttp.open("GET", "fetch654.php", true);
         			   			 xhttp.send();
        	}
		</script>
        
    <div class="col-sm-12" onclick='rotate("tg654"); $("#d654").slideToggle("slow");'>
        
        <div class="col-sm-1" id="ch654">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>
        
        <div id="h654" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>6.5.4 <br> Q<sub>n</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
                Quality assurance initiatives of the institution include.
            </div>
        </div>
        
        <div id="to654" class="col-sm-1">
            <br><img class="image flip"  id="tg654" src="../images/toggle2.png" width="28" height="28">            
        </div>
        
    </div>

<center>
        <div class="col-sm-12" id="d654">
            <br>            
    <script>
        
    	function addRow654()
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
            
            var C1 = '<td><center><select placeholder="Year" style="width:185px;" id="'+ay+'"></select></center></td>';
            var C2 = '<td><center><input type="text" placeholder="Teacher Name" style="width:200px;" required></center></td>';
            var C3 = '<td><center><input type="text" placeholder="PAN No." style="width:200px;" required></center></td>';
            var C4 = '<td><center><input type="text" placeholder="conference/workshop name" style="width:200px;" required></center></td>';
            var C5 = '<td><center><input type="text" placeholder="Name" style="width:200px;" required></center></td>';
            var C6 = '<td><center><input type="number" placeholder="Amount(RS)" style="width:200px;" required></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';
            
            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+C5+C6+CR+'</tr>';

    		var x = $('#tab654').find('tr');		
            $(x[x.length-1]).before(html);
            
            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab654">
            <tr>
                <th style="width:200px; padding:20px;">Year</th>
                <th style="width:200px; padding:20px;">Name of Teacher</th>
                <th style="width:200px; padding:20px;">PAN No.</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Name of conference/ workshop attended for which financial support provided</th>
                <th style="width:200px; padding:20px;">Name of the professional body for which membership fee is provided</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Amount of support</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow654()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow654()">Add a new Row</button></td> -->
			</tr>
          <!--  <tr>
                <td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Programme Name" style="width:250px;" required></center></td>
                <td><center><select placeholder="Year" style="width:80px;" required></select></center></td>
                <td><center><input type="text" placeholder="Percentage" style="width:120px;" required></center></td>
                <td><center><button onclick="$(this).parent().remove();">X</button></center></td>
            </tr>
            -->
        </table>
        
        
        <input type="button" class="SAVE" onclick="save654($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">
        
    </form>
            
        </div>
    </center>    

    
    
<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>
    
