<?php

/**
 * Problema Propuesto:
 * Desarrollar un formulario que simule el registro de un usuario (archivo index.php). 
 * El formulario debe solicitar el nombre de usuario y la clave en dos oportunidades. 
 * El formulario debe ser procesado por el archivo validarRegistro.php. Este archivo
 * debe implementar una función que permita validar si las dos contraseñas coinciden. 
 * Si las contraseñas coinciden, se debe redirigir al archivo "registroCorrecto.php"
 * Si las contraseñas no coinciden, se debe redirigir al index.php y mostrar el mensaje
 * "Las contrseñas no coinciden".
 */
?>

<html> 
  <head> 
  <h1>Validación De Contraseña</h1> 
  </head> 
  <body>
  <form method="post" action="validarRegistro.php"> 
   User Name: 
  <input type="text" name="user"> 
  <br>
   <br>
    <br>
Password:
<input type="password" name="pass1">
<br>
 <br>
  <br>
   <br>
Repeat Password:
<input type="password" name="pass2">
<br>
 <br>
  <br>
  <input type="submit" center value="Validar"> 
  </form>
</body> 
</html>