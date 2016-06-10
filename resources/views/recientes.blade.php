@extends ('layouts.layout')

@section ('content')
	
	<div class="header-t">
		<div class="header-button">
			<ul class="header-list">
				<li class="pdf" style="background-color: gray;">PDF</li>
				<li class="papers">PAPERS</li>
				<li class="images">IMÁGENES</li>
				<li class="links">ENLACES</li>
			</ul>
		</div>
	</div>
	
	<div class="slider">
		<div class="slider-pdf">
			<!-- <h2 id="title" style="color: #4981F6;">GRATUITAS</h2> -->
			<div class="slider-free-nocommerce">
				<div class="slide-images">
					<p>Sundance</p>
					<a href="https://es.wordpress.org/themes/sundance/"><img src="rsc/sundance.png"></a>
				</div>
				<div class="slide-images">
					<p>ResponsiveBoat</p>
					<a href="https://es.wordpress.org/themes/responsiveboat/"><img src="rsc/boat.png"></a>
				</div>
				<div class="slide-images">
					<p>Twenty Eleven</p>
					<a href="https://es.wordpress.org/themes/twentyeleven/"><img src="rsc/eleven.png"></a>
				</div>
				<div class="slide-images">
					<p>Zerif Lite</p>
					<a href="https://es.wordpress.org/themes/zerif-lite/"><img src="rsc/zerif.png"></a>
				</div>
				<div class="slide-images">
					<p>Storefront</p>
					<a href="https://es.wordpress.org/themes/storefront/"><img src="rsc/storefront.png"></a>
				</div>
				<div class="slide-images">
					<p>Llorix One Lite</p>
					<a href="https://es.wordpress.org/themes/llorix-one-lite/"><img src="rsc/llorix.png"></a>
				</div>
				<div class="slide-images">
					<p>Oblique</p>
					<a href="https://es.wordpress.org/themes/oblique/"><img src="rsc/oblique.png"></a>
				</div>
				<div class="slide-images">
					<p>Amadeus</p>
					<a href="https://es.wordpress.org/themes/amadeus/"><img src="rsc/amadeus.png"></a>
				</div>
				<div class="slide-images">
					<p>Flat</p>
					<a href="https://es.wordpress.org/themes/flat/"><img src="rsc/flat.png"></a>
				</div>
				<div class="slide-images">
					<p>OnePirate</p>
					<a href="https://es.wordpress.org/themes/onepirate/"><img src="rsc/onepirate.png"></a>
				</div>
				<div class="slide-images">
					<p>Parallax One</p>
					<a href="http://themeisle.com/demo/?theme=Parallax%20One"><img src="rsc/parallax.jpg"></a>
				</div>
				<div class="slide-images" id="ultimo">
					<p>ZBlackbeard</p>
					<a href="https://es.wordpress.org/themes/zblackbeard/"><img src="rsc/zblackbeard.png"></a>
				</div>
			</div>

			
		</div>

		<div class="slider-papers" style="display: none;">
			<!-- <h2 id="title" style="color: #4981F6;">CON LICENCIA</h2> -->
			<div class="slider-pay-commerce">
				<!-- <h3 id="subtitle" style="color: #3adb76;">E-COMMERCE</h3> -->
				<div class="slide-images">
					<p>Stationery</p>
					<a href="http://demo.woothemes.com/?name=stationery"><img src="rsc/stationery.jpg"></a>
				</div>
				<div class="slide-images">
					<p>Petshop</p>
					<a href="http://demo.woothemes.com/?name=petshop"><img src="rsc/petshop.png"></a>
				</div>
				<div class="slide-images">
					<p>Arcade</p>
					<a href="http://demo.woothemes.com/?name=arcade"><img src="rsc/arcade.png"></a>
				</div>
				<div class="slide-images">
					<p>Bookshop</p>
					<a href="http://demo.woothemes.com/?name=bookshop"><img src="rsc/featured.png"></a>
				</div>
				<div class="slide-images">
					<p>Homestore</p>
					<a href="http://demo.woothemes.com/?name=homestore"><img src="rsc/homestore.jpg"></a>
				</div>
				<div class="slide-images">
					<p>Outlet</p>
					<a href="http://demo.woothemes.com/?name=outlet"><img src="rsc/outlet.jpg"></a>
				</div>
				<div class="slide-images">
					<p>ProShop</p>
					<a href="http://demo.woothemes.com/?name=proshop"><img src="rsc/proshop.jpg"></a>
				</div>
				<div class="slide-images">
					<p>Galleria</p>
					<a href="http://demo.woothemes.com/?name=galleria"><img src="rsc/galleria.jpg"></a>
				</div>
				<div class="slide-images" id="ultimo">
					<p>Canvas</p>
					<a href="http://demo.woothemes.com/?name=canvas"><img src="rsc/canvas.png"></a>
				</div>
			</div>
		</div>

		<div class="slider-images" style="display: none;">
			<div class="slider-free-commerce">
				<!-- <h3 id="subtitle" style="color: #3adb76;">E-COMMERCE</h3> -->
				<div class="slide-images">
					<p>Deli</p>
					<a href="http://demo.woothemes.com/?name=deli"><img src="rsc/deli.jpg"></a>
				</div>
				<div class="slide-images">
					<p>MyStile</p>
					<a href="http://demo.woothemes.com/?name=mystile"><img src="rsc/mystile1.jpg"></a>
				</div>
				<div class="slide-images" id="ultimo">
					<p>Wootique</p>
					<a href="http://demo.woothemes.com/?name=wootique"><img src="rsc/wootique.png"></a>
				</div>
				<!-- <div class="slide-images">
					<p>Artificer</p>
					<a href="http://demo.woothemes.com/?name=artificer"><img src="rsc/artificer.png"></a>
				</div> -->
			</div>
		</div>
		<div class="slider-links" style="display: none;">
			<div class="slider-pay-commerce">
				<div class="slide-images">
					<p>Superstore</p>
					<a href="http://demo.woothemes.com/?name=superstore"><img src="rsc/1-home.jpg"></a>
				</div>
				<div class="slide-images">
					<p>The One Pager</p>
					<a href="http://demo.woothemes.com/?name=theonepager"><img src="rsc/theonepager.jpg"></a>
				</div>
				<div class="slide-images">
					<p>Hustle</p>
					<a href="http://demo.woothemes.com/?name=hustle"><img src="rsc/hustle.jpg"></a>
				</div>
				<div class="slide-images" id="ultimo">
					<p>Peddlar</p>
					<a href="http://demo.woothemes.com/?name=peddlar"><img src="rsc/peddlar-home1.jpg"></a>
				</div>
			</div>
		</div>
	</div>

@stop