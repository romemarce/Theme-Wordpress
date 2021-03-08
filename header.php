<!DOCTYPE html>
<!-- PAG HEADER -->
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class();?>>
    <header>
		<nav>
			<?php
				wp_nav_menu(array(
					'theme_location'=> 'menu_principal',
					'menu_class' => 'mi-menu',
				));
			?>
		</nav>
    </header>
