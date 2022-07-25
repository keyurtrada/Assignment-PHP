<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="option.css">
<link rel="stylesheet" href="table.css">
<link rel="stylesheet" href="form.css">
</head>
<body>
<h1>StockerZ</h1>
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#product detail">Product Detail</a></li>
  <li><a href="#contact">Contact</a></li>
</ul>
<br>
<h2>User Management</h2>
</body>
</html>

<?php
$c=mysqli_connect('localhost','root','','stockerz');
$b=mysqli_query($c,'select * from admin');
	echo "<div class='container'>";
	echo"<form method='post'>
      <label for='no'>Enter User No</label><br>
      <input type='number' id='no' name='no' min='0'>
	  <input type='submit' value='Delete User' name='s1'></form>";
	echo"
	<div class='products'>
	<div class='table'>
		<div class='table-header'>
			<div class='header__item'><a id='no' class='filter__link'>No</a></div>
			<div class='header__item'><a id='username' class='filter__link'>Username</a></div>
			<div class='header__item'><a id='password' class='filter__link'>Password</a></div>
		</div>";
		  
		  while($result=mysqli_fetch_assoc($b))
		  { echo"<hr  width='123%'>";
			  echo "<div class='table-content'>	
			         <div class='table-row'>";
				echo"<div class='table-data'>".$result['no']."</div>";
				echo"<div class='table-data'>".$result['username']."</div>";
				echo"<div class='table-data'>".$result['password']."</div>";
				echo"</div>";
				echo"</div>";
				
		  }
echo"</div>";
echo"</div>";
echo"</div>";

if(isset($_POST['s1']))
{
	$no=$_POST['no'];
	$d="delete from `admin` where `no`='$no'";
	mysqli_query($c,$d);
}


?>
