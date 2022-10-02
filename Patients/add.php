<?php
include('../config/config.php');
include('Patient.php');
if(isset($_POST) && !empty($_POST)){
    $patients = new Patient();
    if($_FILES['image']['name']!==''){
        $_POST ['image'] = saveImage($_FILES);
}
$save = $patient->save($_POST);
if ($save){
$error='div class="alert alert-success" role="alert" > Paciente creado correctamente</div>';
}else{
$error ='div class="alert alert-danger" role="alert" > Error al crear un Paciente</div>';
}
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title> Crear paciente </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    </head>
    <body>
        <?php include ('../menu.php') ?>
        <div class="container">
            <?php
            if (isset($error)) { 
                echo $error;
            }
                ?>
                <h2 class="text-center-mb-5">Creacion de agenda</h2>
                <form method="POST" enctype="multipart/form-data">
                    <div class="row mb-2">
                        <div class="col">
                            <input type="text" name="nombres" id="Nombres del paciente" require class="form.control"/>
                        </div>
                        <divc class="col">
                            <input type="text" name="apellidos" id="Apellidos del paciente" require class="form-control"/>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
<input type="email" name="email" id="email" placeholder="Email paciente" require class="form-control"/>
                        </div>
                        <div class="col">
                            <input type="number" name="celular" id="celular" placeholder="Numero celular paciente" require class="form-control"/>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <textarea name="enfermedades" id="enfermedades" placeholder="enfermedad 1,endermedad 2, ..." require class="form-control"> </textarea>
                            <b>Debes separar las enfermedades con una coma</b>
                        </div>
                    </div>
                <div class="row mb-2">
                    <div class="col">
                        <input type="datetime-local" name="duracionSesion" id="duracionSesion" require class="form-control"/>
                    </div>
                    <div class="col">
                        <input type="text" name="duracion" id="duracion" placeholder="Duracion de la Sesion" require class="form-control"/>
                    </div>
                </div>
                <div class="row mb-2" >
                    <div class="col">
                        <input type="file" name="imagen" id="imagen" class="form-control"/>
                    </div>
                </div>
                <button class="btn btn-success"> Registrar </button>
                    </form>
        </div>
    </body>
</html>