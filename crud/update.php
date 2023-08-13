<?php
$conn = mysqli_connect("localhost", "root", "", "students");
if (count($_POST)>0){
    mysqli_query($conn,"UPDATE studentsdata SET nameOfstudent='".$_POST['nameOfstudent']."',age='". $_POST['age']."' ,email='" . $_POST['email']. "' WHERE id='".$_POST['id']."'");
$alert = "Record successfully updated";
header("Location: students.php");
  exit();
}
$result = mysqli_query($conn,"SELECT * FROM studentsdata WHERE id='".$_GET['id']."'");
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
    <!-- <a href="updateByUser.php">Studentes List</a> -->
    <form action="" name= "form" method="post">
        <?php if(isset($alert)) {echo $alert;}?>
    <input type="hidden" name = "id"value="<?php echo $row['id']?>">
    <input type="text" name = "nameOfstudent"value="<?php echo $row['nameOfstudent']?>">
    <input type="text" name = "age"value="<?php echo $row['age']?>">
    <input type="email" name = "email" value="<?php echo $row['email']?>">
    <input type="submit" name="submit" value="submit">




    </form>

</body>
</html>