<?php
include('../config/config.php');
include('../config/Database.php');

class Patient{
    public $conn;
    function __construct()
    {
        $db= new Database();
        $this->conn=$db->connectToDatabase();
    }

    function save($params){
        $nombres= $params['nombres'];
        $apellidos= $params['nombres'];
        $email= $params['email'];
        $celular= $params['celular'];
        $enfermedades= $params['enfermedades'];
        $duracionSesion= $params['duracionSesion'];
        $imagen= $params['imagen'];
        $insert="INSERT INTO Patients VALUES (NULL, '$nombres','$apellidos','$email','$celular','$enfermedades','$duracionSesion','$imagen'";
        return mysqli_query($this-> conn, $insert);
    }
}