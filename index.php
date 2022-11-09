<?php
  require("conexion/conexion.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/inde.css">
  <title>Document</title>
  <style> 
input:invalid {border:red solid 3px;background-color:yellow;}
input:valid {background-color:white;}
input[required]{background-color:yellow;}
</style>
<script>
      function blockSpecialChar(e){
        var k;
        document.all ? k = e.keyCode : k = e.which;
        return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
        }
</script>
</head>
<body>
<form action="include/inicio.php" method="post">

<center>

<div class="login-wrap">


    <div class="login-html">



        <div class="login-form">

            <div class="contenedor">
                <div class="group">
                    <input type="text" onclick="goto()"  onkeypress="return blockSpecialChar(event)"  placeholder="&#128272; Usuario" name="usuario" id="usuario" class="label" ><br>
                </div><br>
                <div class="group">
                    <input type="password" onclick="goto()"  onkeypress="return blockSpecialChar(event)"  placeholder="&#128272; Contraseña" name="clave"  id="clave" class="label" ><br>
                </div><br>


                    <div class="group">
                    <input type="submit" class="button" id="ingresar" value="Ingresar">
                </div>

            </div>
        </div>

    </div>
</center>

    <script>
      var btn = document.getElementById('ingresar');
var clave = document.getElementById('clave');
var usuario = document.getElementById('usuario');



btn.addEventListener('click', function(evt){

      if(clave.value === ''){

          alert('El campo contraseña es obligatorio')
          evt.preventDefault();
          return false;

      }else if(usuario.value === ''){

      alert('El campo de usuario es obligatorio')
          evt.preventDefault();
          return false;

      }else if(usuario.value.length > 15){

        alert('El nombre del usuario es demasiado largo')
          evt.preventDefault();
          return false;

      }


});

function goto(){
  const myTag = document.getElementsByTagName("input");
  for (let i = 0; i < myTag.length; i++) {
   if (!myTag[i].value) { myTag[i].style.backgroundColor = "yellow"; myTag[i].style.borderColor = "red"; myTag[i].focus(); return; } else { myTag[i].style.backgroundColor = "white"; myTag[i].style.borderColor = "black"; }
   }
}
    </script>



</body>
</html>

