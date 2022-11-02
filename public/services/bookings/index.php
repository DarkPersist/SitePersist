<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../../resources/assets/meta.html" ?>
    <style>
        .banner {
            background: rgb(141, 4, 133);
            background: #111111;
            padding: 200px 100px 100px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .banner .content {
            max-width: 700px;
        }

        .banner .content h2 {
            font-size: 3em;
            color: #fff;
            margin-bottom: 10px;
        }

        .banner .content p {
            font-size: 1em;
            color: #fff;
            margin: 10px;
        }

        .banner .content a {
            display: inline-block;
            background: #fff;
            color: #000;
            padding: 8px 20px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 20px;
        }

        .banner .image {
            max-width: 400px;
            margin-left: 30px;
        }

        @media(max-width:991px) {
            .banner {
                padding: 150px 20px 50px;
                flex-direction: column-reverse;
            }

            .banner .image {
                margin-left: 0;
                max-width: 80%;
                margin-bottom: 30px;
            }

            .banner .content h2 {
                font-size: 2em;
            }
        }

        @media(max-width:600px) {
            .banner .image {
                margin-top: 30px;
                margin-bottom: 30px;
            }
        }
    </style>
</head>

<body>
    <?php include "../../resources/partials/header--default.html" ?>
    <div class="banner">
        <div class="content">
            <h2>Sistema de reservaciones</h2>
            <p>Actualmente en la IUSH existe un sistema interno para gestionar las reservas de
                espacios, la cual no cuenta con una interacción con el usuario, además de no ser
                viable para reservas de personal externo a la IUSH. Para esto se propone Aplicativo
                web con diseño responsive para todo tipo de dispositivos, con diferentes perfiles de
                usuario que permita hacer el registro de solicitudes con la finalidad de ser gestionado
                por un administrador, con registro de solicitudes que permita graficar el uso de los
                espacios y equipos tecnológicos de la IUSH. </p>
            <a href="IUSH/">Ir a la IUSH</a>
        </div>
        <img src="/resources/assets/img/IUSH.png" class="image">
    </div>
    <?php include "../../resources/partials/footer--default.html" ?>
</body>

</html>