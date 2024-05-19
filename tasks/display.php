<?php include '../connection/config.php';
?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <div class="container">
  
 
<a name="" id="" class="btn btn-primary my-5" href="create.php" role="button">AddTasks</a>
  <div class="table-responsive">
    <table class="table table-primary">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Desciption</th>
          <th scope="col">Time</th>
          <th scope="col">Priority</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <?php
      $query= "SELECT * FROM `tasks`";
      $result=mysqli_query($connection,$query);
      if($result){
        $i=1;
        while( $row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
          $name=$row['title'];
          $description=$row['description'];
          $time=$row['time'];
          $priority=$row['priority'];
          
         
          echo'
          <tbody>
          <tr class="">
            <td scope="row">'.$i++.'</td>
            <td>'.$name.'</td>
            <td>'.$description.'</td>
            <td>'.$time.'</td>
            <td>'.$priority.'</td>
            <td> <a name="" id="" class="btn btn-success" href="edit.php?editid='.$id.'" role="button" color="blue">Update</a>
            <a name="" onclick="return confirm(\'Are you sure?\');" class="btn btn-danger" href="delete.php?deleteid='.$id.'" role="button" color="red" >Delete</a></td>
          </tr> ';
        }
      }
      ?>
  
    
    </table>
  </div>
  </div>
</body>

</html>

    