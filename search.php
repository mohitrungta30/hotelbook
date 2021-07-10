<!DOCTYPE html>
<html lang="en">
<head>
    <title>Palms</title>
    <style>
        #header{
	border: 2px solid;
	height: 190px;
	background-color: grey;
	/* background-repeat: no-repeat; */
	/* border: 5px solid; */
	height: 190px;
	margin-left: 5px;
	 margin-right: 5px;
	margin-top: -5px;
}
#header ul ul{
	border: 3px solid red;
	font-size: 30px;
	float: right;
	background-color: rgb(245, 215, 208);
	height: 50px;
	text-align: left;
	font-weight: bold;
	color: green;
	transition-duration: 0.3s;
	transition-property: all;
	transition-timing-function: linear;
	text-decoration-color: white;
	margin-right: 15px;
}
#header ul ul:hover{
	background-color: rgb(255,255,255,10);
	color: green;
}
        h5{
            font-weight: bold;
            color: white;
            text-align: center;
            font-size: 25px;
        }
        #book{
			text-align:center;
			width:819px;
			height:550px;
			margin-top:auto;
			margin-left:160px;
		}
    </style>
</head>
<body style="overflow-x: hidden; background-image: url(back.jpg);width: 100%; background-repeat: no-repeat;background-size: cover; min-height: 100vh;">
<div id="header">
			<img src="palms.jpeg" width="200px" height="100%" style="margin-left: 6px; float: left;" > 
			<div id="uu" style="margin: auto;">
			<ul>
				<ul style="color: white"><a href="Login.html">Login</a></ul>
				<ul style="color: white;"><a href="Hotels.html">Hotels</a></ul>
				<ul style="color: white;"><a href="home.html">Home</a></ul>
			</ul>
		</div>
		</div>
<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,"hotels");

if(isset($_POST['Search']))
{
    $in = $_POST['iny'];
    $query = "SELECT * FROM hotel_list where iny = '$in'";
    $qu = mysqli_query($conn,$query);

    if ($qu) {
      while($gg = mysqli_fetch_assoc($qu)) {
		?>
		<h5>
			Check in date: <?php echo $gg['iny']; ?><br>
			Check out date: <?php echo $gg['outc']; ?><br>
			Hotel Name: <?php echo $gg['hotel_name']; ?><br>
			Number of rooms available: <?php echo $gg['no_of_rooms']; ?><br>
			Location: <?php echo $gg['location']; ?><br>
		</h5>
	<?php
//}

        // do something with the $row
      }

    }
    else {
      echo mysql_error();
    }
}
	
?>
    <div id="book">
		<h1>Booking</h1>
			<div id="a1">
				<form action="book.php" method="post">
					<label for="name">Name:</label>&nbsp;&nbsp;&nbsp;
					<input id="name" type="text" name="Cname" placeholder="Full Name" tabindex="1"><br><br>
					<label for="email">Email:</label>&nbsp;&nbsp;&nbsp;
					<input id="email" type="email" name="email" placeholder="Email"><br><br>
					<label for="mobile">Mobile No:</label>
					<input id="phone" type="text" name="mobile" placeholder="Number"><br><br>
					<div style="position: relative; height: 80px;">
						<label for="in">Check in:</label>
						<input id="calendar3" type="text" name="iny" required=""><br><br>
						<label for="out">Check out:</label>
						<input id="calendar4" type="text" name="outc" required=""><br><br>
					</div>
					Room type:
					<select name="room">
						<option value="A/C">A/C</option>
						<option value="Non-A/C">Non-A/C</option>
					</select>
					<select name="Rtype">
						<option value="single">single</option>
						<option value="double">double</option>
						<option value="quadruple">quadruple</option>
					</select><br><br>
					<input type="submit" name="submit" style="color: green;">&nbsp;&nbsp;&nbsp;
					<input type="reset" name="reset" value="Reset" style="color: green;">
				</form>
				
			</div>
			
    </div>
    </div>
</body>
</html>