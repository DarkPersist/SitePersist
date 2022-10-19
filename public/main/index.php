<?php
include '../../server/connection/conexion.php';
include '../../server/security/seguridad.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../resources/assets/meta.html" ?>
    
</head>

<body>
    <?php include "../resources/partials/header--main.html" ?>
    <div class="container-xxl text-light" style="background-color: #0D0D0D;">
        <div class="grid text-center">
            <div class="container mb-5">
                <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
                        <div class="col-md-6 px-0">
                            <h1 class="display-4 fst-italic">Sistema de Reserva</h1>
                            <p class="lead my-3">La universidad Salazar y herrera cuenta con diversos espacios como lo son las salas de cómputo, auditorio y otros espacios para grandes eventos</p>
                            <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
                        </div>
                </div>
            </div>
            <div class="mb-5">
                <h1>Servicios</h1>
            </div>
            <div>
                <div class="row">

                    <div class="col-md-6 d-flex justify-content-center align-items-center mb-5">
                        <div class="card" style="width: 18rem; background-color: #202020;">
                            <img src="https://www.upb.edu.co/es/imagenes/img-raee-blog-sostenibilidad-1464231652905.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Equipos Electronicos</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Reservar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center mb-5">
                        <div class="card" style="width: 18rem; background-color: #202020;">
                            <img src="https://www.iush.edu.co/uploads/header/admisiones/calendario-academico.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Espacios</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Reservar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "../resources/partials/footer--default.html" ?>
</body>

</html>