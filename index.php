<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Plantilla básica de Bootstrap</title>

        <!-- CSS de Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="css/soluciones.css" rel="stylesheet" media="screen">

        <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>


        <nav id="barra-menu" class="navbar navbar-default" role="navigation">
            <div id="nemu" class="col-md-10 col-md-offset-1">  

                <!-- El logotipo y el icono que despliega el menú se agrupan
                     para mostrarlos mejor en los dispositivos móviles -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-ex1-collapse">

                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div>
                        <img  src="img/LOGO.png">
                    </div> 
                </div>

                <!-- Agrupar los enlaces de navegación, los formularios y cualquier
                     otro elemento que se pueda ocultar al minimizar la barra -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Contactos</a></li>
                    </ul>
                </div>

            </div>

        </nav>


        <div id="carrusel"> 
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" ></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" ></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3" ></li>
                </ol>




                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="img-responsive center-block" src="img/camaras4.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3> Soluciones Informaticas </h3> 
                            <p>Camaras de Seguridad</p> 

                        </div>
                    </div>
                    <div class="item" role="listbox">
                        <img class="img-responsive center-block" src="img/pc4.jpg" alt="...">
                        <div  class= "carousel-caption" > 
                            <h3> Soluciones Informaticas </h3> 
                            <p> Reparacion y venta de Pcs</p> 
                        </div> 

                    </div>
                    <div class="item" role="listbox">
                        <img class="img-responsive center-block" src="img/redes4.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3> Soluciones Informaticas </h3> 
                            <p> Redes</p> 

                        </div>
                    </div>
                    <div class="item" role="listbox">
                        <img class="img-responsive center-block" src="img/web4.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3> Soluciones Informaticas </h3> 
                            <p> Paginas Web</p> 

                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <br>
        </div>

        <div id="servicios">

            <div id="descripcion-servicio" class="col-md-10 col-md-offset-1">
                
                <hr>
                <h3 class="text-center"> Servicios: </h3> 
                <p class="text-center">Desarrollamos soluciones que brinden una mejora sustancial a su negocio. 
                    Le aportamos herramientas que maximicen su potencial y así asegurar el retorno de la inversión. 
                    Contamos con especialistas para cada área.
                </p> 
                <br>
            </div>

            <!--            detalle de los servicios-->

            <div id="servicio1" class="col-md-10 col-md-offset-1">
                <hr>
                <div id="foto" class="col-md-6">
                    <img class="img-responsive center-block" src="img/pc4.jpg" alt="...">                  
                </div>
                <div id="descripcion" class="col-md-6 text-center">
                    <h3> Reparacion y venta de PC </h3> 
                    <p>Mantenimiento general, virus, ,asñdkfjasdhasjkdfh</p> 
                </div>
            </div>
            <br>
            <div id="servicio2" class="col-md-10 col-md-offset-1">
                <hr>
                <div id="foto" class="col-md-6">
                    <img class="img-responsive center-block" src="img/camaras4.jpg" alt="...">                  
                </div>
                <div id="descripcion" class="col-md-6 text-center">
                    <h3>Camares de Seguridad</h3> 
                    <p>Instalacion de camaras de seguridad Ip, circuito cerrado, domos, añlskdjfalñsdkjf</p> 
                </div>
            </div>
            <br>
            <div id="servicio1" class="col-md-10 col-md-offset-1">
                <hr>
                <div id="descripcion" class="col-md-6 text-center">
                    <h3> Conectividad y Redes </h3> 
                    <p>Instalacion y mantenimiento de redes, enlaces punto punto, colocacion de antenas</p> 
                </div>
                <div id="foto" class="col-md-6">
                    <img class="img-responsive center-block" src="img/redes4.jpg" alt="...">                  
                </div>
                
            </div>
            <div id="servicio2" class="col-md-10 col-md-offset-1">
                <hr>
                <div id="descripcion" class="col-md-6 text-center">
                    <h3> Paginas Web </h3> 
                    <p>Creacion de paginas web y sistemas de gestion</p> 
                </div>
                <div id="foto" class="col-md-6">
                    <img class="img-responsive center-block" src="img/web4.jpg" alt="...">                  
                </div>
            </div>
            <br>



        </div>























        <!-- Librería jQuery requerida por los plugins de JavaScript -->
        <script src="http://code.jquery.com/jquery.js"></script>

        <!-- Todos los plugins JavaScript de Bootstrap (también puedes
             incluir archivos JavaScript individuales de los únicos
             plugins que utilices) -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>

