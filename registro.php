<?php 
"includes/Conexta.php";
 "includes/Accion.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>registro</title>
</head>
<body>
<div class="Container m-0 Content-justify-center py-2">
            <div class ="row text-center">
                <h1 class="text-ligh "style="background-color:#ff0000;" >Registro</h1>
               </div>
<form id="Registro" action="<?php echo $_Server['php_SELF'];?>" Method="post">
<div class="row text-center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="text" name="Nombre" class="form-control" placeholder="Nombre" required>
</div>
</div>
<div class="row text-center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="text" name="Apellidos" class="form-control" placeholder="Apellidos" required>
</div>
</div>
<div class="row text-center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
    <input type="text" name="Direccion" class="form-control" placeholder="Dirección" required>
</div>
</div>
<div class="row text-center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="tel" name="Telefono" class="form-control" placeholder="55-55-55-55-55" required>
</div>
</div>
<div class="row text-center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="Date" name="Fecha" class="form-control" >
</div>
</div>
<div class="row text-center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="text" name="Email" class="form-control" placeholder="Email" required>
</div>
</div>
<div class="row text-center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="submit" value="Registro" name="btn" class="btn-ligh " Style="background-color:#ff0000"  >
</div>
</div>
</form>
</body>
</html>