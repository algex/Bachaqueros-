 <!DOCTYPE html>
  <html>
    <head>
      <!--Import materialize.css-->
      <link rel="stylesheet" href="css/styles.css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
       <!--Head bar-->
       <header>
        <nav class="red accent-4 nav-fixed">
        <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Denuncia al bachaquero</a>
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
      <h3 class="title-index">Denunciar al bachaquero es tu deber</h3>
      <h5 class="title-index">(Todos tus datos son Confidenciales)</h5>

      <!--Form-->
<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Ingresa tu nombre" id="first_name" type="text" class="validate">
          <label for="first_name">Nombre</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Apellido</label>
        </div>
      </div>
  
      <div class="row">
        <div class="input-field col s6">
          <input id="email" type="email" class="validate">
          <label for="email" data-error="Correo inválido" data-success="Correcto">Correo Electrónico</label>
        </div>

         <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Dirección</label>
        </div>

        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Telefono (opcional)</label>
        </div>

        <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <textarea id="textarea1" class="materialize-textarea" data-length="500"></textarea>
          <label for="textarea1">Mensaje</label>
        </div>
      </div>
    </form>
  </div>

    <div class="file-field input-field">
      <div class="btn">
        <span>Foto (Opcional)</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>

     <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Enviar
    <i class="material-icons right">send</i>
  </button>

      </div>
    </form>
  </div>
      <!--End Form-->

    </main>
      
<!--JAVASCRIPT-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/mobile.js"></script>
      <script type="text/javascript" src="js/form.js"></script>
    </body>
 </html>