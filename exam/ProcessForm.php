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

if(isset($_POST['eid']) && isset($_POST['ename']) && isset($_POST['eage']) ){

$id=($_POST['eid']);
$name=($_POST['ename']);
$age=($_POST['eage']);




$sql="INSERT into employee (Employee_id,Employee_name,Employee_age)
 VALUES ('$id','$name','$age')";
if(mysqli_query($conn, $sql)){
    echo 'inserted';
}
else{
    echo 'Not inserted';
}
}
if(isset($_POST['did']) &&  isset($_POST['dname']) ){

    $id=($_POST['did']);
    $name=($_POST['dname']);
   
    
    
    
    
    $sql="INSERT into department (department_id,department_name)
     VALUES ('$id','$name')";
    if(mysqli_query($conn, $sql)){
        echo 'inserted';
    }
    else{
        echo 'Not inserted';
    }
    }

    if(isset($_POST['salary']) &&  isset($_POST['salaryAmount']) ){

        $salary=($_POST['salary']);
        $amount=($_POST['salaryAmount']);
       
        
        
        
        
        $sql="INSERT into salary (Salary_scale,Salary_amount)
         VALUES ('$salary','$amount')";
        if(mysqli_query($conn, $sql)){
            echo 'inserted';
        }
        else{
            echo 'Not inserted';
        }
        }

        if(isset($_POST['eid']) &&  isset($_POST['did']) ){

            $salary=($_POST['eid']);
            $amount=($_POST['did']);
           
            
            
            
            
            $sql="INSERT into employee_department (Employee_id,Department_id)
             VALUES ('$salary','$amount')";
            if(mysqli_query($conn, $sql)){
                echo 'inserted';
            }
            else{
                echo 'Not inserted';
            }
            }


            if(isset($_POST['eid']) &&  isset($_POST['salary']) ){

                $salary=($_POST['eid']);
                $amount=($_POST['salary']);
               
                
                
                
                
                $sql="INSERT into employee_salary (Employee_id,Salary_scale)
                 VALUES ('$salary','$amount')";
                if(mysqli_query($conn, $sql)){
                    echo 'inserted';
                }
                else{
                    echo 'Not inserted';
                }
                }

               

    
    

?>
</body>
</html>