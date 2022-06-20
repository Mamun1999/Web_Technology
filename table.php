<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
  include('conn.php');

 if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['department']) ){

    $id=($_POST['id']);
    $name=($_POST['name']);
    $department=($_POST['department']);

    $sql="INSERT into student (id,name,department) VALUES ('$id','$name','$department')";
    if(mysqli_query($conn, $sql)){
        echo 'inserted';
    }
    else{
        echo 'Not inserted';
    }
 }

?>

<form action="table.php" method="POST">

ID: <input type="text" name="id"><br><br>
Name: <input type="text" name="name"><br><br>
Department: <input type="text" name="department"><br><br>
<input type="submit" value="submit"><br><br>





</form>
    
<!-- <table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>department</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
</table> -->

</body>
</html>