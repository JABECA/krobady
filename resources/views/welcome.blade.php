<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Krobady 3ds</title>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Oswald&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>

	<!-- <nav class="nav">
		<a href="#inicio" class="marca">Olympia</a>
		<ul id="menu" class="menu">
			<li data-menuanchor="inicio" class="active">
				<a href="#inicio">Inicio</a>
			</li>
			<li data-menuanchor="productos">
				<a href="#productos">Productos</a>
			</li>
			<li data-menuanchor="contacto">
				<a href="#contacto">Contacto</a>
			</li>
		</ul>
	</nav>  -->

	<nav class="topnav">
	  <a href="#inicio" class="marca"><img src="media/Krobady 3DS.png" width="120px"></a>
	  <div id="myLinks" style="margin-right: 30px;">
	     <a href="#contacto">
	    	@if (config('app.locale') === 'es')
                <img src="images/flag/es.png" width="15px" align="left" style="margin-top: 5px" />
            @elseif (config('app.locale') === 'en')
                <img src="images/flag/en.png" width="15px" align="left" style="margin-top: 5px" />
            @elseif (config('app.locale') === 'fr')
                <img src="images/flag/fr.png" width="15px" align="left" style="margin-top: 5px" />
            @endif 
	     </a>
	    <a href="#inicio">{{ trans('header.Welcome')}}</a>
	    <a href="#productos">{{ trans('header.2D/3D')}}</a>
	    <a href="#contacto">{{ trans('header.Systems')}}</a>
	    <a href="#contacto">{{ trans('header.Services')}}</a>
	    <a href="#contacto">{{ trans('header.Contact')}}</a>
	   
	  <!--   <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle textblanco" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true" >
                           
                        {{ trans('welcome.idioma')}}  
                           
                        @if (config('app.locale') === 'es')
                            <img src="images/flag/es.png" width="15px" align="left"/>
                        @elseif (config('app.locale') === 'en')
                            <img src="images/flag/en.png" width="15px" align="left"/>
                        @elseif (config('app.locale') === 'fr')
                            <img src="images/flag/fr.png" width="15px" align="left"/>
                        @endif 
                    </a> 
          
                    <ul class="dropdown-menu">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li class="active padDrop">
                            <a class="aDrop" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" aria-expanded="true">
                                
                                {{ $properties['native'] }}

                                @if ( $properties['native'] === 'Español')
                                    <img src="images/flag/es.png" width="15px" align="left"/>
                                @elseif ($properties['native'] === 'English')
                                    <img src="images/flag/en.png" width="15px" align="left"/>
                                @elseif ($properties['native'] === 'Français')
                                    <img src="images/flag/fr.png" width="15px" align="left"/>
                                @endif           
                            </a>
                        </li>
                        @endforeach
                    </ul>
        </li>
 -->

	  </div>
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()" >
	    <!-- <i class="fa fa-bars"></i> -->
	    <img  src="media/Hamburger.png" width="30px" >
	  </a>
	  <div class="puntero"></div>
	</nav>

	<main id="fullpage">
		
		<header class="section grid-container" >
			

			<div class="contenedor-icono">
				<p><a href="#l" class="texto-blanco"><i class="fas fa-chevron-down"></i></a></p>
			</div>

			<h1 class="pruebita"> {{ trans('header.Acelerar')}} </h1>

			<!-- <video loop muted data-autoplay class="bg-video">
				<source src="media/bg-video.m4v" type="video/mp4">
			</video>  -->
		</header>

		<section class="section productos">
			<!-- <article class="slide" style="background-image: url( 'media/producto-01.jpg' );">
				<div class="informacion-producto">
					<p class="modelo">
						<span class="texto-naranja" style="color: orange">NikeCourt</span> 
						<span class="texto-negro">Air</span>
					</p>
					<p class="descripcion texto-negro">Lorem, ipsum dolor.</p>
					<p class="precio" style="color: orange">2,900</p>
				</div>
			</article>
			<article class="slide" style="background-image: url( 'media/producto-02.jpg' );">
				<div class="informacion-producto">
					<p class="modelo">
						<span class="texto-naranja">NikeCourt</span> 
						<span class="texto-negro">Air</span>
					</p>
					<p class="descripcion texto-negro">Lorem, ipsum dolor.</p>
					<p class="precio">2,800</p>
				</div>
			</article> -->
			<!-- <article class="slide" style="background-image: url( 'media/producto-03.jpg' );">
				<div class="informacion-producto">
					<p class="modelo">
						<span class="texto-naranja">NikeCourt</span> 
						<span class="texto-negro">Air</span>
					</p>
					<p class="descripcion texto-negro">Lorem, ipsum dolor.</p>
					<p class="precio">2,800</p>
				</div>
			</article> -->
		</section>

		<footer class="section footer">
			<h2 class="texto-naranja">{{ trans('header.SocialNets')}}</h2>
			<p class="redes-sociales">
				<a href="#" class="facebook"><i class="fab fa-facebook-square"></i></a>
				<a href="#" class="twitter"><i class="fab fa-twitter-square"></i></a>
				<a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
			</p>
		</footer>
	</main>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.js"></script>
	<script src="js/app.js"></script>

	<script type="text/javascript">
		function myFunction() {
		  var x = document.getElementById("myLinks");
		  if (x.style.display === "block") {
		    x.style.display = "none";
		  } else {
		    x.style.display = "block";
		  }
		}
	</script>
</body>
</html>