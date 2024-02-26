var g_interval;

const seccionesPagina = new fullpage('#fullpage', {
	// ──────────────────────────────────────────────────
	//   :::::: Opciones Basicas
	// ──────────────────────────────────────────────────
	autoScrolling: true, // Se activa el scroll.
	fitToSection: false, // Acomoda el scroll automaticamente para que la seccion se muestre en pantalla.
	fitToSectionDelay: 300, // Delay antes de acomodar la seccion automaticamente.
	easing: 'easeInOutCubic', // Funcion de tiempo de la animacion.
	scrollingSpeed: 700, // Velocidad del scroll. Valores: en milisegundos.
	css3: true, // Si usara CSS3 o javascript.
	easingcss3: 'ease-out', // Curva de velocidad del efecto.
	loopBottom: false,
	// ──────────────────────────────────────────────────
	//   :::::: Barra de navegación
	// ──────────────────────────────────────────────────
	navigation: false, // Muesta la barra de navegación.
	menu: '#menu', // Menu de navegación.
	anchors: ['inicio', 'productos', 'contacto'], // Anclas, las usamos para identificar cada seccion y poder acceder a ellas con el menu.
	navigationTooltips: ['Inicio', 'Productos', 'Contacto'], // Tooltips que mostrara por cada boton.
	showActiveTooltip: false, // Mostrar tooltip activa.
	// ──────────────────────────────────────────────────
	//   :::::: Secciones
	// ──────────────────────────────────────────────────
	sectionsColor : ['#000', '#c2c2c2', '#000'], // Color de fondo de cada seccion.
	verticalCentered: true, // Si alineara de forma vertical los contenidos de cada seccion.
	// ──────────────────────────────────────────────────
	//   :::::: Slides
	// ──────────────────────────────────────────────────
	controlArrows: true, // Flechas del slide
	slidesNavigation: false, // Indicadores del slide
	afterLoad: function(origin, destination, direction){
	
		//para poner los slides cambien de forma automatica
		clearInterval(g_interval);
    	const lapse = 8000;   // 1000 milliseconds lapse
    	if(destination.item.querySelectorAll('.fp-slides').length){
	      g_interval = setInterval(function () {
	        fullpage_api.moveSlideRight();
	        // fullpage_api.moveSlideLeft();
	      }, lapse);
	    }
	    ////***********************************************

		if(destination.anchor == 'contacto'){
			document.querySelector('.footer h2').style.opacity = 1;
		}
	}
});


const contePadre = document.querySelector('body');
const puntero = document.querySelector('.puntero');
const ladoPuntero = 25;
puntero.style.width = ladoPuntero + "px";
puntero.style.height = ladoPuntero + "px";
puntero.style.borderRadius = ladoPuntero + "px";



contePadre.addEventListener('mousemove', (e) => {
	console.log(e.clientX, e.clientY);
	puntero.style.top = (e.clientY  - (ladoPuntero/2) )+"px";
	puntero.style.left = (e.clientX - (ladoPuntero/2) )+"px";
});