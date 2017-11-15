<?php
	/**
	* The main template file.
	*
	* @package ktdral
	* @since ktdral 1.0
	*/

	wp_enqueue_style( 'home_css', getTema()."/css/home.css", array(), "1.0.0" );

	get_header();
 		
		$HTML = "
			<header>
				<div class='header_interno'>

					<h1 class='header_titulo'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h1>
					<h2 class='header_sub_titulo'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h2>

				</div>

		  	</header>

		  	<section id='productos' class='productos'>
		  		<div>

		  			<div class='titulos'>Nuestros Productos <a href='#'>M&aacute;s Informaci&oacute;n</a></div>

			  		<article>
			  			<div>
				  			<div class='contenedor_img' style='background-image: url(".getTema()."/img/productos/1.jpg);'>
				  				
				  			</div>
				  			<div class='contenedor_detalle'>
				  				<div>Pastelitos</div>
				  			</div>
			  			</div>
			  		</article>

			  		<article>
			  			<div>
				  			<div class='contenedor_img' style='background-image: url(".getTema()."/img/productos/2.jpg);'>
				  				
				  			</div>
				  			<div class='contenedor_detalle'>
				  				<div>Masas</div>
				  			</div>
			  			</div>
			  		</article>

			  		<article>
			  			<div>
				  			<div class='contenedor_img' style='background-image: url(".getTema()."/img/productos/3.jpg);'>
				  				
				  			</div>
				  			<div class='contenedor_detalle'>
				  				<div>Tequeños</div>
				  			</div>
			  			</div>
			  		</article>

		  		</div>

		  	</section>

		  	<section class='somos'>
		  		<div>

		  			<div class='titulos'>¿Qui&eacute;nes Somos? <a style='cursor: default;'>&nbsp;</a></div>

			  		<article>
			  			<div>
			  				<h2>Misi&oacute;n</h2>
				  		</div>
				  		<p>
				  			Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
				  		</p>

			  		</article>

			  		<article>
			  			<div>
			  				<h2>Visi&oacute;n</h2>
				  		</div>
				  		<p>
				  			Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
				  		</p>

			  		</article>

			  		<article>
			  			<div>
			  				<h2>Valores</h2>
				  		</div>
				  		<p>
				  			Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
				  		</p>

			  		</article>

		  		</div>
		  	</section>

		  	<section class='gente'>
		  		<div>

		  			<div class='titulos'>Nuestras Gente <a href='#'>Ver M&aacute;s</a></div>

			  		<article>
			  			<div>
				  			<div class='avatar' style='background-image: url(".getTema()."/img/avatares/1.png);'></div>
				  			<div>CEO</div>
				  			<div class='nombre_gente'>Nombre Aqu&iacute;</div>
				  		</div>
			  		</article>

			  		<article>
			  			<div>
				  			<div class='avatar' style='background-image: url(".getTema()."/img/avatares/2.png);'></div>
				  			<div>Director</div>
				  			<div class='nombre_gente'>Nombre Aqu&iacute;</div>
				  		</div>
			  		</article>

			  		<article>
			  			<div>
				  			<div class='avatar' style='background-image: url(".getTema()."/img/avatares/3.png);'></div>
				  			<div>Coordinador</div>
				  			<div class='nombre_gente'>Nombre Aqu&iacute;</div>
				  		</div>
			  		</article>

		  		</div>
		  	</section>

		  	<section class='redes'>
		  		<div>

		  			<div class='titulos'>Nuestras Redes <a style='cursor: default;'>&nbsp;</a></div>

			  		<article>
			  			<div>
				  			<i class='fa fa-facebook' aria-hidden='true'></i>
				  			<div>@KTDRA</div>
				  		</div>
			  		</article>

			  		<article>
			  			<div>
				  			<i class='fa fa-twitter' aria-hidden='true'></i>
				  			<div>@KTDRA</div>
				  		</div>
			  		</article>

			  		<article>
			  			<div>
				  			<i class='fa fa-instagram' aria-hidden='true'></i>
				  			<div>@KTDRA</div>
				  		</div>
			  		</article>

		  		</div>
		  	</section>

		  	<section id='contactanos' class='contactano'>
		  		<div>

		  			<div class='titulos'>Cont&aacute;ctanos <a style='cursor: default;'>&nbsp;</a></div>

		  			<form id='contactanos'>

				  		<article>
				  			<div>
				  				<h2>Direcci&oacute;n Administrativa</h2>
					  		</div>
					  		<p>
					  			Calle Paragua con calle Naiguata, C.C. Naiguata, Piso 1, El Marques, Caracas.<br>
					  			<strong>Tel&eacute;fonos: </strong> Master +58 (212) 237.00.80 / Fax +58 (212) 232.00.12
					  		</p>

				  		</article>

				  		<article>
				  			<div>
				  				<h2>Direcci&oacute;n Planta</h2>
					  		</div>
					  		<p>
					  			Avenida Orinoco Galpon B1-B2, Zona Industrial Terrinca. Guatire 1221 - Edo Miranda.<br>
					  			<strong>Tel&eacute;fonos: </strong> Master +58 (212) 344.74.89 / Fax +58 (212) 341.28.56
					  		</p>

				  		</article>
				  		
				  		<article>

					  		<div>
					  			<select>
					  				<option value=''>Dirigido a:</option>
									<option value='1'>Atención al cliente</option>
									<option value='6'>Calidad</option>
									<option value='4'>Compras</option>
									<option value='12'>Franquicias</option>
									<option value='11'>Gerencia de Ventas</option>
									<option value='14'>Mercadeo</option>
									<option value='9'>Presidencia</option>
									<option value='5'>Recursos Humanos</option>
									<option value='10'>Supervisor de Ventas</option>
									<option value='3'>Ventas</option>
									<option value='8'>Webmaster</option>
					  			</select>
					  			<input type='text' placeholder='Nombre:' />
					  			<input type='text' placeholder='E-mail:' />
					  			<input type='text' placeholder='Tel&eacute;fono:' />
					  			<input type='text' placeholder='Asunto:' />
					  		</div>

				  		</article>

				  		<article>

					  		<div>
					  			<textarea placeholder='Mensaje'></textarea>
					  		</div>

				  		</article>

				  		<div class='botones_container'>
				  			<input type='submit' value='Enviar' />
				  		</div>

				  	</form>

		  		</div>
		  	</section>
		";

		comprimir($HTML);

 	get_footer(); 
 ?>