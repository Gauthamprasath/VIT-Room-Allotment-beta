<?php
    $mysql_host = 'localhost';
    $mysql_user = 'root';
    $mysql_pass = '';
    $mysql_db = 'student';
    $conn = new mysqli($mysql_host, $mysql_user,$mysql_pass, $mysql_db);
    if(!@mysqli_connect($mysql_host, $mysql_user,$mysql_pass, $mysql_db)){
        die("Not connected");
    }
//    else{
//            echo "connected" . "<br>";
//    }
//
//    $sql = "SELECT ID, Password FROM user_info";
//    $result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
//    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo "id: " . $row["ID"]. " - Password: " . $row["Password"]. " " . "<br>";
//    }
//} else {
//    echo "0 results";
//}
$conn->close();

