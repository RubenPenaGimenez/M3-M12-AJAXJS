<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
	<title>M12-BackEnd (Registrarse)</title>
</head>
<body>

	<style>

        body{
            background-image: url(https://es.habcdn.com/photos/project/hd/reforma-de-un-estudio-en-playa-del-ingles-reforma-bonita-y-barata-1544565.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-size: center center;
            font-family: Raleway;
            margin:20px;
        }

        .fotoLogo{
            width: 40%;
            margin: auto;
            display: block;
            background-color: black;
            border-radius: 15px;
            box-shadow: 4px 4px #D4900B;
        }

        form{
            background-color: #6c757d;
            width: 25%;
            border: 6px solid black;
            box-shadow: 7px 7px #D4900B;
            font-size: 20px;
            border-radius: 15px;
            font-family: Raleway;
            font-weight: bolder;
            padding: 0.5%;
            margin:auto;
            display: block;
            margin-top: 3%;
        }

        .button{
        	background-color: black;
        	color: ghostwhite;
        	font-size: 25px;
            cursor: pointer;
            border-radius: 15px;
            font-family: Raleway;
            width: 510px;
        } .button:hover{
            text-decoration: none;
            font-family: Oswald;
            color: #D4900B;
            letter-spacing: 1.5px;
            font-size: 30px;
        }

        label{
            margin-left: 15px;
        }

        /*PARTE INPUTS*/
        #Nombre,#Contraseña,#Contraseña2,#Apellido1,#Apellido2,#Correo,#Telefono{
            font-size: 20px;
            cursor: pointer;
            border-radius: 10px;
            font-family: Raleway;
            width: 53%;
        } #Nombre{
            margin-left: 98px;
        } #Contraseña{
            margin-left: 70px;
        } #Apellido1{
            margin-left: 87px;
        } #Apellido2{
            margin-left: 84px;
        } #Correo{
            margin-left: 115px;
        } #Telefono{
            margin-left: 98px;
        } #Dirección{
            margin-left: 20px;
            width: 67%;
        }

        textarea{
            background-color: ghostwhite;
            color: black;
            font-size: 20px;
            cursor: pointer;
            border-radius: 10px;
            width: 35%;
            font-family: Raleway;
        }
        
        .direction{
            vertical-align: top;
        }

        .input1{
            background-color: black;
            color: ghostwhite;
            font-size: 25px;
            margin: auto;
            display: block;
            cursor: pointer;
            border-radius: 10px;
            font-family: Raleway;
            width: fit-content;
            margin-top: 1%;
        } .input1:hover{
            text-decoration: none;
            font-family: Oswald;
            color: #D4900B;
            letter-spacing: 1.5px;
        }

        .registerform{
            text-decoration: none;
            font-weight: bolder;
            font-family: Raleway;
            color: white;
            margin-left: 23%;
            font-size: 20px;
        } .registerform:hover{
            font-family: Oswald;
            color: #D4900B;
            margin-left: 17%;
            font-size: 25px;
            letter-spacing: 1.5px;
        }

    </style>

	<form action="initdb.php" method="POST">

        <img class="fotoLogo" src="logotrans.png"><br>
        
		<label for="Login">Nombre: </label> &nbsp &nbsp
	    <input type="text" name="Nombre" id="Nombre" required/><br>
        
	    <br><label for="Password">Contraseña: </label> &nbsp &nbsp
	    <input type="Password" name="Contraseña" id="Contraseña" required/><br>

        <br><label for="Password2">Repetir Contraseña: </label> &nbsp &nbsp
        <input type="Password" name="Contraseña2" id="Contraseña2"/><br>

        <br><label for="Apellido1">Apellido 1: </label> &nbsp &nbsp
        <input type="text" name="Apellido1" id="Apellido1" required/><br>

        <br><label for="Apellido2">Apellido 2: </label> &nbsp &nbsp
        <input type="text" name="Apellido2" id="Apellido2"/><br>

        <br><label for="Correo">Correo: </label> &nbsp &nbsp
        <input type="text" name="Correo" id="Correo" required/><br>

        <br><label for="Telefono">Teléfono: </label> &nbsp &nbsp
        <input type="text" name="Telefono" id="Telefono" onkeypress="return soloNumeros(event)" maxlength="9" required/><br>

        <br><label class="direction" for="Dirección">Dirección: </label> &nbsp &nbsp
        <textarea name="Dirección" id="Dirección" required></textarea><br>

	    <br><input class="button" name="functionCreate1" type="submit" value="Crear cuenta"/><br>
        
        <br><a href="Login.php" class="registerform">¿Ya tienes cuenta? Inicia sesión</a>
	</form>

    <button class ="input1" type = "button" onclick = "window.location.replace('PaginaPrincipal.html')">Volver</a></button>

    <script>
    function soloNumeros(e){
        var key = window.Event ? e.which : e.keyCode
        return (key >= 48 && key <= 57)
    }
    </script>

</body>
</html>