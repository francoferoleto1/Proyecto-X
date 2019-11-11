<?php 
	include'elementos.php';
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Mecanica Argentina</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<!-- Barra de navegación -->
<header>  
<?php echo $menu ?>
</header>
<!-- Tres columnas -->
<div class="container">
  <div id="colu" class="row">
    <div class="col-sm-4">      
      <h3>Registrate ahora!</h3>
      <p>Registrarse es totalmente gratuito, si lesite bien, gratuito!! No cobramos adicionales después del registro.</p>
    </div>
    <div class="col-sm-4">
      <h3>¿Por que unirme?</h3>
      <p>Si compartís la misma pasion por los autos que nosotros no podés dejar pasar esta oportunidad para tener el maximo control sobre tu vehiculo. Te ofrecemos un historial clinico con lujo de detalle, escrito por tu propio mecanico.</p>
    </div>
    <div class="col-sm-4">
      <h3>¿Como funciona?</h3>        
      <p>No tengo ni la mas palida idea.</p>
    </div>
  </div>
</div>
<!-- Imagen y titulo  -->
<div id="jumbo" class="jumbotron text-center">
  <h3>LLeva un historial de las cosas que le hiciste a tu mecha</h3>
  <p>Registrate gratis!!!</p> 
</div>

<hr>

<!-- Tabla con filtro -->
<?php echo $tabla ?>

<hr>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
        <div class="container wow fadeInUp">
          <div class="section-header">
            <h3 class="section-title">Contacto</h3>
            <!-- <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> -->
          </div>
        </div>
  
        <!-- Uncomment below if you wan to use dynamic maps -->
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> -->
  
        <div class="container wow fadeInUp mt-5">
          <div class="row justify-content-center">
  
            <div class="col-lg-3 col-md-4">
  
              <div class="info">
                <div>
                  <i style="color: #da919d;" class="fa fa-map-marker"></i>
                  <p>Ramos Mejia<br>Buenos Aires, Zona Oeste</p>
                </div>
  
                <div>
                  <i class="fa fa-envelope"></i>
                  <p>blabablabl</p>
                </div>
  
                <div>
                  <i style="color: #da919d;" class="fa fa-phone"></i>
                  <p>bablablablabal</p>
                </div>
                <div>
                  <i style="color: #da919d;" class="fa fa-instagram"></i>
                  <p>blabbala</p>
                </div>
              </div>
  
              <!-- <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div> -->
  
            </div>
  
            <div class="col-lg-5 col-md-8">
              <div class="form">
                <div id="sendmessage">Tu mensaje fue enviado, Gracias!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Ingrese al menos 4 caracteres" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Por favor ingrese un email valido" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Ingrese al menos 8 caracteres" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Dejanos tu consulta!" placeholder="Mensaje"></textarea>
                    <div class="validation"></div>
                  </div>
                  <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
                </form>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- #contact -->
  


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="js/contactform.js"></script>
<script src="js/js.js"></script>
</html>