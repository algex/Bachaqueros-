 <!DOCTYPE html>
  <html>
    <head>
      <!--Import materialize.css-->
      <link rel="stylesheet" href="css/styles.css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
       <!--Head bar-->
       <header>
        <nav class="red accent-4">
        <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Acaba con los Bachaqueros</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#">link 1</a></li>
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
      <h1 class="title-index">Denunciar al bachaquero es tu deber</h1>
      
    </main>
      


      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">    
      $( document ).ready(function() {$(".button-collapse").sideNav();});
      </script>
    </body>
 </html>