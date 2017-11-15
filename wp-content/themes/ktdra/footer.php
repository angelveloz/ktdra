<?php

    wp_enqueue_script('jquery', getTema()."/js/jquery.min.js", array(), '1.0.0');
    wp_enqueue_script('menu', getTema()."/js/menu.js", array("jquery"), '1.0.0');
	
	wp_footer();

	$HTML = '
				<footer>

					<section class="footer">
				  		<div class="aling-left">
					  		<div>Propiedad de Alimentos Mulcoven, C.A.</div>
   							<div>RIF: J-30699820-9</div>
				  		</div>
				  		<div class="aling-right">
   							<div>Emporio Creativo C. A.</div>
   							<div>Desarrollador: &Aacute;ngel Veloz</div>
				  		</div>
				  	</section>

				</footer>

			</body>
		</html>
	';	

	comprimir($HTML);
?>