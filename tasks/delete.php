<?php include '../connection/config.php';
?>
<?php

if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];

    $query= "delete from `tasks`where id =$id";
    $result=mysqli_query($connection,$query);
    if($result){
      header('location: display.php');
    }
}

?>