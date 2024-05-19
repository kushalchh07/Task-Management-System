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
  <?php
  if(isset($_POST['submit'])){
   //getting the value in variables
    $name =$_POST['name'];
    $description =$_POST['description'];
    $time =$_POST['time'];
    $priority =$_POST['priority'];
// checking all the fields all field.
    if($name!="" && $description!="" && $time!="" && $priority!=""){
  $query ="INSERT INTO tasks (title,description,time,priority) VALUES('$name','$description','$time','$priority')";
  $result=mysqli_query($connection,$query);
  if($result){
    header('location: display.php');
  }
    }
  else{
    echo "All fields are required.";
  }

  }
  
  ?>

<form action="#" method="post">
<form class="d-flex">
  <div class="mb-3">
    <label for="" class="form-label">Name:</label>
    <input type="text"
      class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Title of the task...">
    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Description:</label>
    <input type="text"
      class="form-control" name="description" id="" aria-describedby="helpId" placeholder="Descrption about Task...">
  </div>
   <div class="mb-3">
     <label for="" class="form-label">Time:</label>
     <input type="datetime-local"
       class="form-control" name="time" id="" aria-describedby="helpId" placeholder="">
   </div>
   <div class="mb-3">
    <label for="" class="form-label">Priority:</label>
    <select class="form-select form-select-lg" name="priority" id="">
        <option selected>Select one</option>
        <option value="Important">Improtant</option>
        <option value="VeryImportant">VeryImportant</option>
        <option value="Normal">Normal</option>
    </select>
   </div>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

 </form>
</div>
 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>