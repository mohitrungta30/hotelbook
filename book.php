<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hotels</title>
    <style>
        body{background-color: #bef0edfb;
            background-image: url(back.jpg);
        }
        #main{
			border: 0px solid;
			width: 1260px;
			height: 190px;
			background-color: grey;
		}
		#header{
			background-repeat: no-repeat;
			border: 5px solid;
			width: 1250px;
			height: 190px;
			margin-top: -200px;
		}
		#header ul ul{
			border: 3px solid red;
			font-size: 30px;
			float: right;
			background-color: rgb(245, 215, 208);
			width: 110px;
			height: 50px;
			text-align: left;
			font-weight: bold;
			color: green;
			line-height: 50px;
			transition-duration: 0.3s;
			transition-property: all;
			transition-timing-function: linear;
			text-decoration-color: white;
			margin-right: 20px;
		}
		#header ul ul:hover{
			background-color: rgb(255,255,255,10);
			color: green;
		}
        #main h2{
            font-weight: bold;
            color: white;
            text-align: center;
            font-size: 50px;
        }
    </style>
</head>
<body>
    <div id="main"><img src="palms.jpeg" width="200px" height="190px" style="margin-left: 6px">
        <div id="header">
			<ul>
				<ul><a href="Login.html">Login</a></ul>
				<ul><a href="Hotels.html">Hotels</a></ul>
				<ul><a href="home.html">Home</a></ul>
			</ul>
		</div>
<?php

$name = filter_input(INPUT_POST,'Cname');
$email = filter_input(INPUT_POST, 'email');
$mobile = filter_input(INPUT_POST, 'mobile');
$in = filter_input(INPUT_POST, 'iny');
$out = filter_input(INPUT_POST, 'outc');
$room = filter_input(INPUT_POST, 'room');
$type = filter_input(INPUT_POST, 'Rtype');

if(!empty($name)||!empty($email)||!empty($mobile)||!empty($in)||!empty($out))
{
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotels";

    $conn = new mysqli ($host, $username, $password, $dbname);
    if(mysqli_connect_error()){
        mysqli_connect_errno().')'. mysqli_connect_errno();
    }
    else{
        $sql = "INSERT INTO book (Cname,email,mobile,iny,outc,room,Rtype) values ('$name','$email','$mobile','$in','$out','$room','$type')";
        if($conn->query($sql))
        {?>
            <marquee behavior="scroll" direction="left" scrollamount="20"><h2>
                Your room is booked...
            </h2></marquee>
           <?php
        }
        else{
            echo "Your room couldnt be booked. Try again.";
            ?>
            <?php
        }
        $conn->close();
    }
}
else{
    echo "Fill all the form to book a room";
    ?>
    <?php
}
?>
</body>
</html>