<?php
function ejemplo(){
	ob_start();
	?>
	<?php
	wp_reset_postdata();
	return ob_get_clean();
}
add_shortcode('ejemplo','ejemplo');
