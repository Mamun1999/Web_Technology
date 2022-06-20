<html>
<?php
include("Conn.php");

if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['Email']) 
&& isset($_POST['website']) && isset($_POST['comment']) && isset($_POST['gender'])

){

$id=($_POST['id']);
$name=($_POST['name']);
$email=($_POST['Email']);
$website=($_POST['website']);
$comment=($_POST['comment']);
$gender=($_POST['gender']);



$sql="INSERT into form (id,name,email,website,comment,gender) VALUES ('$id','$name','$email',
    '$website','$comment','$gender')";
if(mysqli_query($conn, $sql)){
    echo 'inserted';
}
else{
    echo 'Not inserted';
}
}

?>
<h1>Sending data to database</h1>
</html>