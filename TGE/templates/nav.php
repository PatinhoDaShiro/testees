
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="<?php echo URL_BASE?>/css/nav.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<nav>
    <div class="nav-wrapper blue darken-3">
      <a href="#!" class="brand-logo"><img id="logoimg" src="<?php echo URL_BASE?>/imagens/logo.png" alt=""  ></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo URL_BASE?>/login/loginFunc.php"><?php 
          if(isset($_SESSION['userName'])){
            echo $_SESSION['userName'];

          }else{
            echo 'Iniciar Sessão';

          }
          
          ?></li></a></li>
    
      </ul>
    </div>
  </nav>
 <h1></h1>
  <div id="msg">
  <?php 
          if(isset($_SESSION['userName'])){
        
         $msg ="logado com sucesso";
          echo " <div>
          <h1>$msg</h1>
          </div>";}
          ?>
  </div>

  <ul class="sidenav" id="mobile-demo">
  <li><a href="<?php echo URL_BASE?>/login/loginFunc.php"><?php 
          if(isset($_SESSION['userName'])){
            echo $nomeUsuario;

          }else{
            echo 'Iniciar Sessão';

          }
          
          ?></a></li>
        <li><a href="<?php echo URL_BASE?>/perfil.php">Configurações</a></li>
    <li><a href="badges.html">Chats</a></li>
    
  </ul>


      <script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
    setTimeout(()=>{document.querySelector('#msg').innerHTML=''},3000)
  });
  </script>