
<!DOCTYPE html>
<html>
<head>
	<h1>Verificación Exitosa</h2>
</head>
<body>

</body>
</html>

<?php 
 function verificarClaves($cla1,$cla2)
 {
  if ($cla1!=$cla2)
     echo "Las Claves Son Distintas";
  }
  
  verificarClaves($_REQUEST['pass1'],$_REQUEST['pass2']);
?>
