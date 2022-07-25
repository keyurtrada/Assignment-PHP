<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="option.css">
<link rel="stylesheet" href="table.css">
</head>
<body>
<h1>StockerZ</h1>
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#product detail">Product Detail</a></li>
  <li><a href="#contact">Contact</a></li>
</ul>
<br>
<h2>View Products</h2>

</body>
</html>
<?php
$c=mysqli_connect('localhost','root','','stockerz');
$b=mysqli_query($c,'select * from product');
	echo "<div class='products'>
	<div class='table'>
		<div class='table-header'>
			<div class='header__item'><a id='pname' class='filter__link'>Product Name</a></div>
			<div class='header__item'><a id='price' class='filter__link'>Product price</a></div>
			<div class='header__item'><a id='pdesc' class='filter__link'>Product Desc</a></div>
			<div class='header__item'><a id='pcat' class='filter__link'>Product Category</a></div>
			<div class='header__item'><a id='pcompany' class='filter__link'>Product Company</a></div>
		</div>";
		  
		  while($result=mysqli_fetch_assoc($b))
		  { echo"<hr  width='123%'>";
			  echo "<div class='table-content'>	
			         <div class='table-row'>";
				echo"<div class='table-data'>".$result['pname']."</div>";
				echo"<div class='table-data'>".$result['price']."</div>";
				echo"<div class='table-data'>".$result['pdesc']."</div>";
				echo"<div class='table-data'>".$result['pcat']."</div>";
				echo"<div class='table-data'>".$result['pcompany']."</div>";
				echo"</div>";
				echo"</div>";
				
		  }
echo"</div>";
echo"</div>";
?>
