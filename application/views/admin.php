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
  <h1>Products Admin</h1>
  <p>Add new products from here.</p>
</div>



<div class='container'>
<h2> Products </h2>
<br>
<?php 

foreach($this->data as $prod)
{
echo "<div class='btn btn-success'>";
echo $prod->name;
echo "</div><br><br>";

}

?>
<hr>

<br><br>

<form method='POST'>


<input type='radio' placeholder='product description' name='prod_type' value='new'/>
<label>Add New Product</label><br><br>

<input type='radio' placeholder='product description' name='prod_type' value='variant'/>
<label>Add Product Variant</label><br><br>
<div id='variant_sel'>
<label>Select Product</label><br>
<select name='prod_name' class="btn btn-primary">
<?php 
foreach($this->data as $prod)
{
echo "<option value='$prod->name'>$prod->name</option>";
}
?>
</select>
</div>
<br><br>

<input type='submit' class="btn btn-primary" value='Proceed'/>
</form>
<br><br>
</div>


</body>
<script>
var el = document.getElementsByName('prod_type');

for(var i=0;i<el.length;i++)
{
el[i].addEventListener('input',variant_);
document.getElementById('variant_sel').style.display = 'none';
}


function variant_()
{
var el = document.getElementsByName('prod_type');
for(var i=0;i<el.length;i++)
{

if(el[i].checked)
{ 
   if(el[i].value == 'variant')
   document.getElementById('variant_sel').style.display = 'block';
   else
   document.getElementById('variant_sel').style.display = 'none';

}

}
}
</script>
	
</html>