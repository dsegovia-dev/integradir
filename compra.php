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
  $iddone = mysqli_fetch_array($id);
  $idUser = $iddone['idUser'];




  //Variables de la tarjeta
  $number = $_POST['number'];
  $exp = $_POST['expiry'];
  $ccv = $_POST['ccv'];

  //variables venta
  $nombre = $_POST['first-name'];
  $apellido = $_POST['last-name'];
  $cantidad = $_POST['cantidad'];
  $total = $cantidad * 49.99;
  $address = $_POST['address'];
  $zipC = $_POST['zip'];

  $query =" INSERT INTO Cards (numC, FV, ccv, idUser) VALUES ('$number','$exp','$ccv','$idUser')";
  //Revisar si la tarjeta existe
  $RT = "SELECT idcard FROM Cards WHERE numC = '$number'";
  $q = mysqli_query($conn, $RT);
  $fetch = mysqli_fetch_array($q);
  $idC = $fetch['idcard'];

  if ($idC == null) {
    if(mysqli_query($conn, $query)){
        echo "stringTarjeta";
    }else{
        echo "errorTarjeta";
    }
  }

///////////////////////////////tabla ventas///////////////////////////////////////////////////////////////////

  $queryV = "INSERT INTO Sales (fecha, cantidad, total, idUser, idcard, address, zipC)
  VALUES (current_date(),'$cantidad', '$total', '$idUser','$idC', '$address', '$zipC')";
  if (mysqli_query($conn, $queryV)) {
    echo "String Venta";
    header("Location:send_mail.php?email= $email&zipC= $zipC&name= $nombre&lastName=$apellido&address=$address");
  }else {
    echo "error Venta";

  }
}
	mysqli_close($conn);

?>
