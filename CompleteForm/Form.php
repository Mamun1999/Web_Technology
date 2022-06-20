<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="proceesForm.php" method="post">

Name: <input type="text" name="name" ><br>
Id: <input type="text" name="id"><br>

E-mail: <input type="text" name="Email" ><br>

Website: <input type="text" name="website" ><br>

Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<br>


<input type="radio" name="gender"
<?php if (isset($gender))  $gender="female";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender))  $gender="male";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender="other")?>
value="other">Other



<input type="submit">
</form>

    
</body>
</html>