<?php
include 'connect.php';
$username = $_POST['uname'];
$password = $_POST['psw'];
$type = $_POST['type'];
echo $username;
$query = "INSERT INTO users (user, pass, type) VALUES ('$username', '$password', '$type')";

$data = mysqli_query($con, $query)or die(mysql_error()); 
if($data) 
{ 
    echo "<script>
        alert('Youre now registered');
        window.location.href='main.html';
    </script>";
}

?>