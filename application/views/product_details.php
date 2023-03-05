<!DOCTYPE html> 
<html lang = "en"> 

<head> 
   <meta charset = "utf-8"> 
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title> Codeigniter sample</title> 
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
	
<body> 



<div class="jumbotron text-center">
  <h1>Product Variants</h1>
</div>


<div class="container">
  <div class="row">

<?php 
$base = base_url();
foreach($this->variants as $var)
{

echo "<div class='col-sm-4'>";
echo "<div class='card' >";
echo "<img src='$base$var->image' width='300' height='300' style='margin:25px;'/>";
echo "<h3 style='margin-left:25px;'>$var->name</h3>";
echo "<p style='margin-left:25px;'>$var->description</p>";
echo "<p style='margin-left:25px;color:green;'>Rs. $var->selling_price</p>";
echo "<p style='margin-left:25px;color:cyan;'>Color $var->color</p>";
echo "<p style='margin-left:25px;color:cyan;'>Size $var->size</p>";
echo "</div>";
echo "</div>";


}


?>

</div>
</div>
<br><br>




</body>
<script>

</script>
	
</html>