<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'geedy.mysql.database.azure.com', 'geedy@geedy', 'PuiFai2023', 'exam', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$A = $_POST['A'];
$B = $_POST['B'];


$sql = "INSERT INTO guestbook (A , B) VALUES ('$A', '$B')";


if (mysqli_query($conn, $sql)) {
    header("Location: showexam.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>