<?php

if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
   isset($_POST['email']) && !empty($_POST['email']) &&
   isset($_POST['provincia']) && !empty($_POST['provincia']) &&
   isset($_POST['mensaje']) && !empty($_POST['mensaje'])) {

   $nombre = $_POST['nombre'];
   if($_POST['empresa'] == "") {
      $empresa = "No la ha proporcionado";
   } else {
      $empresa = $_POST['empresa'];
   }
   $email = $_POST['email'];
   if($_POST['telefono'] == "") {
      $telefono = "No lo ha proporcionado";
   } else {
      $telefono = $_POST['telefono'];
   }
   if($_POST['telefono'] == "") {
      $ciudad = "No lo ha proporcionado";
   } else {
      $ciudad = $_POST['ciudad'];
   }
   $provincia = $_POST['provincia'];
   $mensaje = nl2br($_POST['mensaje']);
   $to = "david@aprisoft.es";

   $contenido = '<html>
               <head>
                  <title>Mensaje desde la web</title>
               </head>
               <body>
                  <h1>Has recibido un mensaje a través de la web.</h1>
                  <h2>Los datos del cliente son:</h2>
                  <b>Nombre: </b>' .$nombre. '.<br>
                  <b>Empresa: </b>' .$empresa. '.<br>
                  <b>Correo electrónico: </b>' .$email. '.<br>
                  <b>Teléfono: </b>' .$telefono. '.<br>
                  <b>Ciudad: </b>' .$ciudad. '.<br>
                  <b>Provincia: </b>' .$provincia. '.<br>
                  <h2>El mensaje es el siguiente:</h2>
                  <p style="font-size: 16px;">'.$mensaje.'.</p>
                  <hr>
               </body>
            </html>';

   // Configuración de los encabezados
   $headers = 'MIME-Version: 1.0'."\r\n";
   $headers = "Content-type: text/html; charset=UTF-8\r\n";

   // Enviar correo
   $envio = mail($to, "Mensaje desde la web", $contenido, $headers);
   header('Location: ../confirmacion.html');

} else {

   echo '<script language="javascript">alert("Rellene los campos obligatorios, por favor.");window.location.href="../index.html#contacto"</script>';

}

?>