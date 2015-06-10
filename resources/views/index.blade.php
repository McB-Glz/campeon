@extends('base')

@section('header')
	@parent
	
	@include('partials.header')

	@include('partials.slider')

	

@stop

@section('content')
	<!-- Content
	============================================= -->
	<section id="content">

	    <div class="content-wrap">

	        <!-- Quienes Somos
	        ============================================= -->

	        <section id="quienes-somos" class="page-section main-blue">

	            <div class="container clearfix">

	                <div class="col-xs-8 col-xs-offset-2 center">
	                    <h3>ARTÍCULOS ELÁSTICOS CAMPEÓN</h3>
	                    <p>Empresa mexicana con 60 años en el mercado. Nuestro objetivo es elaborar artículos deportivos de excelente calidad.</p>
	                    <p>Tenemos una gran experiencia en la rama y nuestra mano de obra es 100% mexicana elaborada por empleados hábiles en la fabricación de artículos elásticos y acojinados para la protección de varios tipos de deportes.</p>
	                    <p>Esto ha generado una gran aceptación por parte de nuestro público consumidor, que reconoce todos los artículos como un accesorio indispensable para el entrenamiento y  práctica  deportiva, además de brindarle la protección y comodidad que requiere.</p>
	                    <p>Actualmente, comercializamos nuestros productos “CAMPEÓN”  en  tiendas  deportivas  y  de  auto-servicio,  así como en algunas farmacias y ortopedias  de  todo México, Guatemala y Costa Rica.</p>
	                    <p>El  prestigio  obtenido,  en  el  mercado  de  artículos para deportes,  es  el  resultado de brindar siempre a todos nuestros clientes la mejor calidad y atención que se merecen.</p>
	                </div>

	            </div>

	        </section>

	        <section class="page-section topmargin-lg bottommargin-lg">

	            <div class="container clearfix">
	                <div class="col-sm-12 col-md-3 center">
	                    <div class="thumbnail">
	                        <div class="icon-wrapper">
	                            <img src="assets/img/iconos/compromiso.png" class="img-responsive img-center icons hvr-grow">
	                        </div>
	                        <h4>COMPROMISO</h4>
	                        <p>En la satisfacción de nuestros clientes internos y externos</p>
	                    </div>
	                </div>
	                <div class="col-sm-12 col-md-3 center">
	                    <div class="thumbnail">
	                        <div class="icon-wrapper">
	                            <img src="assets/img/iconos/calidad.png" class="img-responsive img-center icons hvr-grow">
	                        </div>
	                        <h4>CALIDAD</h4>
	                        <p>Utilizamos materias primas de la más alta calidad</p>
	                    </div>
	                </div>
	                <div class="col-sm-12 col-md-3 center">
	                    <div class="thumbnail">
	                        <div class="icon-wrapper">
	                            <img src="assets/img/iconos/trabajo-en-equipo.png" class="img-responsive img-center icons hvr-grow">
	                        </div>
	                        <h4>TRABAJO EN EQUIPO</h4>
	                        <p>Unión de esfuerzos en nuestro trabajo</p>
	                    </div>
	                </div>
	                <div class="col-sm-12 col-md-3 center">
	                    <div class="thumbnail">
	                        <div class="icon-wrapper">
	                            <img src="assets/img/iconos/mejoracontinua.png" class="img-responsive img-center icons hvr-grow">
	                        </div>
	                        <h4>MEJORA CONTINUA</h4>
	                        <p>Con constante capacitación de personal y utilizando maquinaria y tecnología de vanguardia</p>
	                    </div>
	                </div>
	            </div>
	            
	        </section>

	        <section class="page-section imgBG">

	            <div class="container clearfix">

	                <div class="col-xs-8 col-xs-offset-2 center">
	                    <h2>NOTESA se mantiene a la vanguardia usando maquinaria y equipo de la más
	                    alta tecnología, así como una constante capacitación a su personal.<br>
	                    Utilizamos materias primas de la más alta calidad, convirtiéndonos en líderes
	                    del mercado.</h2>
	                </div>

	            </div>

	        </section>

	        <section id="section-mercados" class="page-section topmargin-lg bottommargin-lg">

	            <div class="heading-block center">
	                <h2>Mercados</h2>
	            </div>

	            <div class="container clearfix center iconos-mercados">

	                <div class="row">
	                	<div class="col-xs-4 col-sm-3 col-sm-offset-1">
							<img src="assets/img/iconos/automotiz.png" class="img-responsive hvr-grow mini-icon">
							<h4>Automotriz</h4>
	                	</div>
	                	<div class="col-xs-4 col-sm-3 col-sm-offset-1">
							<img src="assets/img/iconos/bordado.png" class="img-responsive hvr-grow mini-icon">
							<h4>Bordado</h4>
	                	</div>
	                	<div class="col-xs-4 col-sm-3 col-sm-offset-1">
							<img src="assets/img/iconos/calzado.png" class="img-responsive hvr-grow mini-icon">
							<h4>Calzado</h4>
	                	</div>
	                </div>
	                <div class="row">
	                	<div class="col-xs-4 col-sm-3 col-sm-offset-1">
							<img src="assets/img/iconos/colchero.png" class="img-responsive hvr-grow mini-icon">
							<h4>Colchero</h4>
	                	</div>
	                	<div class="col-xs-4 col-sm-3 col-sm-offset-1">
							<img src="assets/img/iconos/colchonero.png" class="img-responsive hvr-grow mini-icon">
							<h4>Colchonero</h4>
	                	</div>
	                	<div class="col-xs-4 col-sm-3 col-sm-offset-1">
							<img src="assets/img/iconos/confeccion.png" class="img-responsive hvr-grow mini-icon">
							<h4>Confección</h4>
	                	</div>
	                </div>
	                <div class="row">
	                	<div class="col-xs-4 col-sm-3 col-sm-offset-1">
							<img src="assets/img/iconos/edredones.png" class="img-responsive hvr-grow mini-icon">
							<h4>Edredones</h4>
	                	</div>
	                	<div class="col-xs-4 col-sm-3 col-sm-offset-1">
							<img src="assets/img/iconos/filtracion.png" class="img-responsive hvr-grow mini-icon">
							<h4>Filtración</h4>
	                	</div>
	                	<div class="col-xs-4 col-sm-3 col-sm-offset-1">
							<img src="assets/img/iconos/impermiabilizacion.png" class="img-responsive hvr-grow mini-icon">
							<h4>Impermeabilizacion</h4>
	                	</div>
	                </div>
	                <div class="row">
	                	<div class="col-xs-4 col-sm-3 col-sm-offset-1">
							<img src="assets/img/iconos/imprenta.png" class="img-responsive hvr-grow mini-icon">
							<h4>Imprenta</h4>
	                	</div>
	                	<div class="col-xs-4 col-sm-3 col-sm-offset-1">
							<img src="assets/img/iconos/manualidades.png" class="img-responsive hvr-grow mini-icon">
							<h4>Manualidades</h4>
	                	</div>
	                	<div class="col-xs-4 col-sm-3 col-sm-offset-1">
							<img src="assets/img/iconos/mueblero.png" class="img-responsive hvr-grow mini-icon">
							<h4>Mueblero</h4>
	                	</div>
	                </div>
	                <div class="row">
	                	<div class="col-xs-4 col-sm-3 col-sm-offset-1">
							<img src="assets/img/iconos/quirurgico.png" class="img-responsive hvr-grow mini-icon">
							<h4>Quirúrgico</h4>
	                	</div>
	                	<div class="col-xs-4 col-sm-3 col-sm-offset-1">
							<img src="assets/img/iconos/trapos-de-limpieza.png" class="img-responsive hvr-grow mini-icon">
							<h4>Trapos de limpieza</h4>
	                	</div>
	                	<div class="col-xs-4 col-sm-3 col-sm-offset-1">
							<img src="assets/img/iconos/mineria.png" class="img-responsive hvr-grow mini-icon">
							<h4>Minería</h4>
	                	</div>
	                </div>
	                <div class="row">
	                	<div class="col-xs-4 col-sm-3 col-sm-offset-1">
							<img src="assets/img/iconos/bondeado.png" class="img-responsive hvr-grow mini-icon">
							<h4>Bondeados</h4>
	                	</div>
	                	<div class="col-xs-4 col-sm-3 col-sm-offset-1">
							<img src="assets/img/iconos/laminados-plasticos.png" class="img-responsive hvr-grow mini-icon">
							<h4>Laminados plásticos</h4>
	                	</div>
	                </div>

	            </div>

	        </section>

			<section class="page-section second-blue ">

			    <div class="container clearfix">

			        <div class="col-xs-8 col-xs-offset-2 center">
			            <h3>Líderes en el mercado mexicano en la producción
			            de telas no tejidas, así como en la exportación a
			            Estados Unidos, Canadá, Centro y Sudamérica</h3>
			        </div>

			    </div>

			</section>


	    </div>

	</section><!-- #content end -->
@stop