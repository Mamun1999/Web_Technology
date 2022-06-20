

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
    include("conn.php");

$sql ="select department.department_name from department inner join 
                employee_department on department.department_id=employee_department.Department_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "DeptName: $row[department_name] <br>";
  }
} else {
  echo "0 results";
}



$sql ="select employee.Employee_name from employee inner join employee_salary on
employee.Employee_id=employee_salary.Employee_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: $row[Employee_name]";
  }
} else {
  echo "0 results";
}

$sql ="UPDATE employee SET Employee_Age=Employee_Age+10 WHERE Employee_Age != (SELECT AVG(Employee_Age) FROM employee)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "updated succesfully";
  }
} else {
  echo "0 results";
}

?>
</body>
</html>