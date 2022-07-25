<!DOCTYPE html>
<html>
<head>
<style>
h1{
 background-color: #333;
 color:#bbbbbb;
 font: 4em normal Arial, Helvetica, sans-serif;
 padding: 10px;	margin: 0;
 text-align: center;
}
h2{
 text-align: center;
 font-family: Geneva, Verdana, sans-serif;	
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  font-family: Geneva, Verdana, sans-serif;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #00848A;
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  text-align: center;
  padding: 50px 0px 50px 0px;
  font-family: Geneva, Verdana, sans-serif;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  height:100px;
  width:200px;
  
}
</style>
</head>
<body>
<h1>StockerZ</h1>
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#product detail">Product Detail</a></li>
  <li><a href="#contact">Contact</a></li>
</ul>
  <center>
  <a onclick="window.location.href='addproduct.php'" class="button">Add Product</a>
  <a onclick="window.location.href='updateproduct.php'"  class="button">Update Product</a>
  <a onclick="window.location.href='deleteproduct.php'"  class="button">Delete Product</a><br>
  <a onclick="window.location.href='addcategory.php'"  class="button">Add Category</a>
  <a onclick="window.location.href='updatecategory.php'"  class="button">Update Category</a>
  <a onclick="window.location.href='deletecategory.php'"  class="button">Delete Category</a><br>
  <a onclick="window.location.href='usermanagement.php'"  class="button">User Management</a>
  <a onclick="window.location.href='viewproducts.php'"  class="button">View Products</a>
  <a onclick="window.location.href='billingdetails.php'"  class="button">Billing Details</a>
  </center>
</body>
</html>

<?php?>
