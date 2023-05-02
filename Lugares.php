<?php include "include/conexion.php";
    include "include/acciones3.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Registro de Lugares</title>
</head>
<body>
<div class="text-center">
    <img src="img/lugares.png" alt="logo" >
    </div>
<div class="Container m-0 Content-justify-center py-2" style="padding:5%;">
            <div class ="row text-center">
            <h1 class="text-ligh "style="background-color:#00ffbf;" >Registro de Lugares</h1>
    </div>
<form id="Registro" action="<?php echo $_Server['php_SELF'];?>" Method="post">

<div class="row text-center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="text" name="nombre_L" class="form-control" placeholder="Nombre del lugar" required>
</div>
</div>
<div class="row text-center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="text" name="descripcion" class="form-control" placeholder="Descripción" required>
</div>
</div>
<div class="row text-center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
    <input type="text" name="tel_L" class="form-control" placeholder="55-55-55-55-55" required>
</div>
</div>
<div class="row text-center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="email" name="email_L" class="form-control" placeholder="E-mail" required>
</div>
</div>
<div class="row text-center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="text" name="facebooK" class="form-control" placeholder="Facebook" required>
</div>
</div>
<div class="row text-center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="text" name="horario" class="form-control" placeholder="Horario" required>
</div>
</div>
<div class="row text-center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="submit" value="Registro" name="btn" class="btn-ligh " Style="background-color:#00ffbf;"  >
</div>
</div>
</form>
</body>
</html>