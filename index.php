<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Formulario</title>
<link rel="stylesheet" href="css.css">
</head>
<body>
<h1>Formulario</h1>
<form name='formulario' id='formulario' method='post' action='confirmacion.php' target='_self' enctype="multipart/form-data"> 

<br>NOMBRE: <input type='text' name='Nombre' id='Nombre'> 

<br>APELLIDO: <input type='text' name='Apellido' id='Apellido'> 


<onclick="if(this.value=='Con Codigo de Area') this.value=''" onblur="if(this.value=='') this.value='Con Codigo de Area'">
<br>ASUNTO: <input type='text' name='asunto' id='asunto'>
<br>
MENSAJE:<br>
<textarea name="mensaje" cols="35" rows="10" id="mensaje"></textarea>
<br>
Si desea puede adjuntar un archivo:<input  type='file' name='archivo1' id='archivo1' >
 <br>

<input  id=boton-enviar type='submit' value='Enviar'> 

</form>
</body>
</html>
