<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/temperaturaMedia.css">
    <title>Medidor de Temperatura</title>
</head>

<body>
    <header>
        
         <div class="card text-center">
            <div class="card-body">
                <h1 class="card-title">Medidor de temperatura</h1>
            </div>
        </div>
    </header>
    <main>
        <form action="temperaturaMedia.php" method="POST">
            <div class="form-row">
                <div class="col">
                <input type="text" class="form-control" placeholder="Temperatura maxima" name = "temperaturaMa">
            </div>
                <div class="col">
                <input type="text" class="form-control" placeholder="Temperatura minima" name= " temperaturaMi">
            </div>
        </div>
            <button type="submit" class= "btn btn-primary mt-5" name="botonCalcular">Calcular temperatura media </button>
        </form>
            
        <?php
                
                if(isset($_POST["botonCalcular"])){

                    $temperaturaMaxima=$_POST["temperaturaMa"];
                    $temperaturaMinima=$_POST["temperaturaMi"];

                    $temperaturaMedia= ($temperaturaMaxima + $temperaturaMinima) /2;
                    

                    echo ("La temperatura media de su espacio es de " .$temperaturaMedia);
                }


        ?>
    </main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> 
</body>

</html>