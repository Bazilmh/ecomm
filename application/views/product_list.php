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
  <h1>Products</h1>
  <p>See all of your added products here. Click on a product to see its variants.</p>
</div>



<div class="container">
  <div class="row">
    
  <?php 

foreach($this->products as $prod)
{

$url = "http://localhost/ecomm/api/get_image/$prod->name";
$data = file_get_contents($url);

$image = json_decode($data);

echo "<div class='col-sm-4'>";
echo "<a href='customer/product_details/$prod->name' style='text-decoration:none;'>";
echo "<div class='card' >";
echo "<img src='$image->image' width='300' height='300' style='margin:25px;'/>";
echo "<h3 style='margin-left:25px;'>$prod->name</h3>";
echo "<p style='margin-left:25px;'>$prod->description</p>";
echo "<div style='margin-left:25px;border-radius:5px;width:150px;padding:5px;color:white;background-color:lightgreen;' >$prod->category</div>";
echo "<br>";
echo "</div>";
echo "</a>";
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