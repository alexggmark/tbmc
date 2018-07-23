<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tbmc_a
 */

get_header();
?>

	<div class="body-wrapper__container-inner body-wrapper__container-inner--inverted">

		<?php

			$pages = get_pages();
			foreach ($pages as $page_data) {
			    $content = apply_filters('the_content', $page_data->post_content); 
			    $title = $page_data->post_title; 
			    echo $content; 
			}

		?>

	</div>

<?php

get_footer();
