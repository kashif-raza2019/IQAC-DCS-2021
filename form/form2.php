<?php session_start();
 require 'lib/functions.php';
?>
<h1>TEST FORM OF FORMS</h1>
<form action="./form2.php" method="POST">
<!-- name of form to create-->
<div class="form-group">
    <label for="Name of Form" class="control-label">Name of Form</label>
    <input type="text" name="name of form" id="name of form" class="form-control" required />

</div>
 
<!-- field1-->
<div class="form-group">
    <label for="Field1" class="control-label">Field1</label>
    <input type="text" name="Field1" id="Field1" class="form-control" required />

</div>
<!-- field1 type-->
<div class="form-group">
    <label for="Field1type" class="control-label">Field1 type</label>
    
    <select name="Field1type" required >
    <option value=> </option>
    <option value="text">Default/text</option>
    <option value="number">Number</option> 
    <option value="date">Date</option> </select>

</div>
<!-- field2-->
<div class="form-group">
    <label for="Field2" class="control-label">Field2</label>
    <input type="text" name="Field2" id="Field2" class="form-control" />

</div>
<!-- field2 type-->
<div class="form-group">
    <label for="Field2type" class="control-label">Field2 type</label>
    
    <select name="Field2type" >
    <option value=> </option>
    <option value="text">Default/text</option>
    <option value="number">Number</option> 
    <option value="date">Date</option> </select>

</div>
<!-- field3-->
<div class="form-group">
    <label for="Field3" class="control-label">Field3</label>
    <input type="text" name="Field3" id="Field3" class="form-control"  />

</div>
<!-- field3 type-->
<div class="form-group">
    <label for="Field3type" class="control-label">Field3 type</label>
    
    <select name="Field3type" >
    <option value=> </option>
    <option value="text">Default/text</option>
    <option value="number">Number</option> 
    <option value="date">Date</option> </select>

</div>
<!-- field4-->
<div class="form-group">
    <label for="Field4" class="control-label">Field4</label>
    <input type="text" name="Field4" id="Field4" class="form-control"  />

</div>
<!-- field4 type-->
<div class="form-group">
    <label for="Field4type" class="control-label">Field4 type</label>
    
    <select name="Field4type" >
    <option value=> </option>
    <option value="text">Default/text</option>
    <option value="number">Number</option> 
    <option value="date">Date</option> </select>

</div>
<!-- field5-->
<div class="form-group">
    <label for="Field5" class="control-label">Field5</label>
    <input type="text" name="Field5" id="Field5" class="form-control"  />

</div>
<!-- field5 type-->
<div class="form-group">
    <label for="Field5type" class="control-label">Field5 type</label>
    
    <select name="Field5type" >
    <option value=> </option>
    <option value="text">Default/text</option>
    <option value="number">Number</option> 
    <option value="date">Date</option> </select>

</div>
<!-- field6-->
<div class="form-group">
    <label for="Field6" class="control-label">Field6</label>
    <input type="text" name="Field6" id="Field6" class="form-control"  />

</div>
<!-- field6 type-->
<div class="form-group">
    <label for="Field6type" class="control-label">Field6 type</label>
    
    <select name="Field6type" >
    <option value=> </option>
    <option value="text">Default/text</option>
    <option value="number">Number</option> 
    <option value="date">Date</option> </select>

</div>
<!-- field7-->
<div class="form-group">
    <label for="Field7" class="control-label">Field7</label>
    <input type="text" name="Field7" id="Field7" class="form-control"  />

</div>
<!-- field7 type-->
<div class="form-group">
    <label for="Field7type" class="control-label">Field7 type</label>
    
    <select name="Field7type" >
    <option value=> </option>
    <option value="text">Default/text</option>
    <option value="number">Number</option> 
    <option value="date">Date</option> </select>

</div>
<!-- field8-->
<div class="form-group">
    <label for="Field8" class="control-label">Field8</label>
    <input type="text" name="Field8" id="Field8" class="form-control"  />

</div>
<!-- field8 type-->
<div class="form-group">
    <label for="Field8type" class="control-label">Field8 type</label>
    
    <select name="Field8type" >
    <option value=> </option>
    <option value="text">Default/text</option>
    <option value="number">Number</option> 
    <option value="date">Date</option> </select>

</div>
<!-- field9-->
<div class="form-group">
    <label for="Field9" class="control-label">Field9</label>
    <input type="text" name="Field9" id="Field9" class="form-control"  />

</div>
<!-- field9 type-->
<div class="form-group">
    <label for="Field9type" class="control-label">Field9 type</label>
    
    <select name="Field9type" >
    <option value=> </option>
    <option value="text">Default/text</option>
    <option value="number">Number</option> 
    <option value="date">Date</option> </select>

</div>
<!-- field10-->
<div class="form-group">
    <label for="Field10" class="control-label">Field10</label>
    <input type="text" name="Field10" id="Field10" class="form-control"  />

</div>
<!-- field10 type-->
<div class="form-group">
    <label for="Field10type" class="control-label">Field10 type</label>
    
    <select name="Field10type" >
    <option value=> </option>
    <option value="text">Default/text </option>
    <option value="number">Number</option> 
    <option value="date">Date</option> </select>

</div>
<button name="subject" type="submit" class="btn btn-primary" value="submit" > Create Form
</button>
</form>
<?php if($_SERVER['REQUEST_METHOD']=='POST'){
  $conn = get_connection(); $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); $namef = $_POST['name_of_form'];
    $res = $conn->query("SELECT * FROM form2 where name = '$namef'"); $row = $res->fetch();
    if($row){
       // $_SERVER['REQUEST_METHOD']='GET';
       $msg = "A FORM WITH GIVEN NAME ALREADY EXISTS"; var_dump($msg); die;
    }
}
if($_SERVER['REQUEST_METHOD']=='POST'&&isset($_POST['name_of_form'])) { 
     $_SESSION=$_POST; 
     

       
       $name = $_POST['name_of_form']; $one = $_POST['Field1']; $onet = $_POST['Field1type']; $two = $_POST['Field2']; $twot = $_POST['Field2type']; $three = $_POST['Field3'];
       $threet = $_POST['Field3type']; $four = $_POST['Field4']; $fourt = $_POST['Field4type']; $five = $_POST['Field5']; $fivet = $_POST['Field5type']; $six = $_POST['Field6']; 
       $sixt = $_POST['Field6type']; $seven = $_POST['Field7']; $sevent = $_POST['Field7type']; $eight = $_POST['Field8']; $eightt = $_POST['Field8type'];
       $nine = $_POST['Field9']; $ninet = $_POST['Field9type']; $ten = $_POST['Field10']; $tent = $_POST['Field10type'];
       $sql = "INSERT INTO form2 (name,field1,fieldtype1,field2,fieldtype2,field3,fieldtype3,field4,fieldtype4,field5,fieldtype5,field6,fieldtype6,field7,fieldtype7,field8,fieldtype8,field9,fieldtype9,field10,fieldtype10) values (
           '$name','$one','$onet','$two', '$twot','$three','$threet','$four','$fourt','$five','$fivet','$six','$sixt','$seven','$sevent','$eight','$eightt','$nine','$ninet','$ten','$tent'
       )";
      $conn->exec($sql);
     $conn = null;
    // var_dump($_POST);
    create_form($name); 
    create_table();
    session_unset(); 
}
?>
<?php if($_SERVER['REQUEST_METHOD']=='POST'){?> 
<a href = "<?php echo $_POST['name_of_form'] ?>.php">view created form</a>
<?php }?>