<?php
$hostname="localhost";
$username="root";
$password="";
$database="stock_db";

$connect=mysqli_connect($hostname,$username,$password,$database);?>
<head>
  <title>CRUD Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<div class="container">
  
  <form action="delete.php" method="post">
    <div class="row">
      <div class="col">
      <label for="exampleInputEmail1">product_id</label>
        <input type="text" class="form-control" id="email" placeholder="product_id" name="pid">
      </div>
      <div class="col">
      <label for="exampleInputEmail1">product_name</label>
        <input type="text" class="form-control" placeholder="product_name" name="pname">
      </div>
    </div>
    <div class="row">
      <div class="col">
      <label for="exampleInputEmail1">product_supplier</label>
        <input type="text" class="form-control" id="email" placeholder="product_supplier" name="psupplier">
      </div>
      <div class="col">
      <label for="exampleInputEmail1">quantity</label>
        <input type="text" class="form-control" placeholder="product_quantity" name="pquantity">
      </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3" value="submit" formaction="insert_product.php">Add</button>
    <a href="view.php">
    <button type="submit" class="btn btn-primary mt-3" value="submit" formaction="view.php">
    
     view</button>
    </a>  
    
    <button type="submit" class="btn btn-primary mt-3" value="submit" formaction="update.php">update</button>
    <button type="submit" class="btn btn-primary mt-3" value="submit" formaction="delete.php">
      delete</button>  
</form>
<?php
if($connect)
{
    echo"connected!";
}
else
{
    echo "not connected!!";
}


if ($_SERVER["REQUEST_METHOD"] == "POST"){
 $pro_id=$_POST['pid'];

$sql = "DELETE FROM product_table  WHERE product_id= '$pro_id'";
if(mysqli_query($connect,$sql))
{
    
        echo"record deleted".mysqli_error($connect);
    }
    else{
        echo"no record is deleted and not found";
        mysqli_close($connect);
    
}}







?>