<?php
    //Se incluye conexión
    include 'conn.php';

if (isset($_POST['submit'])) {
  $email = $_POST['email'];

  //Se verifica la conexion
  if(!$conn){
      die("Fallo en la conexión".mysqli_connect_error());
  }
  $queryid="SELECT idUser FROM Users WHERE email = '$email'";
  $id=mysqli_query($conn, $queryid);
  $iddone = mysqli_fetch_object($id);

  //Variables de la tarjeta
  $number = $_POST['number'];
  $exp = $_POST['expiry'];
  $ccv = $_POST['ccv'];

  //variables venta
  $cantidad = $_POST['cantidad'];
  $total = $cantidad * 49.99;
  $address = $_POST['address'];
  $zipC = $_POST['zip'];

  $query =" INSERT INTO Cards (numC, FV, ccv, idUser) VALUES ('$number','$exp','$ccv',1)";
  //Revisar si la tarjeta existe
  $RT = "SELECT idcard FROM Cards WHERE numC = '$number'";
  $q = mysqli_query($conn, $RT);
  $fetch = mysqli_fetch_array($q);
  $idC = $fetch['idcard'];

  if ($fetch == null) {
    if(mysqli_query($conn, $query)){
        echo "stringTarjeta";
    }else{
        echo "errorTarjeta";
    }
  }

///////////////////////////////tabla ventas///////////////////////////////////////////////////////////////////

  $queryV = "INSERT INTO Sales (fecha, cantidad, total, idUser, idcard, address, zipC)
  VALUES (current_date(),'$cantidad', '$total', 1,'$idC', '$address', '$zipC')";
  if (mysqli_query($conn, $queryV)) {
    echo "stringVenta";
  }else {
    echo "errorVenta";
  }
}

	mysqli_close($conn);

?>
