<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
	<title>M12-BackEnd (Iniciar Sesión)</title>
</head>
<body>

	<style>

        body{
            background-image: url(https://es.habcdn.com/photos/project/hd/reforma-de-un-estudio-en-playa-del-ingles-reforma-bonita-y-barata-1544565.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-size: center center;
            margin: 15px;
            padding: 10px;
            font-family: Raleway;
        }

        img{
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
            margin-top: 11%;
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
            letter-spacing: 2px;
            font-size: 30px;
        }

        label{
            margin-left: 15px;
        }

        /*PARTE INPUTS*/
        #Correo,#Contraseña{
            font-size: 20px;
            cursor: pointer;
            border-radius: 10px;
            font-family: Raleway;
        } #Correo{
            margin-left:113px;
            width: 53%;
        } #Contraseña{
            margin-left: 70px;
            width: 53%;
        }

        .input{
            color: black;
            font-size: 25px;
            cursor: pointer;
            border-radius: 10px;
            margin-left: 47.5%;
            margin-top: 2%;
            font-family: Raleway;
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
            letter-spacing: 2px;
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
            letter-spacing: 2px;
        }

    </style>

	<form action="initdb.php" method="POST">

        <img src="logotrans.png"><br>

		<label for="Login">Correo: </label> &nbsp &nbsp
	    <input type="text" name="Correo" id="Correo" required/><br>

        <br>

	    <label for="Password">Contraseña: </label> &nbsp &nbsp
	    <input type="Password" name="Contraseña" id="Contraseña" required/><br>

	    <br><input class="button" type="submit" value="Iniciar sesión" name="functionRead1"/>
        <br>
        <br><a href="Register.php" class="registerform">¿No tienes cuenta? Crear cuenta</a>

	</form>

    <button class = "input1" type = "button" onclick = "window.location.replace('PaginaPrincipal.html')">Volver</a></button>

</body>
</html>