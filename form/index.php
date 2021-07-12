
<?php
// index.php
require 'lib/functions.php';
?>
<a href="./testform.php">form</a>
<a href="./form2.php">form2</a>
 <?php $conn= get_connection(); ?>
  <?php $res = $conn->query("SELECT * FROM links"); ?> 
  <?php if($res->rowCount()>0){ ?>
     <?php while($row= $res->fetch()){ ?>
     <?php $name = $row['name']; $name=ltrim($name, $name[0]); $name=substr($name,0,-4); ?>
        <a href="<?php echo $row['name'] ?>"><?php echo $name ?></a>

        <?php ?>
     <?php } ?>
 <?php  }
 ?>
 <?php $conn=null; ?>