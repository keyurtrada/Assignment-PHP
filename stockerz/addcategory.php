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
<h2>Add Category</h2>
<div class="container">
  <form method="post" action="#">
  <div class="row">
    <div class="col-25">
      <label for="cno">Category Number</label>
    </div>
    <div class="col-75">
      <input type="number" min="0" id="cno" name="cno" >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="category name">Category Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="cname" name="cname">
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="ADD Category" name="s1">
  </div>
  </form>
</div>
</body>
</html>

<?php
$c=mysqli_connect('localhost','root','','stockerz');
if(isset($_POST['s1']))
{
	$cno=$_POST['cno'];
	$cname=$_POST['cname'];
 $r="insert into category (cno,cname) values ('$cno','$cname')";
 $z=mysqli_query($c,$r);
}
?>
