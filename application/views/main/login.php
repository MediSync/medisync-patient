<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/img/icono.ico">
    <title>MediSync</title>

    <!-- DEPENDENCIAS CSS-->
    <link rel="stylesheet" type="text/css" href="assets/lib/font/valera-round.css">
    <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap-3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/lib/fontawesome-5.8.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="assets/lib/toastr-2.1.4-7/toastr.css">
    <link rel="stylesheet" type="text/css" href="assets/lib/css-loader-3.3.2/loader-bouncing.css">
    <link rel="stylesheet" type="text/css"
        href="assets/lib/bootstrap-datepicker-1.6.4/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">

</head>

<body>
    <div class="page">
        <div class="wrapper">
            <div class="content-wrapper">
                <div class="content">
                    <div class="rtl-form">
                        <img src="assets/img/logo.png">
                        <h1>Bienvenido al Portal para Pacientes de MediSync</h1>
                        <form id="login_form" autocomplete="off">
                            <input type="text" name="rut" id="rut" class="form-control"
                                placeholder="Ingrese RUT sin puntos ni guion">
                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Contraseña">
                            <div style="text-align: left; margin: 10px" class="checkbox">
                                <label style="color: #666;">
                                    <input type="checkbox"> Recordar Credenciales
                                </label>
                            </div>
                            <button class="btn btn-block btn-primary btn-lg mt-5 mb-5" id="btn_login">Ingresar</button>
                            <br>
                            <div id="snackbar"></div>
                        </form>
                        <div class="footer-login">
                            <hr>
                            <h6>MediSync-Web v.1.3.0</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="loader" class="loader loader-bouncing is-active"></div>
    <!-- is-active -->
    <script type="text/javascript" src="assets/lib/jquery-3.4.1/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/lib/bootstrap-3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/lib/toastr-2.1.4-7/toastr.min.js"></script>
    <script type="text/javascript" src="assets/lib/jquery.rut/jquery.rut.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/md5.js"></script>
    <script type="text/javascript" src="assets/lib/bootstrap-datepicker-1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript"
        src="assets/lib/bootstrap-datepicker-1.6.4/locales/bootstrap-datepicker.es.min.js"></script>

    <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase-firestore.js"></script>
    <script type="text/javascript" src="assets/lib/firestore/firestoreConfig.js"></script>
    <script type="text/javascript" src="assets/js/main/login.js"></script>
</body>

</html>
