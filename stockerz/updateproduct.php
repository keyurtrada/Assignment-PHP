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
<h2>Update Products</h2>
<div class="container">
  <form method="post" action="#">
  <div class="row">
    <div class="col-25">
      <label for="pname">Product's New Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="pname" name="pname" >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="price">Product's New Price</label>
    </div>
    <div class="col-75">
      <input type="text" id="price" name="price" placeholder="INR">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="price">Product's Orignal Desc</label>
    </div>
    <div class="col-75">
      <input type="text" id="pdesc" name="pdesc">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="Product Category">Update Product Category</label>
    </div>
    <div class="col-75">
      <?php
		$c=mysqli_connect('localhost','root','','stockerz');
			$query="SELECT cname FROM category ";
			if($r_set=$c->query($query)){
			echo "<SELECT id='pcat' name='pcat'>";
			while($row=$r_set->fetch_assoc()){
			echo "<option value=$row[cname]>$row[cname]</option>";
			}
			echo "</select>";
			}
			else{
			echo $c->error;
			}
?>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="pimage">Update Product image</label>
    </div>
    <div class="col-75">
      <input type="file"
       name="pimage"
       accept="image/png, image/jpeg">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="pcompany">Update Product Company</label>
    </div>
    <div class="col-75">
      <input type="text" id="pcompany" name="pcompany">
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="Update" name="up">
  </div>
  </form>
</div>
</body>
</html>

<?php
$c=mysqli_connect('localhost','root','','stockerz');
if(isset($_POST['up']))
{
	$pname=$_POST['pname'];
	$price=$_POST['price'];
	$pdesc=$_POST['pdesc'];
	$pcat=$_POST['pcat'];
	$pcompany=$_POST['pcompany'];
	$u=mysqli_query($c,"update product set pname='$pname',price='$price',pcat='$pcat',pcompany='$pcompany' where pdesc='$pdesc'");
}
?>
