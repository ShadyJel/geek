<?php
session_start();
include 'connect.php';
$username = $_POST['uname'];
$password = $_POST['psw'];
echo $username;

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    } 
    
    $sql = "SELECT * from users WHERE user = '$username' AND pass = '$password'";
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        $_SESSION['username'] = $username;
        while($row = $result->fetch_assoc()) {
            $type = $row["type"];
        }
    } else {
        echo "0 results";
    }
    if (isset($_SESSION['username'])){
        if($type = 'influencer'){
        echo "<script>
            alert('Youve succesfully logged in as ".$type."');
            window.location.href='index.html';
        </script>";
        }
        elseif($type = 'brand'){
            echo "<script>
            alert('Youve succesfully logged in as ".$type."');
            window.location.href='index.html';
            </script>";
//pinag iisipan pa kung ilalagay ba sa iisang html lang yung dashboard ng brand or influencer or magkahiwalay
        }
    }else{
            echo "Session didn't start.";
    }
    $con->close();
?>