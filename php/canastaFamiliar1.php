<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Canasta Familiar</title>
</head>
<body>
<header>
<div class="card text-center">
            <div class="card-body">
                <h1 class="card-title"><b> Productos</b></h1>
            </div>
        </div>
</header>

<main>
<form action="canastaFamiliar1.php" method ="POST">
<table class="table" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Producto</th>
      <th scope="col">Precio</th>
      <th scope="col">Cantidad</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><input type="text" class="form-control" placeholder="Producto" name ="producto1"></td>
      <td><input type="text" class="form-control" placeholder="precio" name="precio1"></td>
      <td><input type="text" class="form-control" placeholder="cantidad" name="cantidad1"></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><input type="text" class="form-control" placeholder="Producto" name ="producto2"></td>
      <td><input type="text" class="form-control" placeholder="" name="precio2"></td>
      <td><input type="text" class="form-control" placeholder="" name="cantidad2"></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><input type="text" class="form-control" placeholder="Producto" name ="producto3"></td>
      <td><input type="text" class="form-control" placeholder="" name="precio3"></td>
      <td><input type="text" class="form-control" placeholder="" name="cantidad3"></td>
    </tr>

      <th scope="row">4</th>
      <td><input type="text" class="form-control" placeholder="Producto" name ="producto4"></td>
      <td><input type="text" class="form-control" placeholder="" name="precio4"></td>
      <td><input type="text" class="form-control" placeholder="" name="cantidad4"></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td><input type="text" class="form-control" placeholder="Producto" name ="producto5"></td>
      <td><input type="text" class="form-control" placeholder="" name="precio5"></td>
      <td><input type="text" class="form-control" placeholder="" name="cantidad5"></td>
    </tr>
  </tbody>
</table>

<button type="submit" class= "btn btn-primary mt-5" name="botonCalcular">Calcular costo</button>
</form>

<?php
                
                if(isset($_POST["botonCalcular"])){
                    $cantidad = $_POST["cantidad1"]+$_POST["cantidad2"] +$_POST["cantidad3"]+$_POST["cantidad4"]+$_POST["cantidad5"];
                    $precio = $_POST["precio1"]+$_POST["precio2"]+$_POST["precio3"]+$_POST["precio4"]+$_POST["precio5"];
                    $iva = ($cantidad*$precio)*19/100;

                    $totalcompra= ($cantidad*$precio)+$iva; 
                    

                    echo ("El total de su compra es " .$totalcompra);
                }


        ?>

</main>
<footer></footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>