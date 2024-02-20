<!DOCTYPE html>
<!-- Bootstrap 5 (CSS y JS) -->
@vite(['resources/css/app.css', 'resources/js/app.js' ])


<link rel="stylesheet" type="text/css" href="assets/slick/css/slick.css"/>
<link rel="stylesheet" type="text/css" href="assets/slick/css/slick-theme.css"/>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/slick/js/slick.js"></script>

    <style type="text/css">
            .textblanco{
                color: white;
            }

    </style>




<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

      
    </head>
    <body class="antialiased">

        @include('layouts/head')

        <section>
            <div>
                <img src="/images/background-header.png" width="100%" style="border: none !important;">
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row" style="text-align: center">
                    <h2>{{ trans('welcome.textoSeccion1')}}</h2>
                </div>
                <div class="row">
                    <div class="col">
                      <img src="/images/IsaV_3.png" width="100%" style="border: none !important;">
                    </div>
                    <div class="col">
                      <img src="/images/IsaV_3.png" width="100%" style="border: none !important;">
                    </div>
                </div>
            </div>
        </section>


        <section id="thirdsection" style="background-color: #000000">
            <h2 style="text-align: center; color: #E9E9E9"><br><br>{{ trans('welcome.textoSeccion5')}}</h2>
            <div class="cards-2 bg-gray" style="background-color: #000000; text-align: center;" >
               <embed src="/images/Chemise_Homme.mp4" width="650" height="650"></embed>
                <h3 style="text-align: center;color: #E9E9E9"><br/>
                    {{ trans('welcome.textoSeccion2')}}<br/><br/><br/>
                </h3>
             </div>
        </section>


            <section id="fourthsection" style="background-color:white">
            
            <h2 style="text-align: center;">{{ trans('welcome.textoSeccion3')}}<br/><br/><br/><br/></h2>
                <img class="img-fluido" align="middle" alt="Creation_Validation" src="images/Gif_Systeme.gif" width=90%>
  
        </section>


        <section id="fivehsection">
            <div class="cards-2 bg-gray imagenSection5" style="background-color:transparent">
                <img class="img-fluido" alt="Creation_Validation" src="images/seccion5.png" width="100%">
            </div> <!-- end of Creation - Validation -->
        </section>




        <section id="sevensection">
            <div style="background-color:transparent">
                <div id="nos" class="basic-2">  
                
                    <div class="container">
                        <div id="jacket">
                            <h2 style="color: #D9D9D9">{{ trans('welcome.textoSeccion4')}}</h2><br>
                         </div>
                    </div>
       
                </div> <!-- end of team-member -->
            </div>
        </section>


        <section >   
<!-- 
            <div class="slider">
                <div>
                    <img data-u="image" src="images/1 (1).png" />
                </div>
                <div>
                    <img data-u="image" src="images/1 (2).png" />
                </div>
                <div>
                    <img data-u="image" src="images/1 (3).png" />
                </div>
                <div>
                    <img data-u="image" src="images/1 (4).png" />
                </div>
                <div>
                    <img data-u="image" src="images/1 (5).png" />
                </div>
                <div>
                    <img data-u="image" src="images/1 (6).png" />
                </div>
                <div>
                    <img data-u="image" src="images/1 (7).png" />
                </div>
                <div>
                    <img data-u="image" src="images/1 (8).png" />
                </div>
                <div>
                    <img data-u="image" src="images/1 (9).png" />
                </div>
                <div>
                    <img data-u="image" src="images/1 (10).png" />
                </div>
                <div>
                    <img data-u="image" src="images/1 (11).png" />
                </div>
                <div>
                    <img data-u="image" src="images/1 (12).png" />
                </div>
                <div>
                    <img data-u="image" src="images/1 (13).png" />
                </div>
                <div>
                    <img data-u="image" src="images/1 (14).png" />
                </div>

            </div>
             -->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/1 (1).png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/1 (2).png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/1 (3).png" class="d-block w-100" alt="...">
                </div>
                 <div class="carousel-item">
                  <img src="images/1 (4).png" class="d-block w-100" alt="...">
                </div>
                 <div class="carousel-item">
                  <img src="images/1 (5).png" class="d-block w-100" alt="...">
                </div>
                 <div class="carousel-item">
                  <img src="images/1 (6).png" class="d-block w-100" alt="...">
                </div>
                 <div class="carousel-item">
                  <img src="images/1 (7).png" class="d-block w-100" alt="...">
                </div>
                 <div class="carousel-item">
                  <img src="images/1 (8).png" class="d-block w-100" alt="...">
                </div>
                 <div class="carousel-item">
                  <img src="images/1 (9).png" class="d-block w-100" alt="...">
                </div>
                 <div class="carousel-item">
                  <img src="images/1 (10).png" class="d-block w-100" alt="...">
                </div>
                 <div class="carousel-item">
                  <img src="images/1 (11).png" class="d-block w-100" alt="...">
                </div>
                 <div class="carousel-item">
                  <img src="images/1 (12).png" class="d-block w-100" alt="...">
                </div>
                 <div class="carousel-item">
                  <img src="images/1 (13).png" class="d-block w-100" alt="...">
                </div>
                 <div class="carousel-item">
                  <img src="images/1 (14).png" class="d-block w-100" alt="...">
                </div>
                 
              </div>

              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            
        </section>



        <!-- Services -->
    <section id="tensection"style="background-color: #C8C6C2">
        <h1 style="text-align: center; color: dimgray"><br>NOS SERVICES</h1>
                <h6 style="text-align: center; color: gray"><br>KROBADY 3D STUDIO accompagne 
                    les entreprises pour franchir le pas du changement de paradigme (le numérique). Bien que ce changement ne soit pas facile, 
                    être accompagné d’experts, rassure.<br></h6>
        
        <!-- Creation - Validation -->
        <h3 style="text-align: center; color: dimgrey"><br>CREATION 3D<br><br></h3>
        
        <img class="img-fluido" align="middle" width= "100%" alt="Creation_Validation" src="images/Creation_Validation.png">
        
        <h5 style="text-align: center; color: gray"><br>Les patronnages sont réalisés dans un monde virtuel avec des avatars hyperréalistes (toiles numeriques) qui 
                    vous aideront à valider vos modèles bien avant qu’il ne soit coupés.<br>
                    Partagez instantanément vos nouvelles conceptions avec toute votre équipe de création, ajustez-les, modifiez-les, 
                    changez-les, sans gaspiller un seul centimètre de matière première,<br>
                    faites gagner du temps à vos collaborateurs tout en respectent l'environnement.<br>
                    DXF-AAMA, DXF-ASTM, DXF, PDF, MDL (LECTRA), Gerber et Optitex.<br></h5>
    </section>
    

    <section id="elevensection"style="background-color: #000000">
        <h3 style="text-align: center; color: dimgrey"><br><br>ESSAYAGE VIRTUEL<br><br></h3>
        <img class="img-fluido" align="middle" src="images/lingerie.png" alt="" width="100%">
        <h5 style="text-align: center; color: gray"><br>Profitez d'une vision 360° pour mieux vous projeter dans le  look, le « fit », le confort de chaque style et aux mesures de 
                    votre mannequin,<br>
                    Tout un éventail de poses naturelles pour ameliorer votre essayage virtuel.<br>
                    PNG, JPG et TIFF à très haute resolution.<br><br></h5>
    </section>


      <!-- Bases -->
    <section id="twelfth"style="background-color: #C8C6C2">
        <h3 style="text-align: center; color: dimgrey"><br><br>BASES & FIT's SPECIFIQUES<br><br></h3>
        <img class="img-fluido" align="middle" src="images/Bases.png" width="100%" alt="">
    </section>
            
    <section id="Thirteenthsection"style="background-color: #000000">
        <h3 style="text-align: center; color: dimgrey"><br><br>CONCEPTION D'AVATARS<br><br></h3>
        <img class="img-fluido" align="middle" src="images/Conception_Avatars.png" alt="" width="100%">
        <h5 style="text-align: center; color: gray"><br>Des avatars hyper-réalistes personnalisés peuvent vous garantir l’ajustement que vous recherchez.<br>
                    <br><br></h5>
    </section>
    <!-- end of Section 10 -->
        

            <!-- Press -->
        <div style="background-color: black;" class="press">
            <div class="container" style="padding-top: 5%; background-color: black; padding-bottom: 10%;">
                <h2 style="text-align: center; padding-bottom:5%;">PRESS</h2>
                <h2 style="text-align: center; padding-bottom:5%;">Krobady par "Mode IN Textile by IFTH"</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <div class="section-title"> </div>
                                <img class="img-fluido" alt="Starup Krobady" src="images/starup.PNG">
                            </div> <!-- end of text-container -->
                        </div> <!-- end of col -->
                    <div class="col-lg-6    "> 
                        <p><br><br><br><br><br>L’arrivée de la 3D dans les jeux vidéo remonte au début des années 1980. Encore balbutiante, la 3D offre alors déjà un univers interactif et immersif. Rapidement, les technologies de modélisation en 3D  vont permettre de rendre la texture des surfaces de plus en plus réalistes. Mais ce sont les années 2000 qui verront enfin la 3D connaître un “boom spectaculaire” avec l’avènement des nouvelles cartes graphiques ultra-performantes.</p>
                        <a href="https://www.modeintextile.fr/start-story-krobady-3d-mode/" target="_blank">Continuer à lire...</a>
                    </div> <!-- end of class="col-lg-6"-->
                </div> <!-- end of class row-->
            </div> <!-- end of class container-->
        </div><!-- end of style background-->



        <!-- Contact -->
        <div id="contact" style="background-color: #E4E4E4;" class="form-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <div class="section-title">CONTACT</div>
                            <h2>Nous contacter</h2>
                            <p><br></p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="address"><i class="fas fa-map-marker-alt"></i>4,rue de la Fontaine 94350, Villier sur Marne, France </li>
                                <li><i class="fas fa-phone"></i><a href="tel:33618730449">+33 6 18 73 04 49</a></li>
                                <li><i class="fas fa-envelope"></i><a href="mailto:contact@krobady.com">contact@krobady.com</a></li>
                            </ul>
                            <h3>Suivez-nous sur</h3>

                            <span class="fa-stack">
                                <a href="https://www.facebook.com/krobady/" target="_blank">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>


                            <span class="fa-stack">
                                <a href="https://www.instagram.com/krobady.corporation/?hl=es-fr" target="_blank">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="https://mx.linkedin.com/company/krobady-corporation?trk=similar-pages_result-card_full-click" target="_blank">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-linkedin-in fa-stack-1x"></i>
                                </a>
                            </span>

                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    
                    <!-- Contact Form -->
                    <div class="col-lg-6">
                        <form id="contactForm"   action="mailto:contact@krobady.com" method="post" enctype="text/plain" data-toggle="validator" data-focus="false">
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="cname" required>
                                <label class="label-control" for="cname">Nom et prénom</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="cemail" required>
                                <label class="label-control" for="cemail">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control-textarea" id="cmessage" required></textarea>
                                <label class="label-control" for="cmessage">Votre message</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group checkbox">
                                <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>J'accepte la politique de confidentialité ainsi que les termes et conditions de Krobady
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">ENVOYER LE MESSAGE</button>
                            </div> <!-- end of class="form-group" -->
                            <div class="form-message">
                                <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                            </div> <!-- end of class="form-message" -->
                        </form><!-- end of contact form -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of form-2 -->
        <!-- end of contact -->


    </body>
       @include('layouts/footer')

</html>

