<section class="focus" id="focus">


<div class="container">
	<!-- SECTION HEADER -->
	<div class="section-header">







		<!-- SECTION TITLE -->



		<h2 class="dark-text"><?php _e('Cleaning Packages','zerif-lite'); ?></h2>





		<?php

		$zerif_ourfocus_subtitle = get_theme_mod('zerif_ourfocus_subtitle','Add a subtitle in Customizer, "Our focus section"');



		if(isset($zerif_ourfocus_subtitle) && $zerif_ourfocus_subtitle != ""):



			echo '<h6>'.$zerif_ourfocus_subtitle.'</h6>';



		endif;

		?>



	</div>





	<div class="row">



			<?php

			if ( is_active_sidebar( 'sidebar-ourfocus' ) ) :

				dynamic_sidebar( 'sidebar-ourfocus' );

			else:

				//the_widget( 'zerif_ourfocus','title=Box 2&text=changed text. &link=#&image_uri='.get_stylesheet_directory_uri()."/images/focus.png" );

				the_widget( 'zerif_ourfocus','title=Silver &text=Dust and Vacuum Every Room, Mop All Floors, Completely Sanitize Kitchen and Bathrooms, Make All Beds, Clean All Windowsills&link=#&image_uri='.get_stylesheet_directory_uri()."/images/focus.png" );

				the_widget( 'zerif_ourfocus','title=Gold &text=Everything in SILVER, Plus Clean All Cabinets, Light Fixtures, Switch Plates, Outlet Covers, Ceiling Fans, Doors, and Door Trim&link=#&image_uri='.get_stylesheet_directory_uri()."/images/focus.png" );

				the_widget( 'zerif_ourfocus','title=Platinum &text=Everything in GOLD, Plus Clean All Carpets, Windows, Baseboards, and Appliances&link=#&image_uri='.get_stylesheet_directory_uri()."/images/focus.png" );

			endif;

			?>



	</div>



</div> <!-- / END CONTAINER -->



</section>  <!-- / END FOCUS SECTION -->
