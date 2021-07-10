<?php
if(isset($_POST['in'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($server, $username, $password);

    if(!$conn){
        die("connection to the database failed due to" .mysqli_connect_error());
    }
    //echo "Success connecting to the database";
    $in = $_POST['in'];
    $out = $_POST['out'];
    $room = $_POST['room'];
    $type = $_POST['type'];
    $sql = "INSERT INTO `check` (`in`, `out`, `room`, `type`)
    VALUES ('$in', '$out', '$room', '$type');";
    echo $sql;

    if($conn->query($sql) == true){
        echo "Hotels with available room are ";
    }
    else{
        echo "<br>No rooms available on the requested date";
    }
    $conn->close();
}
 ?>
