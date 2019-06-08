<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu SICET</title>
    <link rel="stylesheet" href="<?php echo base_url();?>css/main.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" type="text/css"> 
	<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css">



    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
    <!-- <header>
        <div class="container-header">
            <div class="logo-ppal">
                <img src="imagenes/escudoean.png" alt="">
                <h4>SISTEMA SICET</h4>
            </div>
        </div>
    </header> -->
    <div class="container-portada">
        <div class="capa-transp"></div>
        <div class="container-instru">
            <div class="instru">
                <h1>Menu Principal</h1>
                <p>Esta aplicación web esta diseñada para el registro de ingreso y salida de personas que son trasladadas a los centros de traslado por protección, sistema diseñado unicamente con fines academicos dentro de la materia de programación web de la Universidad EAN.</p>
                <button>Instrucciones de uso SICET</button>
            </div>
        </div>
    </div>

    <main>

        <article>
          <h3 class="text-center">Opciones de Ingreso</h3>
          <hr>
        </article>
        
        <section class="opciones">
        <div>
            <div>
                <div class="col-xs-12 col-sm-6 col-md-4">
					<div class="thumbnail">
						<a href="#">
							<img src="<?php echo base_url();?>imagenes/crear.png" alt="Crear usuario" width="100">
						</a>
						<div class="caption text-center">
						  <h4>Crear Usuarios</h4>
						  <p>Para la creación de usuarios que puedan accerder a la aplicación.</p>
                            <button class="text-center"><a href="Crear_Usuario.html">Crear Usuarios</a></button>
							
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="thumbnail">					
							<img src="<?php echo base_url();?>imagenes/resgistros.jpg" alt="Registro Personas" width="100">
						<div class="caption text-center">
						  <h4>Registro Personas </h4>
						  <p>Para registro de ingreso y salida de personas al CTP.</p>
							<button><a href="Ingreso_CTP.html">Registro Personas</a></button>
							
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="thumbnail">
							<img src="<?php echo base_url();?>imagenes/recuperar.jpg" alt="Cambio contraseña" width="100">
						<div class="caption text-center">
						  <h4>Cambio Contraseña</h4>
						  <p>Para el cambio de contraseña de acceso a la aplicación SICET.</p>
							<button><a href="cambio_pass.html">Cambio contraseña</a></button>
							
						</div>
					</div>
				</div>
            </div>
        </div>
    </section>
        

        <!--<div class="content-dos">
            <div class="content-tres">
                <div class="content-item2">
                    <button><a href="Ingreso_CTP.html">Crear Usuarios</a></button>
                    <p>Para la creación de usuarios que puedan acceder a la aplicación.</p>
                </div>

                <div class="content-item2">
                    <button><a href="Ingreso_CTP.html">Registro Personas</a></button>
                    <p>Para registro de ingreso y salida de personas al CTP.</p>
                 </div>

                <div class="content-item2">
                    <button><a href="index2.html">Cambio contraseña</a></button>
                    <p>Para el cambio de contraseña de acceso a la aplicación SICET.</p>
                </div>

            </div>
        </div>-->
    </main>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
