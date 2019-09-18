<?php

/**Llamando campos del formulario**/

        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $mensaje=$_POST['mensaje'];
        $email=$_POST['email'];
        $telefono=$_POST['telefono'];

/**Datos para el correo**/

        $destinatario="maximilianogordillo@hotmail.com";

        $carta= "De: $nombre \n";
        $carta.= "Correo: $correo \n";
        $carta.= "Telefono:  $telefono \n";
        $carta.= "Mensaje: $mensaje";
    
/**Enviando Mensaje**/

        mail($destinatario,$carta);
        header('Location:contacto.html');

?>  