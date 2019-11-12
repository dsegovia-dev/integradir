<?php
    //Se incluye conexión
    include 'conn.php';

    $email = $_POST['email'];
    //Variables de la conexion
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    //Se verifica la conexion
    if(!$conn){
        die("Fallo en la conexión".mysqli_connect_error());
    }
    $queryid="SELECT id FROM users WHERE email = '$email'";
    $id=mysqli_query($conn, $queryid);
    $iddone = mysqli_fetch_object($id);

    //Variables de la tarjeta
    $number = $_POST['number'];
    $exp = $_POST['expiry'];
    $cvc = $_POST['ccv'];
    $query="INSERT INTO cards (Cnumber, cvv, fv, users_id) VALUES ('$number', '$cvc', '$exp', '$iddone')";
    if(mysqli_query($conn, $query)){

    }else{
        echo "Error";
    }
	mysqli_close($conn);

?>
