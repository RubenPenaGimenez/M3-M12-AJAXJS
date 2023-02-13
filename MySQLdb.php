<?php

class MySQLdb
{

private $server = "localhost";
private $database_name = "Produmuebles_Proyecto";
private $username = "root";
private $password = "";
private $table_name1 = "clientes";
private $connection="";
//private $tableFields1="";

function __construct()
          {
            $Control = $_POST["Control"];
           //1-conectar al servidor
               $this -> connectToServerDataBase();
           //2-Crear base de datos
               $this -> createDataBase();
           //3-campos de la tabla
               $this -> defineTableField1();
           //4-crear tabla
               $this -> createTable();

        if ($Control=="Create") $this -> functionCreate1();
        if ($Control=="Read") $this -> functionRead1();
          
          }

     function connectToServerDataBase(){
          $this->connection=mysqli_connect($this->server, $this->username,$this->password);
          }

     function createDataBase(){
          $query = "CREATE DATABASE IF NOT EXISTS $this->database_name";
          $ok = mysqli_query($this->connection,$query);
          }    

     function createTable(){
         $query = "CREATE TABLE IF NOT EXISTS $this->database_name.$this->table_name1($this->tableFields1) ENGINE = MYISAM";
          $ok = mysqli_query($this->connection,$query);               
    }
   
    function defineTableField1(){
        $this->tableFields1="
        `ID_CLIENTE` int(5) NOT NULL AUTO_INCREMENT,
        `NOMBRE` varchar(30) NOT NULL,
        `APELLIDO1` varchar(30) NOT NULL,
        `APELLIDO2` varchar(30) NOT NULL,
        `CORREO` varchar(50) NOT NULL,
        `TELEFONO` varchar(10) NOT NULL,
        `DIRECCIÓN` varchar(65) NOT NULL,
        `CONTRASEÑA` varchar(8) NOT NULL,
         PRIMARY KEY (`ID_CLIENTE`)";   
    }

     function functionCreate1(){
          $Nombre=$_POST["Nombre"];
          $Apellido1=$_POST["Apellido1"];
          $Apellido2=$_POST["Apellido2"];
          $Correo=$_POST["Correo"];
          $Telefono=$_POST["Telefono"];
          $Dirección=$_POST["Dirección"];
          $Contraseña=$_POST["Contraseña"];
        
        $query = "INSERT INTO $this->database_name.$this->table_name1 (`NOMBRE`, `APELLIDO1`, `APELLIDO2`, `CORREO`, `TELEFONO`, `DIRECCIÓN`, `CONTRASEÑA`) VALUES ('$Nombre', '$Apellido1', '$Apellido2', '$Correo', '$Telefono', '$Dirección','$Contraseña')";
        $ok= mysqli_query($this->connection, $query);
        if($ok) {
        echo '<script>alert("Usuario registrado CORRECTAMENTE!!");</script>';
        }
        else if(!$ok){
        echo '<script>alert("Usuario registrado INCORRECTAMENTE!!");</script>';
        echo '<script>window.location.assign("http://localhost/M12-BackEnd/Login.php");</script>';
        };
    }
 
     function functionRead1(){

        $Correo = $_POST["Correo"];
        $Contraseña=$_POST["Contraseña"];
        
        $query = mysqli_query ($this->connection, "SELECT * FROM $this->database_name.$this->table_name1 WHERE `CORREO`='$Correo' and `CONTRASEÑA`='$Contraseña'");
        $numrows = mysqli_num_rows($query);
        if($numrows > 0) {
        echo '<script>alert("Inicio de sesión CORRECTO!");</script>';
        $_SESSION['Correo'] = $Correo;
        } else if(!$numrows) {
        echo '<script>alert("Inicio de sesión INCORRECTO!!");</script>';
        echo '<script>window.location.assign("http://localhost/M12-BackEnd/Login.php");</script>';
        };
    }
}
?>
