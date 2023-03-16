<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UFT_8">
        <META HTTP_EQUIV="X-UA_Compatible" content="IE=edge">
        <meta name ="viewport" content="width=, initial_scale=1.0">
        <title>Practica 2 </title>
</head>
<body>
<div class ="col-lg-12">
        <div class ="row">
            <h1 class ="text-center">sumas</h1>
</div>
<div class ="row">
    <form action="<?php echo $_SERVER[PHP_SELF];?>"
    metod="post">
    <input type ="Text" name="caja1" required >
    <input type ="Text" name="caja2" required >
    <input type ="Text" name="resultados" value >
    <?php echo $valor;?>
    <input type="sumit" value="calcular"
    