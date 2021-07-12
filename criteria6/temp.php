<!--
    6.5.5
-->

        <script>
        
            function save655(ta)
        	{
                link =  document.getElementById("link6_5_5").value;
                ta = ta.value;
                
                console.log(ta+"\n"+link);
                
                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){
         		   
         			       if (this.readyState == 4 && this.status == 200) {
                               alert('Changes Saved Successfully');
                               $("#d655").slideToggle("slow");
                               rotate("tg655");
                               
                               if(document.getElementById("TA6_5_5").value==""){
                                    document.getElementById("ch655").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch655").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }
                               
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet655.php?desc="+ta+"&link="+link, true);
         			   			 xhttp.send();
        		}

        </script>
        
<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg655"); $("#d655").slideToggle("slow");'>
        
        <div class="col-sm-1" id="ch655">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>
        
        <div id="h655" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">6.5.5<br>Q<sub>1</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            Incremental improvements made during the preceding five years (in case of first cycle).
            </div>
        </div>
        
        <div id="to655" class="col-sm-1">
            <br><img class="image flip"  id="tg655" src="../images/toggle2.png" width="28" height="28" >            
        </div>
        
    </div>
        

    <div class="col-sm-12" id="d655">
        
<center>
    
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
            
    <form>
        
        <textarea id="TA6_5_5" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">
            
        </textarea>
        
        <br><br>

        <div style="height:10px; visibility:hidden; height:0px;">
        
        <div style="margin-left:-615px; font-weight:bold;">
            File Description : 
        </div>
        
        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>
        
        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link6_5_5" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>
        
        </div>
            
        <input type="button" class="SAVE" onclick="save655( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">
        
    </form>
</center>
    </div>
    
<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>
