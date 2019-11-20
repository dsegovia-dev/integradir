<?PHP
    $email = $_GET["email"];
    $name = $_GET["name"];
    $lastName = $_GET["lastName"];
    $address = $_GET["address"];
    $zipCode = $_GET["zipC"];

    //correo para la empresa, confirmandole que un usuario hizo una compra
    $to = "ez.drums@gmail.com";
    $subject = "Nueva compra!!";
    $headers = "From: $email\n";
    $message = "Detalles de la compra:\n

    Email: $email\n
    Nombre: $name\n
    Apellido: $lastName\n
    Direccion: $address\n
    Codigo Postal: $zipCode\n
    ";

    //correo para el usuario que hizo la compra
    $user = "$email";
    $usersubject = "Gracias por tu compra";
    $userheaders = "From: ez.drums@gmail.com\n";
    $usermessage = "Gracias por tu compra, $name\n
                    El producto se enviara a $address con \n
                    Codigo Postal: $zipCode\n
                    \n
                    Dudas o aclaraciones a ez.drums@gmail.com";

    //enviar correo a la empresa con detalles de compra
    mail($to,$subject,$message,$headers);
    //enviar correo a comprador, confirmando que su compra se registró
    mail($user,$usersubject,$usermessage,$userheaders);


    echo $to;
    echo "<br>";
    echo $subject;
    echo "<br>";
    echo $message;
    echo "<br>";
    echo $headers;
    echo "<br>";
    echo $user;
    echo "<br>";
    echo $usersubject;
    echo "<br>";
    echo $usermessage;
    echo "<br>";
    echo $userheaders;
    echo "<br>";
    //redireccionar a confirmacion
    exit;

?>
