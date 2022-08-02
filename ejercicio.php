<?php 
$validacion1=false; $validacion2=false; $validacion3=false; $correoenviado=false;

if (isset($_POST['nombre'])){
	//Comprobamos que el nombre no este en blanco
	if ($_POST['nombre']=='') $validacion1=true;
	//Comprobamos que el correo no este en blanco
	if ($_POST['correo']=='') $validacion2=true;
	//Comprobamos que el mensaje no este en blanco
	if ($_POST['mensaje']=='') $validacion3=true;
	//Si cumple las tres condiciones enviamos el formulario
	if ($validacion1==false && $validacion2==false && $validacion3==false){
		$correoenviado=true;
		//Descomentar esta linea para enviar el mail
		//mail ('destinatario','titulo','mensaje','cabeceras');
		}
        
        
}
?>



<!document html>
<html>
<head>
<style>
@import url(http://fonts.googleapis.com/css?family=Lato);
.inputs , .textareas, .botonen {
	width:250px;
	padding:6px;
	border:1px solid #ddd;
	margin:4px 0px;
	font-family: 'Lato', sans-serif;
	resize:vertical;
}
#formulario1 {
	font-family: 'Lato', sans-serif;
	padding: 40px;
	margin: 20px;
	float: left;
	border: 1px solid #ddd;
}
.error {
	font-size:13px;
	color:red;
}

.is-required:after{
  content: '*';
  color: fuchsia;
 
}

.asterisco{
    color:yellowgreen;
}


</style>
</head>

<body>
<?php if ($correoenviado==false){?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="formulario1">

<span class="is-required"></span>
<label for="name">Primer Nombre</label>
<?php if ($validacion1==true ){?><span class="error">*Campo obligatorio</span><?php }?><br>
   
<input type="text" class="inputs" name="nombre" value="<?php if (isset($_POST['nombre'])) echo $_POST['nombre']?>" placeholder="Nombre..."><br>

<span class="asterisco">*</span>
<label for="name">Primer Nombre</label>
 <?php if ($validacion2==true){?><span class="error">* Campo obligatorio</span><?php }?> <br>
<input type="text" class="inputs" name="correo" value="<?php if (isset($_POST['correo'])) echo $_POST['correo']?>" placeholder="Correo..."><br>

* Mensaje: <?php if ($validacion3==true){?><span class="error">* Campo obligatorio</span><?php }?> <br>
<textarea name="mensaje" class="textareas" placeholder="Mensaje..."><?php if (isset($_POST['mensaje'])) echo $_POST['mensaje']?></textarea><br>

<input type="submit" class="botonen" value="Enviar"><br>

</form>
<?php } else echo 'Correo enviado';?>
</body>
</html>

