<?php 
// lib/functions.php

function get_connection()
{
    require 'config.php';
    $pdo = new PDO(
        $config['database_dsn'],
        $config['database_user'],
        $config['database_pass']
    );

    return $pdo;
}
function make_query($array, $name, $row){
    $cnt = 1; $temp = array(); $v = array(); 
    $conn = get_connection(); $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO $name (";
    for($i=1;$i<20;$i+=2){ 
        if($row[$i]!=""){
           array_push($temp,$row[$i]); array_push($v,$_POST[$row[$i]]);
        }
        else break;
    }
    for($i=0;$i<count($temp);$i++){
       $sql.="$temp[$i],";
    }
    $sql = substr($sql, 0 , -1); $sql.=") values (";
    for($i=0;$i<count($temp);$i++){
        $sql.="'$v[$i]',";
    }
    $sql = substr($sql, 0 , -1); $sql.=")"; 
    $conn->exec($sql);
    $conn = null;
}
function create_form($name){ 
    $myfile = fopen("$name.php","w");
    $string =' <?php require "lib/functions.php" ; $namef = $_SERVER["PHP_SELF"]; $namef = ltrim($namef, $namef[0]); $namef = substr($namef,0,-4);;
    ?> <?php  ?>
  <h1><?php echo $namef ?></h1>
   <form action="/<?php echo $namef?>.php" method="POST">   
   <?php $conn = get_connection(); $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); ?>

  <?php  $res = $conn->query("SELECT * FROM form2 where name = \'$namef\'"); $row = $res->fetch();  ?>
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
   $res = $conn->query("SELECT * FROM links where name = \'$n\'"); $row2 = $res->fetch();
   if(!$row2){
     $link = "INSERT INTO links (name) values (\'$n\')";
    $conn->exec($link);
   }
   $conn=null;
  ?>


  

  
 
 <?php if($_SERVER["REQUEST_METHOD"]=="POST"){
      
       
       make_query($_POST,$namef,$row); 
      
  }
  ?>
  
   
    ';
    fwrite($myfile,$string );
    fclose($myfile);
}
function create_table(){
    $conn = get_connection();
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); $z=0 ; $dt;
    $sql =  "CREATE TABLE $_SESSION[name_of_form] (
        id int(11) AUTO_INCREMENT PRIMARY KEY, ";
        foreach($_SESSION as $fields){
            if($z==1){
                $sql.="$dt";
                if($fields==""||$fields=="text"){
                    $sql.=" VARCHAR(30),";
                }
                else if($fields=="number"){
                    $sql.=" INT(25),";
                }
                else if($fields=="date"){
                    $sql.=" DATE,";
                }
                $z=0;
            }
            else if($fields!=$_SESSION['name_of_form']&&$z==0){
                if($fields==""){
                    break;
                }
                else{
                    $dt="$fields";
                }
                $z=1;
            }
     
        }
        $sql = substr($sql,0,-1);
        $sql.=")"; 

    $conn->exec($sql);
    $conn = null;
     
}