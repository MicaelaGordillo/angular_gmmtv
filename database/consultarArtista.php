<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: Origin, X-Requestes-Whit, Content-Type, Accept');
    header('Content-Type: application/json');
    require("./conexion.php");

    $con = returnConection();
    $registro=mysqli_query($con ,"select name, picture, date_of_birth, place_of_birth, height, weight  from artist where artist_id = ".$_GET["artist_id"]);
    if($reg=mysqli_fetch_array($registro)){
        $vec[]=$reg;
    }

    $cad = json_encode($vec);
    echo $cad;
?>