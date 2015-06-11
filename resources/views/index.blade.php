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

	        <section id="quienes-somos" class="page-section main-blue bottommargin-lg">

	            <div class="container clearfix">

	                <div class="col-xs-10 col-xs-offset-1 center">
	                    <h3>ARTÍCULOS ELÁSTICOS CAMPEÓN</h3>
	                    <p>Empresa mexicana con 60 años en el mercado. Nuestro objetivo es elaborar artículos deportivos de excelente calidad.</p>
	                    <p>Tenemos una gran experiencia en la rama y nuestra mano de obra es 100% mexicana elaborada por empleados hábiles en la fabricación de artículos elásticos y acojinados para la protección de varios tipos de deportes.</p>
	                    <p>Esto ha generado una gran aceptación por parte de nuestro público consumidor, que reconoce todos los artículos como un accesorio indispensable para el entrenamiento y  práctica  deportiva, además de brindarle la protección y comodidad que requiere.</p>
	                    <p>Actualmente, comercializamos nuestros productos “CAMPEÓN”  en  tiendas  deportivas  y  de  auto-servicio,  así como en algunas farmacias y ortopedias  de  todo México, Guatemala y Costa Rica.</p>
	                </div>

	            </div>

	        </section>

	        <section class="page-section quienes">

	            <div class="container clearfix">

	                <div class="col-xs-10 col-xs-offset-1 center">
	                    <h4>El  prestigio  obtenido,  en  el  mercado  de  artículos para deportes,  es  el  resultado de brindar siempre a todos nuestros clientes la mejor calidad y atención que se merecen.</h4>
	                </div>

	            </div>

	        </section>
	        <section id="section-productos" clas="page-section productos topmargin bottommargin-lg">
	        	<div class="main container clearfix">
	        	<h3 class="center">PRODUCTOS</h3>
	        		<ul id="og-grid" class="og-grid">
	        			<li>
	        				<a href="#" data-largesrc="assets/img/productos/1.jpg" data-title="Rodillera Acojinada" data-description='<i class="fa fa-check-square-o"></i> Talla: CH, M, G <br/><i class="fa fa-check-square-o"></i> Color: Negro <br/><i class="fa fa-check-square-o"></i> Uso: Protección Deportiva'>
	        					<img src="assets/img/productos/thumbs/1.jpg" alt="img01"/>
	        				</a>
	        			</li>
	        			<li>
	        				<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="assets/img/productos/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
	        					<img src="assets/img/productos/thumbs/2.jpg" alt="img02"/>
	        				</a>
	        			</li>
	        			<li>
	        				<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="assets/img/productos/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
	        					<img src="assets/img/productos/thumbs/3.jpg" alt="img03"/>
	        				</a>
	        			</li>
	        			<li>
	        				<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="assets/img/productos/4.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
	        					<img src="assets/img/productos/thumbs/4.jpg" alt="img01"/>
	        				</a>
	        			</li>
	        			<li>
	        				<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="assets/img/productos/5.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
	        					<img src="assets/img/productos/thumbs/5.jpg" alt="img02"/>
	        				</a>
	        			</li>
	        			<li>
	        				<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="assets/img/productos/6.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
	        					<img src="assets/img/productos/thumbs/6.jpg" alt="img03"/>
	        				</a>
	        			</li>
	        			<li>
	        				<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="assets/img/productos/7.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
	        					<img src="assets/img/productos/thumbs/7.jpg" alt="img01"/>
	        				</a>
	        			</li>
	        			<li>
	        				<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="assets/img/productos/8.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
	        					<img src="assets/img/productos/thumbs/8.jpg" alt="img02"/>
	        				</a>
	        			</li>
	        			<li>
	        				<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="assets/img/productos/9.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
	        					<img src="assets/img/productos/thumbs/9.jpg" alt="img03"/>
	        				</a>
	        			</li>
	        			<li>
	        				<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="assets/img/productos/10.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
	        					<img src="assets/img/productos/thumbs/10.jpg" alt="img01"/>
	        				</a>
	        			</li>
	        			<li>
	        				<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="assets/img/productos/11.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
	        					<img src="assets/img/productos/thumbs/11.jpg" alt="img02"/>
	        				</a>
	        			</li>
	        			<li>
	        				<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="assets/img/productos/12.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
	        					<img src="assets/img/productos/thumbs/12.jpg" alt="img03"/>
	        				</a>
	        			</li>
	        			<li>
	        				<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="assets/img/productos/13.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
	        					<img src="assets/img/productos/thumbs/13.jpg" alt="img01"/>
	        				</a>
	        			</li>
	        			<li>
	        				<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="assets/img/productos/14.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
	        					<img src="assets/img/productos/thumbs/14.jpg" alt="img02"/>
	        				</a>
	        			</li>
	        			<li>
	        				<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="assets/img/productos/15.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
	        					<img src="assets/img/productos/thumbs/15.jpg" alt="img03"/>
	        				</a>
	        			</li>
	        			<li>
	        				<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="assets/img/productos/16.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
	        					<img src="assets/img/productos/thumbs/16.jpg" alt="img01"/>
	        				</a>
	        			</li>
	        		</ul>
	        	</div>
	        </section>
	    </div>

	</section><!-- #content end -->
@stop

@section('js')
	<script type="text/javascript" src="/assets/js/grid.js"></script>
@stop