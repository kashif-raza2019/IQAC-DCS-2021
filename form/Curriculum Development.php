 <?php require "lib/functions.php" ; $namef = $_SERVER["PHP_SELF"]; $namef = ltrim($namef, $namef[0]); $namef = substr($namef,0,-4);;
    ?> <?php  ?>
  <h1><?php echo $namef ?></h1>
   <form action="/<?php echo $namef?>.php" method="POST">   
   <?php $conn = get_connection(); $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); ?>

  <?php  $res = $conn->query("SELECT * FROM form2 where name = '$namef'"); $row = $res->fetch();  ?>
 <?php  $fname; $z = 0; $c = 1;   ?>
   <?php foreach($row as $f){  ?>
        <?php if($f!=$namef&&$f!=""){ ?>
          <?php if($c) { ?>
           <?php if($z==0){ $fname = $f;  } ?>
           <?php if($z==1){ ?>
             <div class="form-group">
             <label for="<?php echo $fname ?>" class="control-label"><?php echo $fname ?></label>
             <input type="<?php echo $f ?>" name="<?php echo $fname ?>" id="<?php echo $fname ?>" class="form-control" required />

             </div>
           <?php } ?>
           <?php $z = 1- $z; ?>
          <?php } ?> <?php $c = 1 - $c; ?>
        <?php } ?>
  <?php } ?>
  </div>
  <button name="subject" type="submit" class="btn btn-primary" value="submit" > Create Form
  </button>
  </form>
  <?php $n=$_SERVER["PHP_SELF"];
   $res = $conn->query("SELECT * FROM links where name = '$n'"); $row2 = $res->fetch();
   if(!$row2){
     $link = "INSERT INTO links (name) values ('$n')";
    $conn->exec($link);
   }
   $conn=null;
  ?>


  

  
 
 <?php if($_SERVER["REQUEST_METHOD"]=="POST"){
      
       
       make_query($_POST,$namef,$row); 
      
  }
  ?>
  
   
    