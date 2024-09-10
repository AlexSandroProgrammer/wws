<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WWS || Inicio de Sesion</title>
    <!--========================================
        Fuentes - Tipo de letra - Iconografia
    ==========================================-->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?= base_url("images/favicon/favicon.png") ?>" type="image/x-icon">
    <!--========================================
    STYLES CSS
    ==========================================-->
    <link rel="stylesheet" href="<?= base_url("css/auth/fontawesome.css") ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="<?= base_url("css/auth/style.css") ?>">
</head>

<body>
    <!--========================================
       contenido
    ==========================================-->
    <div class="contenedor-login">
        <!--========================================
            Slider
         ==========================================-->
        <div class="contenedor-slider">
            <div class="slider">
                <!-- Slide 1 -->
                <div class="slide fade ">
                    <img src="<?= base_url("images/auth/slide_1.jpg") ?>" alt="">
                </div>
                <!-- Slide 3 -->
                <div class="slide fade">
                    <img src="<?= base_url("images/auth/slide_2.jpg") ?> " alt="">
                </div>
                <!-- Slide 4 -->
                <div class="slide fade">
                    <img src="<?= base_url("images/auth/slide_3.jpg") ?>" alt="">
                </div>
            </div>

            <!-- Botones next y prev -->
            <a href="#" class="prev"><i class="fas fa-chevron-left"></i></a>
            <a href="#" class="next"><i class="fas fa-chevron-right"></i></a>
            <!-- dots -->
            <div class="dots">
            </div>
        </div>
        <!--========================================
            Formularios
        ==========================================-->
        <div class="contenedor-texto">
            <div class="contenedor-form">
                <div class="container-center">
                    <h1 class="titulo"><img src="<?= base_url("images/favicon/logo.png") ?>" alt="" class="log_free">
                    </h1>
                    <h1 class="titulo_login">Iniciar sesion </h1>
                    <p class="descripcion">Ingresa tus credenciales para continuar.</p>
                    <!-- Tabs -->
                    <ul class="tabs-links">
                    </ul>
                    <!--========================================
                        Formulario login
                    ==========================================-->
                    <form method="post" action="<?= site_url('/register') ?>" autocomplete="off" id="formLogin"
                        class="formulario active">
                        <input type="email" autofocus placeholder="Ingresa tu mail" class="input-text" name="mail"
                            required>
                        <div class="grupo-input">
                            <input type="password" placeholder="Ingresa tu contraseña" name="password"
                                class="input-text clave" title="Debe tener de 6 a 12 digitos" required
                                onkeyup="espacios(this)" minlength="6" maxlength="100">
                            <button type="button" class="icono fas fa-eye mostrarClave"></button>
                        </div>
                        <input class="btn" type="submit" name="iniciarSesion" value="Iniciar Sesion">
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!--========================================
       Mis Scripts
    ==========================================-->
    <script src="<?= base_url("js/login.js") ?>"></script>
    <script>
        // FUNCION QUE NO PERMITE INGRESAR ESPACIOS
        function espacios(e) {
            e.value = e.value.replace(/ /g, '');
        }
    </script>

</body>

</html>