<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="option.css">
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
<h2>Delete Product</h2>
<div class="container">
  <form method="post" action="#">
  <div class="row">
    <div class="col-25">
      <label for="price">Enter Product Desc</label>
    </div>
    <div class="col-75">
      <input type="text" id="pdesc" name="pdesc">
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="Delete Product" name="s1">
  </div>
  </form>
</div>
</body>
</html>

<?php
$c=mysqli_connect('localhost','root','','stockerz');
if(isset($_POST['s1']))
{
	$pdesc=$_POST['pdesc'];
	$d="delete from `product` where `pdesc`='$pdesc'";
	mysqli_query($c,$d);
}
?>
