<?php
include_once 'students.php';
$sql = "DELETE FROM studentsdata WHERE id='".$_GET["id"]."'";
if (mysqli_query($conn, $sql)) {
      echo "Record deleted successfully";
    } else {
      echo "Delete record faild: " . mysqli_error($conn);
    }
?>