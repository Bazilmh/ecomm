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
  <h1>Add A Variant</h1>
  <p>Add a new variant with this form</p>
</div>
<div class='container'>
<form method='POST' enctype="multipart/form-data">
<input type='hidden' value='<?php echo $this->name; ?>' >
<label>Variant MRP</label><br>
<input type='number' placeholder='product mrp' name='mrp' class="form-control"/><br><br>
<label>Variant Selling Price</label><br>
<input type='number' placeholder='product selling price' name='selling_price' class="form-control"/><br><br>
<label>Variant Size</label><br>
<select name='size' class="form-control">
   <option value='100ml'> 100 ml </option>
   <option value='200ml'> 200 ml </option>
   <option value='1000ml'> 1000 ml </option>
</select><br><br>

<label>Variant Color</label><br>
<select name='color' class="form-control">
   <option value='red'> Red </option>
   <option value='green'> Green </option>
   <option value='white'> White </option>
</select><br><br>

<label>Variant Image </label><br>
<input type='file' name='image' class="form-control"/><br><br>

<input type='submit' value='submit' class="btn btn-primary"/>
</form>
<br><br>
</div>


</body>
<script>

</script>
	
</html>