<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Integrador</title>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Coiny&family=Roboto:wght@400;700&display=swap');
    * {
        font-family: 'Roboto', sans-serif;
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        text-align: center;
    }
    
    header {
    height: 20px;
    background-color: #FCEE21;
    }

    nav {
    height: 150px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    margin-right: 50px;
    }

    #logo {
    padding-left: 50px;
    width: 200px;
    }

    a {
    font-size: 20px;
    margin: 50px;
    text-decoration: none;
    color: black;
    }
    
    #active {
        font-weight: 700;
    }

    body {
        background-color: #F2F2F2;
    }
    
    main {
        height: 500px;
    }

    h1 {
        font-size: 40px;
    }

    .contenedor {
        width: 50%;
        margin: auto;
        height: 450px;
        padding: 50px;
        border: 10px solid #FCEE21;
    }


    .resaltado {
        background-color: #FCEE21;
    }

    .inicio {
        background-color: black;
        color: white;
        font-size: 25px;
        font-weight: 700;
        margin-left: 10px;
    }

    h2 {
        margin: 30px 0px;
    }
    

    .footer-dos {
    display: flex;
    flex-direction: row;
    align-items: center;
    background-color: #FCEE21;
    
    }

    #logo-instagram, #logo-dribble, #logo-facebook, #logo-linkedin {
    padding: 20px 20px;
    } 


    .p-footer {
    align-self: flex-start;
    font-size: 33.33px;
    font-weight: 700;
    color: #B3B3B3;
    }

    </style>
</head>
<header>
</header>
<nav>
    <div class="logo-div">
        <img src="images/logo.png" alt="" id="logo">
    </div>
    <div class="logo-links">
    <a href="#" class="nav-bar">Servicios</a>
    <a href="#" id="active" class="nav-bar">Contacto</a>
    <a href="#" class="nav-bar">Login</a>
    </div>
</nav>

<body>
            <?php
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $mensaje = $_POST['mensaje'];
            ?>

    <main>
        <div class="contenedor">
            <h1>¡Gracias por contactarnos<br><span class="resaltado"><?= $nombre ?></span>!</h1>
            <h2>El email que ingresaste es: <span class="resaltado"><?= $email ?></span></h2>
            <h2>El mensaje que ingresaste es: <span class="resaltado"><?= $mensaje ?></span></h2>
            <h2>¡Pronto nos comunicamos con vos! Podes volver al inicio haciendo click<a href="https://misitiopipi.000webhostapp.com/" class="inicio">acá</a></h2>
            </pre>
        </div>
    </main>
    

    <footer>
        <div class="footer-dos">
            <img src="images/logo.png" alt="" id="logo">
            <a href="mailto:wwwapas_sm@mail.com">wwwapas_sm@mail.com</a>
        </div>
    </footer>
</body>
</html>