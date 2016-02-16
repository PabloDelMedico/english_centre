<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>English Centre - Academia de Inglés</title>

    <!-- Icono -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initMap() {
            var myLatLng = {lat: -33.347339, lng: -60.237882};

            // Create a map object and specify the DOM element for display.
            var map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                zoom: 14
            });

            // Create a marker and set its position.
            var marker = new google.maps.Marker({
                map: map,
                position: myLatLng,
                title: 'English Centre'
            });
        }

        google.maps.event.addDomListener(window, 'load', initMap);
    </script>


</head>

<body id="page-top">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">English Centre</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#about">Nosotros</a>
                </li>
                <li>
                    <a class="page-scroll" href="#cursos">Cursos</a>
                </li>
                <li>
                    <a class="page-scroll" href="#examenes">Exámenes</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contacto">Contacto</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<header>
    <div class="header-content">
        <div class="header-content-inner">
            <h1>NOTICIAS</h1>
        </div>
    </div>
</header>

<!--nosotros  -->
<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">¿Quienes somos?</h2>
                <hr class="light">
                <p>En una sociedad cada vez más globalizada, donde el mercado laboral es más exigente y competitivo, es
                   cada vez más necesario el aprendizaje de distintas lenguas.</p>

                <p>Siendo el inlges un idioma internacional utilizado en todo el mundo tanto en el campo laboral como
                   académico. Teniendo en cuenta esta premisa nace English Centre en el año 1991 con el fin de ofrecer a
                   nuestros alumnos cursos de Ingles diseñados con programas específicos adaptados a las necesidades y
                   objetivos de cada grupo.</p>
                <a href="#" class="btn btn-default btn-xl">Get Started!</a>
            </div>
        </div>
    </div>
</section>
<!--fin nosotros -->

<!--cursos  -->
<section id="cursos">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">¿Queres aprender?</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="text-center">
                <p>Los cursos están basados en motivar a los alumnos mostrándoles en forma permanente sus progresos.</p>

                <p>Enseñamos el idioma como una herramienta para la comunicación. Por ese motivo damos mucha importancia
                   a la expresión oral y comprensión auditiva, sin dejar de lado la comprensión lectora y escrita.</p>

                <p>En English Centre los principales actores son nuestros estudiantes por ese motivo nuestras clases son
                   interactivas, donde ellos podrán aprender a expresar ideas y describir situaciones, objetos, lugares,
                   personas e ideas.</p>

                <p>Además están diseñados para que ellos puedan defenderse en ingles en cualquier entorno
                   social-laboral, desde un viaje a una entrevista de trabajo.</p>
            </div>

        </div>
    </div>

    <div class="no-padding">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <img src="img/portfolio/fotos/1.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-lg-4 col-sm-6">
                    <img src="img/portfolio/fotos/2.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-lg-4 col-sm-6">
                    <img src="img/portfolio/fotos/3.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-lg-4 col-sm-6">
                    <img src="img/portfolio/fotos/4.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-lg-4 col-sm-6">
                    <img src="img/portfolio/fotos/5.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-lg-4 col-sm-6">
                    <img src="img/portfolio/fotos/6.jpg" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--fin cursos -->


<!--examenes  -->
<section id="examenes">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Obtene Resultados</h2>
                <hr class="primary">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 text-center">
                <p>English Centre ofrece a los alumnos que estén interesados la posibilidad de obtener una certificación
                   internacional. Miles de universidades, empleadores y entidades gubernamentales alrededor del mundo
                   confían en los certificados de Cambridge ESOL como prueba de nivel de Ingles. Cada año más de dos
                   millones de personas rinden estos exámenes para hacer realidad sus proyectos laborales, académicos o
                   de esparcimiento.</p>
                <a href="http://www.cambridgeesol.org/spain/" style="float:right;"><img src="img/CambridgeESOL.jpg"/></a>

                <p>Dichos exámenes son preparados en el Reino Unido (Universidad de Cambridge) y regresan allí para ser
                   evaluados por un equipo especializado. Los candidatos reciben el resultado de los exámenes con un
                   detalle de su desempeño en las distintas destrezas testeadas. Estos exámenes cumplen con estrictos
                   criterios de evaluación y están a cargo de personal altamente calificado.</p>
                <h4><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>¿Por qué sacar el certificado?</h4>

                <p>Si tienes el nivel de inglés adecuado, tendrás el certificado para toda la vida. Mejorará tu
                   currículum ya que refleja fielmente tu nivel.</p>
                <h4><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>¿Qué nivel hago?</h4>

                <p>Los profesores de The English Centre evaluamos tu nivel antes de hacer la matrícula y te aconsejamos
                   cual te conviene hacer.</p>
                <h4><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>¿Necesito una preparación especial?
                </h4>

                <p>No, ya que los exámenes se basan en inglés general escrito y hablado. Sin embargo, a lo largo del
                   curso académico te entregaremos varios exámenes de otras convocatorias y ensayaremos la prueba oral
                   en el Centro. Durante el último mes de preparación, ponemos a la disposición de nuestros alumnos un
                   horario adicionales de consultas para que nuestros candidatos vayan a su examen muy bien
                   preparados.</p>
                <h4><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>¿A partir de qué edad puedo hacer los
                                                                                   exámenes?</h4>

                <p>Estos exámenes están diseñados principalmente para adultos y jóvenes. Cada año presentamos a nuestros
                   alumnos a partir de los 13 ó 14 años.</p>
            </div>

        </div>
    </div>


    <div class="no-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <img src="img/curso2.jpg" class="img-responsive sombraImagen" alt="">
                </div>
                <div class="col-lg-6 col-sm-6">
                    <img src="img/curso1.jpg" class="img-responsive sombraImagen" alt="">
                </div>
            </div>
        </div>
    </div>

</section>
<!--fin examenes-->



<section id="contacto">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">¿Te ayudamos?</h2>
                <hr class="primary">
                <p>No dude en consultarnos cualquier tipo de inquietud. Nos contactaremos con usted a la brevedad.</p>
            </div>
            <div class="col-lg-4 col-lg-offset-2 text-center">
                <i class="fa fa-phone fa-3x wow bounceIn"></i>

                <p>0336-4440842 / 0336-4441030</p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>

                <p><a href="mailto:contacto@englishcentre-sn.com.ar">contacto@englishcentre-sn.com.ar</a></p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nombre *" id="name" required data-validation-required-message="Por favor, ingrese su nombre.">

                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email *" id="email" required data-validation-required-message="Por favor, ingrese su email.">

                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Teléfono *" id="phone" required data-validation-required-message="Por favor, ingrese su teléfono.">

                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Mensaje *" id="message" required data-validation-required-message="Por favor, ingrese su mensaje." rows="5"></textarea>

                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="no-padding">
        <div class="container-fluid">
            <div class="row">
                <div id="map" class="col-lg-12"></div>
                <!--            <div class="col-lg-2 text-center"><b>ENGLISH CENTRE</b> Petrecca 103 Bº Lanza - San Nicolás de los
                                                                                        Arroyos - Bs. As - Argentina</div>-->


            </div>
        </div>
    </div>
</section>


<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.fittext.js"></script>
<script src="js/wow.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/creative.js"></script>

</body>

</html>
