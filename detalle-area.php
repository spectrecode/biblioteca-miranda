<?php
date_default_timezone_set('America/Lima');//-->definimos la zona horaria

include('config/conexion.php');
include('modelo/funciones.php');
//include('modelo/usuario.php');
include('modelo/biblioteca.php');

$ID = $_GET['id'];

$objpost   = new Bilioteca();
$datapost  = $objpost->dameDetalle($ID); 
$post_content = $datapost[0]['post_content'];
$post_title = $datapost[0]['post_title'];
$posini = 5;//strpos($data['post_title'], "[:es]");
$posfin = strpos($post_content, "[:en]") - 5;
$post_content = substr($post_content,$posini,$posfin);
$posfin = strpos($post_title, "[:en]") - 5;
$post_title = substr($post_title,$posini,$posfin);

// Experiencia

$objpost   = new Bilioteca();
$datapost  = $objpost->dameExperiencia($ID);
//echo $datapost[0]['meta_value'];
$posini = strpos($datapost[0]['meta_value'],"<!--:--><!--:es-->") + 18;
$dataexp = substr($datapost[0]['meta_value'],$posini);
$posfin = strpos($dataexp,"<!--:-->");
$dataexp = substr($dataexp,0,$posfin);

?>
<!DOCTYPE html>
<html lang="es" ng-app="miranda">
  <head>
    <title>Energía | Biblioteca Virtual</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="./bower_components/normalize-css/normalize.css" rel="stylesheet">
    <link href="./node_modules/rocket-flicker/css/flicker.min.css" rel="stylesheet" type="text/css">
    <!--link(href="./bower_components/flickerplate/css/flickerplate.css" rel="stylesheet")-->
    <link href="./public/css/app.css" rel="stylesheet">
    <link type="image/x-icon" rel="icon" href="http://mafirma.pe/wp-content/themes/mafirma/favicon2.png">
    <link href="//fonts.googleapis.com/css?family=Roboto:400,100,700,100italic,400italic,700italic" rel="stylesheet" type="text/css">
    <script src="./bower_components/angular/angular.min.js"></script>
    <script src="./bower_components/angular-sanitize/angular-sanitize.min.js"></script>
    <script src="./bower_components/jquery/jquery.min.js"></script>
    <!--script(src="./bower_components/flickerplate/js/flickerplate.js")-->
    <script src="./node_modules/rocket-flicker/js/flicker.min.js"></script>
    <!--Add fancyBox main JS and CSS files-->
    <script type="text/javascript" src="./public/script/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="./public/css/jquery.fancybox.css?v=2.1.5" media="">
    <!--Add Button helper (this is optional)-->
    <link rel="stylesheet" type="text/css" href="./public/css/jquery.fancybox-buttons.css?v=1.0.5">
    <script type="text/javascript" src="./public/script/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <!--Add Thumbnail helper (this is optional)-->
    <link rel="stylesheet" type="text/css" href="./public/css/jquery.fancybox-thumbs.css?v=1.0.7">
    <script type="text/javascript" src="./public/script/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <!--Add Media helper (this is optional)-->
    <script type="text/javascript" src="./public/script/jquery.fancybox-media.js?v=1.0.6"></script>
    <script src="./public/script/init.js"></script>
    <script src="./public/script/controller/controller.js"></script>
    <script src="./public/script/controller/controlador.js"></script>
  </head>
  <body>
    <section ng-controller="bannerCrtl" class="header">
      <div class="inner-header container">
        <div class="row"><a href="index.html">
            <figure><img src="./public/image/logo.png" alt=""></figure></a></div>
        <div class="inner-row">
          <div class="row"><a href="http://affinitaslegal.com/" target="_blank">
              <figure><img src="./public/image/logo-affinitas.png" alt=""></figure></a>
            <div class="inner-redes">
              <div class="row"><a href="http://mafirma.pe/contactenos/">
                  <figure><img src="./public/image/social-contacto.png" alt=""></figure></a></div>
              <div class="row"><a href="https://twitter.com/MAfirma_legal" target="_blank">
                  <figure><img src="./public/image/social-twitter.png" alt=""></figure></a></div>
              <div class="row"><a href="https://www.linkedin.com/company/miranda-&amp;-amado-abogados" target="_blank">
                  <figure><img src="./public/image/social-linkedin.png" alt=""></figure></a></div>
              <div class="row"><a href="http://mafirma.pe/en/">ENGLISH</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-movil">
        <div class="row inline">
          <div class="row"><a href="http://mafirma.pe/contactenos/">
              <figure><img src="./public/image/social-contacto.png" alt=""></figure></a></div>
          <div class="row"><a href="https://twitter.com/MAfirma_legal" target="_blank">
              <figure><img src="./public/image/social-twitter.png" alt=""></figure></a></div>
          <div class="row"><a href="https://www.linkedin.com/company/miranda-&amp;-amado-abogados" target="_blank">
              <figure><img src="./public/image/social-linkedin.png" alt=""></figure></a></div>
        </div>
        <div class="idioma"><a href="http://mafirma.pe/en/">ENGLISH</a></div>
      </div>
      <div class="inner-logo">
        <div class="row"><a href="index.html">
            <figure><img src="./public/image/logo.png" alt=""></figure></a></div>
      </div>
      <div id="suscribete" class="suscribete">
        <div class="inner-suscribete">
          <h1>BIBLIOTECA <span>VIRTUAL</span></h1>
          <p>Gracias por su interés en contactarse con nosotros. Por favor, sírvase completar el siguiente formulario con la consulta o solicitud que nos quiere hacer llegar, y la trasladaremos con área correspondiente.</p>
          <form>
            <input type="text" placeholder="Nombre y apellidos">
            <input type="text" placeholder="E-mail">
            <input type="text" placeholder="Empresa o universidad">
            <input type="text" placeholder="Cargo o carrera">
          </form>
          <div class="botonera">
            <button>ENVIAR</button>
          </div>
          <div class="cerrar"><a href="javascript:void(0)" ng-click="ocultarPopup()">X</a></div>
        </div>
      </div>
      <div class="mainMenuMovil">
        <div class="inner-option"><a href="javascript:void(0)" ng-click="verMenu($event)" class="menuoption">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div></a>
          <input type="text" placeholder="BUSCAR">
        </div>
        <nav id="navMovil" class="nav">
          <ul>
            <li><a href="#" class="blanco">¿QUIENES SOMOS?</a>
              <ul>
                <li><a href="http://mafirma.pe/nuestra-firma/">NUESTRA FIRMA</a></li>
                <li><a href="http://mafirma.pe/distinciones/">DISTINCIONES</a></li>
                <li><a href="http://mafirma.pe/pro-bono/">PRO BONO</a></li>                                
              </ul>
            </li>
            <li><a href="http://mafirma.pe/abogados/">ABOGADOS</a></li>
            <li><a href="http://mafirma.pe/areas-de-practica/">ÁREAS DE PRÁCTICA</a></li>
            <li><a href="http://mafirma.pe/alianzas/">AFFINITAS</a></li>
            <li><a href="index.php">BIBLIOTECA VIRTUAL</a></li>
            <li><a href="http://mafirma.pe/blog/">BLOG</a></li>
            <li><a href="http://mafirma.pe/trabaja-en-miranda-y-amado/">TRABAJA EN M&A</a></li>
          </ul>
        </nav>
      </div>
      <div class="inner-menu ocultar">
        <div class="menu">
          <div class="row">
            <form>
              <input type="text" placeholder="BUSCAR">
            </form>
          </div>
          <div class="row menuG">
            <ul>
              <li><a href="#" class="blanco">¿QUIENES SOMOS?</a>
                <ul class="submenu">
                  <li><a href="http://mafirma.pe/nuestra-firma/" class="blanco">NUESTRA FIRMA</a></li>
                  <li><a href="http://mafirma.pe/distinciones/" class="blanco">DISTINCIONES</a></li>
                  <li><a href="http://mafirma.pe/pro-bono/" class="blanco">PRO BONO</a></li>                                
                </ul>
              </li>
              <li><a href="http://mafirma.pe/abogados/" class="blanco">ABOGADOS</a></li>
              <li><a href="http://mafirma.pe/areas-de-practica/" class="blanco">ÁREAS DE PRÁCTICA</a></li>
              <li><a href="http://mafirma.pe/alianzas/" class="blanco">AFFINITAS</a></li>
              <li><a href="index.php" class="active">BIBLIOTECA VIRTUAL</a></li>
              <li><a href="http://mafirma.pe/blog/" class="blanco">BLOG</a></li>
              <li><a href="http://mafirma.pe/trabaja-en-miranda-y-amado/" class="blanco">TRABAJA EN M&A</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section ng-controller="desplegarCrtl" class="energia">
      <div class="container inner-energia">
        <div id="texto" class="row ocultar">
          <div class="desplegar">
              <a href="" ng-click="desplegarTexto()">
                <figure><img src="./public/image/cerrar.png" alt=""></figure>
              </a>
          </div>
          <div class="desplegar abrir">
              <a href="" ng-click="desplegarTexto()">
                <figure class="form-error"><img src="./public/image/abrir.png" alt=""></figure>
              </a>
          </div>
          <div class="inner-contenido sombra detallelibro">
            <h1><?php echo $post_title; ?></h1>
            <p class="">
              <?php echo $post_content; ?>
            </p>
            <?php 
              if (!empty($dataexp)){
            ?>
            <p class="naranja">UNA MUESTRA DE NUESTRA EXPERIENCIA<span> ▼ </span></p>
            <div class="ulcontenido">
              <?php echo $dataexp; ?>
            </div>
            <?php } ?>
            <style>
              .inner-contenido .ulcontenido ul li{
                font-weight: 400;
                font-family: 'Roboto', sans-serif;
                font-size: 14px;
                color: #435663 !important;
                list-style-type:  none !important;
                padding-bottom: 12px;
              }
            </style>
            <p class="naranja2">ABOGADOS QUE LO INTEGRAN<span> ▼ </span></p>
            <div class="inner-experiencia">
              <div class="row">
                <div class="hidelist">
                    <div class="info-socio"><a href="http://mafirma.pe/abogados/juan-luis-avendano-cisneros/">Avendaño Cisneros, Juan Luis  </a><span>SOCIO</span></div>
                    <div class="info-socio"><a href="http://mafirma.pe/abogados/rafael-corzo-de-la-colina/">Corzo de la Colina, Rafael</a><span>SOCIO</span></div>
                    <div class="info-socio"><a href="http://mafirma.pe/abogados/roberto-maclean-martins/">MacLean Martins, Roberto</a><span>SOCIO</span></div>
                    <div class="info-socio"><a href="http://mafirma.pe/abogados/gabriel-boucher-calamo/">Boucher Cálamo, Gabriel</a><span>ASOCIADO</span></div>
                    <div class="info-socio"><a href="http://mafirma.pe/abogados/alvaro-del-valle-roeder/">del Valle Roeder, Álvaro</a><span>ASOCIADO</span></div>
                    <div class="info-socio"><a href="http://mafirma.pe/abogados/josue-jaen-palomino/">Jaén Palomino, Josué</a><span>ASOCIADO</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="filtros" ng-controller="biblioArtiCrtl">
          <div class="row">
            <form class="formFiltro">
              <div class="row-filtro">
                <label for="area">Año</label>
                <select name="anio" id="anio" ng-options="arrani as arrani.name for arrani in arranio track by arrani.id" ng-model="selectedAnio" ng-change="cargarMes()" >
                </select>
              </div>
              <div class="row-filtro">
                <label for="mes">Mes</label>
                <select name="mes" id="mes" ng-options="arr_mes as arr_mes.name for arr_mes in arrmes track by arr_mes.id" ng-model="selectedMes" >
                </select>
              </div>
              <div class="row-filtro">
                <label for="publicaciones">Tipo</label>
                <select name="publicaciones" id="publicaciones" ng-options="arrpub as arrpub.name for arrpub in arrpubli track by arrpub.id" ng-model="selectedPubli" >
                </select>
              </div>
              <div class="row-filtro btnBuscar">
                <button ng-click="buscarRevista()">BUSCAR</button>
              </div>
            </form>
            
            <div ng-bind-html="datos"></div>
            
           <div class="paginado" ng-if="totalpage > 1">
              <a href="javascript:void(0)" ng-repeat="n in range" ng-click="paginar(n+1)" ng-class="activePage(n+1)">
                <span>
                  {{n+1}}  
                </span>
                <!--figure ng-if="totalpage == (n+1)">
                  <img src="./public/image/right.png" alt="">
                </figure-->
              </a>
            </div>
            <style>
                .btnBuscar{
                  padding-top: 0px;
                }
                .formFiltro .row-filtro{
                  display: inline-block;
                  vertical-align: top;
                  margin-bottom: 10px;
                }
                .formFiltro .row-filtro label{
                  text-align: left;
                }
                #area{
                  width: 100%;
                }
                @media screen and (min-width: 992px) {
                  #area{
                    width: 200px;
                  }
                  .formFiltro .row-filtro{
                    display: inline-block;
                    vertical-align: top;
                  }
                  .btnBuscar{
                    padding-top: 15px;
                  }
                }
                .formFiltro label{
                  color: #435663;
                  display: block;
                  font-size: 14px;
                  font-family: "Roboto";
                  padding-left: 5px; 
                }
                .filtros .paginado figure{
                  display:  inline-block;
                  width: auto;
                }
                .detallelibro ul li{
                  color: #435663 !important;
                  font-size: 14px !important;
                  list-style-type:  none !important;
                  font-family: "Roboto";
                  font-weight: 400;
                  padding-bottom:  12px !important;
                }
                .detallelibro ul li:last-child{
                  padding-bottom:  0px !important;
                }
                .filtros .paginado a > span{
                  color: #435663;
                  font: 20px robotomedium;
                }
                .filtros .paginado a:hover > span{
                  color: #fff;
                  font: 20px robotomedium;
                }
                .filtros .paginado .active > span{
                  color: #fff;
                  font: 20px robotomedium;
                }
              </style>
          </div>
        </div>
      </div>
      <div class="footer-movil">
        <div>
          <h3>CONTACTO</h3>
          <p>Av. José Larco 1301 Piso 20,<br>Torre Parque Mar<br>Miraflores, Lima 18<br>Lima - Perú</p>
          <p><a href="mailto:abogado@mafirma.com.pe">abogado@mafirma.com.pe</a></p>
          <p>Teléfono<br>+51 1 610 4747</p>
          <p>Fax<br>+51 1 610 4748</p>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="inner-links">
          <div class="row"><a href="http://mafirma.pe/noticias/">Noticias</a><a href="https://informativo.mafirma.pe/">Publicaciones</a><a href="http://mafirma.pe/contactenos/">Contáctenos</a><a href="https://owa.mafirma.com.pe/owa/auth/logon.aspx?replaceCurrent=1&amp;url=https%3a%2f%2fowa.mafirma.com.pe%2fowa%2f">Correo web</a><a href="https://citrix.mafirma.com.pe/vpn/index.html" target="_blank">Extranet M&A</a><a href="http://mafirma.pe/smartlaboral/" class="nobr">SmartLABORAL</a></div>
          <div class="row">
            <p>Todos los Derechos Reservados © 2017. Miranda & Amado.</p>
          </div>
        </div>
      </div>
    </section>
    <script type="text/javascript" src="coffeescript/app.js"></script>
  </body>
</html>