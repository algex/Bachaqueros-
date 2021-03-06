 <!DOCTYPE html>
<html>
  <head>
      <!--Import materialize.css-->
      <link rel="stylesheet" href="css/styles.css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <!--Head bar-->
      <header>
        <nav class="materialize-red nav-fixed darken-4">
          <div class="nav-wrapper">
            <a href="#!" class="brand-logo hide-on-small-only">Proyecto 0 bachaquero</a>
            <img class="ico" src="img/icono.png">
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#">Nuestro Equipo</a></li>
              <li><a href="#">link 2</a></li>
              <li><a href="#">link 3</a></li>
              <li><a href="#">link 4</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a href="#">link 1</a></li>
              <li><a href="#">link 2</a></li>
              <li><a href="#">link 3</a></li>
              <li><a href="#">link 4</a></li>
            </ul>
          </div>
        </nav>
      </header>
    <!-- END Head bar-->
    <main>
      <div class="container">
        <div class="center-align">
          <img class="responsive-img imga" src="img/banner.gif">
        </div>
        <h1 class="center teal-text title-index">Denunciar al bachaquero es tu deber</h1>
        <h5 class="center grey-text">(Todos tus datos son Confidenciales)</h5>
    <!--Form-->
      <div class="row">
        <form class="col s12" action="send.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="input-field col s12 m6">
                <input placeholder="Ingresa tu nombre" id="first_name" type="text" name="name" class="validate" required>
                <label for="first_name">Nombre</label>
              </div>

              <div class="input-field col s12 m6">
                <input id="last_name" type="text" class="validate" name="last_name">
                <label for="last_name">Apellido (opcional)</label>
              </div>
            </div>

          <div class="row">
            <div class="input-field col s12 m6">
              <input id="email" type="email" class="validate" name="email">
              <label for="email" data-error="Correo inválido" data-success="Correcto">Correo Electrónico</label>
            </div>

            <div class="input-field col s12 m6">
              <input id="address" type="text" name="address" class="validate">
              <label for="last_name">Dirección (opcional)</label>
            </div>

            <div class="input-field col s12 m6">
              <input id="icon_telephone" type="tel" name="phone" class="validate">
              <label for="icon_telephone">Telefono (opcional)</label>
            </div>

            <div class="file-field input-field col s12 m6">
              <div class="btn red darken-4">
              <i class="material-icons right">file_upload</i>
              <span>Foto (evidencia)</span>
              <input type="file" name="evidence">
              </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" >
            </div>
          </div>

        
          <div class="row">
            <div class="input-field col s12 m12">
            <textarea id="textarea1" class="materialize-textarea" name="text" data-length="500"></textarea>
            <label for="textarea1">Mensaje o denuncia</label>
            </div>
          </div>

          <div class="center-align">
            <button class="btn waves-effect waves-light btn-large materialize-red darken-4" type="submit" name="action">Enviar
            <i class="material-icons right">send</i>
            </button>
          </div>
        </form>
      </div>
      <!--End Form-->
    </main>
    

      <!--footer-->
      <footer class="page-footer red darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">¡Carabobo Te Quiero!</h5>
                <p class="grey-text text-lighten-4">Ingresar algún texto aquí!.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Sígueme en Twitter</h5>
                <ul>
                  <li><a href="https://twitter.com/rafaellacava10" class="twitter-follow-button" data-size="large" data-show-count="false">Follow @rafaellacava10</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
              © 2017 Rafael Lacava
              <a class="grey-text text-lighten-4 right" href="https://gerardo.com.ve/">Hosting y diseño Gerardo.com.ve</a>
            </div>
          </div>
      </footer>
<!--End footer-->

<!--JAVASCRIPT-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/mobile.js"></script>
      <script type="text/javascript" src="js/form.js"></script>
    </body>
</html>