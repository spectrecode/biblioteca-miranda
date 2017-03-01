<!DOCTYPE html>
<html lang="es" ng-app="miranda">
  <head>
    <title>MIRANDA &amp; AMADO | Biblioteca Virtual</title>
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
    <script type="text/javascript" src="./coffeescript/app.js"></script>
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
              <div class="row"><a href="http://mafirma.pe/en/"> </a></div>
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
          <p>Gracias por tu interés en suscribirte a nuestros boletines. Por favor, completa el siguiente formulario.</p>
          <form>
            <input type="text" placeholder="Nombre y apellidos">
            <input type="text" placeholder="E-mail">
            <input type="text" placeholder="Empresa o universidad">
            <input type="text" placeholder="Cargo o carrera">
            <div>
              <p>Tipo de boletín que desea recibir :</p>
              <!-- <div class="list-p">
                <p>
                <p>
                <p>
                <p>
                <p>
              </div>
               -->
               <ul>
                  <li>
                    <input type="checkbox" name="boletin"> Informativo Laboral</p>
                  </li>
                  <li>
                    <input type="checkbox" name="boletin"> Informativo Concursal</p>
                  </li>
                  <li>
                    <input type="checkbox" name="boletin"> Informativo Ambiental</p>
                  </li>
                  <li>
                    <input type="checkbox" name="boletin"> Informativo Tributario</p>                    
                  </li>
                  <li>
                    <input type="checkbox" name="boletin"> Informativo Competencia</p>
                  </li>
               </ul>
            </div>
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
              <input type="text" value="BUSCAR" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
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
      <div class="flicker-example">
        <ul>
          <li data-background="./public/image/banner.jpg">
            <div class="inner-banner">
              <div class="row">
                <h1>BIBLIOTECA <span>VIRTUAL</span></h1>
              </div>
              <div class="row innerdescripcion">
                <p>  La Biblioteca Virtual te permitirá acceder en forma rápida y sencilla a todos los contenidos generados por nuestros especialistas en Miranda & Amado. Podrás encontrar información valiosa y actualizada sobre distintas áreas de práctica del ámbito legal.</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="inicio" ng-controller="bibliotecaCrtl">
        <div class="container">
          <div class="innerLibros">
            <p>Filtrar por:</p>
            <div class="filtros">
              <div class="row" style="margin:auto">
                <form class="formFiltro">
                  <div class="row-filtro">
                    <label for="area">Área</label>
                    <select name="area" id="area" ng-options="arrare as arrare.name for arrare in arrarea track by arrare.id" ng-model="selectedArea" ng-change="cargarAnio()" >
                    </select>
                  </div>
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
                    <!-- <select name="publicaciones" id="publicaciones" ng-options="arrpub as arrpub.name for arrpub in arrpubli track by arrpub.id" ng-model="selectedPubli" >
                    </select> -->
                    <a href="javascript:void(0)" class="prueba">
                      <span class="hida">Todos</span>
                      <img src="public/image/filtro-down.png">
                      <p class="multiSel"></p>  
                    </a>
                    <div class="multiSelect">
                      <ul>
                          <li>
                              <input type="checkbox" value="Boletines" />Boletines</li>
                          <li>
                              <input type="checkbox" value="Transacciones" />Transacciones</li>
                          <li>
                              <input type="checkbox" value="Artículos" />Artículos</li>
                          <li>
                              <input type="checkbox" value="Noticias" />Noticias</li>
                      </ul>
                    </div>
                  </div>
                  <div class="row-filtro btnBuscar">
                    <button ng-click="buscarRevista()">BUSCAR</button>
                  </div>
                </form>
              </div>
              <div class="linea"></div>
              <div class="row">
                <button ng-click="mostrarPopup()">SUSCRÍBETE</button>
              </div>
            </div>
            <div ng-bind-html="datos"></div>
            <style>
                .btnBuscar{
                  padding-top: 0px;
                }
                .formFiltro .row-filtro{
                  display: block;
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
                    padding-top: 20px;
                  }
                }
                .formFiltro label{
                  color: #435663;
                  display: block;
                  font-size: 14px;
                  font-family: "Roboto";
                  padding-left: 5px; 
                }
                .header .inicio .container .innerLibros p.center-p{
                  text-align: center ;
                }
                .header .inicio .container .innerLibros .paginado figure{
                  display:  inline-block;
                  width: auto;
                }
                .header .inicio .container .innerLibros .paginado a > span{
                  color: #435663;
                  font: 20px robotomedium;
                }
                .header .inicio .container .innerLibros .paginado a:hover > span{
                  color: #fff;
                  font: 20px robotomedium;
                }
                .header .inicio .container .innerLibros .paginado .active > span{
                  color: #fff;
                  font: 20px robotomedium;
                }
              </style>
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
    <!--include ../footer/footer.jade-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-92803347-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>