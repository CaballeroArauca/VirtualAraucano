 <script type="text/javascript">
  function Activar(div) {
    obj = document.getElementById(div);
    obj.style.display = (obj.style.display=='none') ? 'block' : 'none';
  }
  function Activar1(div){
    obj=document.getElementById(div);
   obj.style.display = (ob.style.display=='none') ? 'block' : 'none';
   }
   function Activar2(div){
    obj=document.getElementById(div);
   obj.style.display = (ob.style.display=='none') ? 'block' : 'none';
   }
</script>
<div class="container">
  <div class="jumbotron img-jumbotron" style="background: url(../img/jumbotron.png);">
    <h1 align="center">Noche de talento </h1>      
    <p>informacion de la noche de talentos</p>
    <div class="container">
      <div class="row">
          <div class="col-xs-3">
            <div><a onclick="Activar('div1')" href="#a1"> <img  class="img" align="center" src="../img/nav2.png"> </a></div>
            <p class="p-nav" align="center">Participantes</p>
          </div>
          <div class="col-xs-3">
              <div><a onclick="Activar('div2')" href="#a2"> <img  class="img" src="../img/nav1.png"> </a></div>
              <p class="p-nav" align="center">Información</p>
          </div>
          <div class="col-xs-3">
             <div><a onclick="Activar('div3')" href="#a3"> <img  class="img" src="../img/nav.png"></a></div>
             <p class="p-nav" align="center">Calificar</p>
          </div>
          <div class="col-xs-3">
             <div><a  href="../../modelos/usuarios/cerrarSesion.php"> <img  class="img" src="../img/nav3.png"></a></div>
             <p class="p-nav" align="center">Salir</p>
          </div>
      </div>
    </div>
  </div>
</div>

<?php
  $rol = $_SESSION['rol'];
  $usuario = $_usuario = $_SESSION['nombre']." ".$_SESSION['apellido']." ";
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 titulo2">
      <div class="col-sm-6 col-sm-offset-1">
          <h3><b><span class="glyphicon glyphicon-user"></span> <?php echo $usuario?></b></h3>
      </div>
    </div>   
  </div>
</div>