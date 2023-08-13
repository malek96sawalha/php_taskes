<?php

$conn = mysqli_connect("localhost", "root", "", "students");
// if (!$conn){
//     echo "failed to connect";
// }else{
//     echo "connected";
// }
$result = mysqli_query($conn,"SELECT * FROM studentsdata");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="students.php" method="post">
        <input type="text" name="name" placeholder="Studente Name" required><br><br>
        <input type="text" name="age" placeholder="Studente Age"><br><br>
        <input type="email"name="email" placeholder="Studente Email"><br><br>

        <input type="submit" name="save" value="submit">



    </form>
<?php
if(isset($_POST['save'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    $sql = "INSERT INTO studentsdata (nameOfstudent, age, email) VALUES ('$name', '$age', '$email')";
    
    // var_dump($result);
    mysqli_query($conn, $sql);
// if (mysqli_query($conn, $sql)){

//     echo "New record added successfully";
// }else{
//     echo "Record dose not added successfully";
// }
}
?>
    <table id="datatable">
        <thead>
            <th>Studente Name</th>
            <th>Studente Age</th>
            <th>Studente Email</th>
            <th>Update</th>
            <th>Delete</th>
        </thead>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($result)){
        ?>       
        <tbody class= <?php if (isset($classname)) echo $classname;?>>
            <td><?php echo $row["nameOfstudent"];?></td>
            <td><?php echo $row["age"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><a href="update.php?id=<?php echo $row["id"];?>">Update</a></td>
            <td><a href="delete.php?id=<?php echo $row["id"];?>">Delete</a></td>
        </tbody>

<?php
$i++;
 }
?>
    </table>
</body>
</html>
