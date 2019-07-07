<?php 
if (isset($_POST["Divisor"]) && isset($_POST["Dividendo"])){
    if(isset($_POST['Divisor'])){
        $Divisor = $_POST['Divisor'];
        $txDivisor = (string) $Divisor;
        //echo $Divisor;
	}
	
	if(isset($_POST['Dividendo'])){
        $Dividendo = $_POST['Dividendo'];
        $txDividendo = (string) $Dividendo;
        //echo $Dividendo;
    }

    if(isset($_POST['Res1'])){
        $Res1 = $_POST['Res1'];
        $txRes1 = (string) $Res1;
        //echo $Res1;
    }
    
    $res = intdiv($Dividendo, $Divisor);
    $tam = (string) $res;
    $pista = '';
    for($i = 0; $i < strlen($tam); $i++){
        $pista = $pista."° ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Division interactiva</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-12 mt-4">
            <div class="row">

            <div class="card w-50">
                <div class="card-body">
                    <h5 class="card-title">Digita lo que se te pide a continuacion</h5>

            <form action="" method="post">
                <div class="form-group">
                    <label for="Divisor">Divisor</label>
                    <input type="number" class="form-control" name="Divisor" id="Divisor" placeholder="Divisor" >
                </div>
                <div class="form-group">
                    <label for="Dividendo">Dividendo</label>
                    <input type="number" class="form-control" name="Dividendo" id="Dividendo" placeholder="Dividendo" >
                </div>
                    <button type="submit" class="btn btn-primary">Comenzar</button>
                </form>
                <br />
                <div class="card-footer text-muted">
    <?php
    if( isset($res)){
        echo "<h4>(Pista) son las cifras de tu resultado <span class='badge badge-secondary'>$pista</span></h4>";
    }
    ?>
                    </div>

                </div>
            </div>

<div class="col">
<div class="card w-50">
  <div class="card-body">
    <?php 
    if(isset($Divisor) && isset($Dividendo)){
        echo  '<h4>'."&nbsp;". "&nbsp;". "&nbsp;". "&nbsp;"."_________".'</h4>';
        echo '<h4>'.$Divisor."|".$Dividendo.'</h4>';

        $listaDividendo = array();
        for($i = 0; $i < strlen($txDividendo); $i++){
            array_push($listaDividendo, $txDividendo[$i]);
        }
        $r1 = $listaDividendo[0].$listaDividendo[1];
        echo '<h6>'."Recuerda que si tienes 2 cifras como divisor tomas 2 cifras del dividendo...".'</h6>';
        echo '<h6>'."Dime cuantas veces cabe el $Divisor en $r1 ".'</h6>'.'<br />';
    }
    ?> 
    <form action="" method="post">
    <div class="input-group mb-3">
        <input type="number" class="form-control" placeholder="Respuesta 1" aria-label="Respuesta 1" aria-describedby="button-addon2" name="Res1">
        <div class="input-group-append">
        <button class="btn btn-outline-primary" type="submit" id="button-addon2">Enviar</button>
    </div>
    
    </form> 
  </div>
</div>
</div>

<!-- card 2 -->

    <div class="card w-50">
        <div class="card-body">
<?php
    if (isset($Res1)) {
        echo "r1 es:    ".$Res1;
    }
?>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>
</body>
</html>