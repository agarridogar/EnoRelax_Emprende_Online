<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Enorelax - Experiencias enoturísticas</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/restauracion.css">
	<link rel="stylesheet" type="text/css" href="css/estilos_card.css">
 	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link href="css/carousel.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type ="text/css" href="css/footer_secciones.css">

</head>

<body>

	<header class="header">

	<!-- Top Bar -->

	<div class="top_bar">
		<div class="container">
			<div class="row">
					<div class="col d-flex flex-row">
						<div class="user_box ml-auto">
							<div class="user_box_login user_box_link"><a href="contacto.php"> <img class="margin-top" src="images/spain.png" alt=""></a></div>
							<div class="user_box_register user_box_link"><a href="contacto_en.php"><img class="margin-top" src="images/united-kingdom.png" alt=""></a></div>
						</div>
					</div>
			</div>
		</div>
	</div>

	<!-- Main Navigation -->

	<nav class="main_nav">
		<div class="container">
			<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img height="95px" src="images/Logo_web_Enorelax.png" alt="">EnoRelax</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
              <li class="main_nav_item"><a href="index_en.html">home</a></li>
									<li class="main_nav_item"><a href="index_en.html#about">About us</a></li>
									<li class="main_nav_item"><a href="index_en.html#packs">Packs</a></li>
									<li class="main_nav_item"><a href="contact_en.php">contact</a></li>
							</ul>
						</div>
						<div class="hamburger float-right">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
			</div>
		</div>
	</nav>

	</header>

	<div class="menu trans_500">
	<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>
		<div class="logo menu_logo"><a href="#"><img src="images/Logo_web_Enorelax.png" alt=""></a></div>
		<ul>
    <li class="menu_item"><a href="index_en.html">Home</a></li>
			<li class="menu_item"><a href="index_en.html#about">About us</a></li>
			<li class="menu_item"><a href="index_en.html#packs">Packs</a></li>
			<li class="menu_item"><a href="contact_en.php">Contact</a></li>
		</ul>
	</div>
	</div>

  <main role="main" style="min-height: 150vh;">

    <div class="home">

      
    <div class="container marketing">
		<div class="row formulario">
		<div class="col-lg-6 mb-4" >		
          <h2 class="contacto">Contact form</h2>  
          <form name="sentMessage" id="contactForm" onsubmit='return validar()' action="envia.php" method="post" >
              <div class="controls">
                <label>Name:</label>
                <input type="text" class="form-control" name="Nombre" id="Nombre" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
   
			<div class="control-group form-group">
              <div class="controls">
                <label>Surname:</label>
                <input type="text" class="form-control" name="apellidos" id="apellidos" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone:</label>
                <input type="tel" class="form-control" name="telefono" id="telefono" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email:</label>
                <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Your question:</label>
                <textarea rows="10" cols="100" class="form-control" name="message" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
			<input type='checkbox' value='SI' id='acepto'/>
			I agree to the Privacy Policy
			</label>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-info" id="sendMessageButton">Enviar</button>
			<t></t>
          </form>
		</div>
		
		
		<div class="col-lg-4 mb-4">
	    <br>
	    
       <h2 class="contacto">Where we are?</h2>  	  
		<p class= "descripcion">
            
			<br>
			Paseo de Sagasta 30 <br>
            <br>Zaragoza, ES 50004
            <br>			
          </p>
          <p class= "descripcion">
            <abbr title="Phone">P</abbr>: (+34) 976 123456 / (+34) 600 010203
          </p>
          <p class= "descripcion">
            <abbr title="Email">E</abbr>:
            <a href="mailto:info@enorelax.com">info@enorelax.com
            </a>
          </p>
          <p class= "descripcion">
            <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 18:00 PM
          </p>
		</div>	
	</div>



    </div><!-- /.container -->
    </main>


    <!-- FOOTER -->
	  
	  <footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
	  
	  <?php include("footer_en.html");?>

      </footer>
	
	

  

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="js/vendor/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/validarformulario.js"></script>   
</body>

</html>