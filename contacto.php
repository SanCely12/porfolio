<?php

ini_set('display_errors',1);
ini_set('display_starup_errors',1);
error_reporting(E_ALL);
$pg= "Contacto";

if ($_POST){
    $nombre=$_POST["txtNombre"];
    $correo=$_POST["txtCoreo"];
    $telefono=$_POST["txtTelefono"];
    $mensaje=$_POST["txtMensaje"];

    $para="celycarolina0412@gmail.com";
    $titulo='Recibiste un mensaje desde tu web';
    

    $cuerpo="
    Nombre=$nombre<br>
    Correo=$correo<br>
    Telefono=$telefono<br>
    Mensaje=$mensaje
    ";

    $cabeceras='MINE-Version: 1.0' . "\r\n";
    $cabeceras.='Contect-type: text/html; charset=UFT-8'. "\r\n";

    $cabeceras.='To: celycarolina0412@gmail.com'. "\r\n";
    $cabeceras.='From: contacto@sandracely.com.ar'. "\r\n";

    mail($para, $titulo, $cuerpo, $cabeceras);
    header("Location: confirmacion-envio.php");
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contacto</title>
        <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
        <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body id="contacto" class="d-flex flex-column h-100">
        <header class="container">
     <?php include_once "menu.php";?>
        </header>    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12-sm-6 col-6">
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
            </div>
            <div class="col-sm-6 col-6">
                <form action="" method="POST">
                    <div class="mb-3">
                        <input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre"
                            class="form-control shadow" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" id="txtCorreo" name="txtCorreo" placeholder="Correo"
                            class="form-control shadow" required="">
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/Whatsapp" class="form-control shadow" required="">
                    </div>
                    <div class="mb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje"
                            class="form-control shadow" required=""></textarea>
                    </div>
                    <div class="me-auto text-right">
                        <button id="btnEnviar" name="btnEnviar" class="btn px-4">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="container">
        <div class="row mt-5 pb-3">
            <div class="col-12 col-sm-3 text-center text-sm-start">
              <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
              <a href="https://www.linkedin.com/in/sandra-carolina-cely-7a1175180/" target="_blank" title="Linkedin"><i
                      class="fab fa-linkedin-in"></i></a>
          </div>
          <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
              Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
          </div>
          <div class="col-12 col-sm-3 text-sm-start  pt-2 p-sm-0">
              <a href="mailto:celycarolina0412@tmail.com">celycarolina0412@gmail.com</a>
          </div>
      </div>
  </footer>
  <div class="whatsapp">
      <a href="https://api.whatsapp.com/send?phone=573153107311" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>