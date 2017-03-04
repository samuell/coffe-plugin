<?php
/*
* Plugin Name: Banner With Text
* Description: Allows you to set a custom banner with custom text as a widget.
* Author: Jonatan Lampa
* Author URI: http://cliffhangerstudios.se
* Plugin URI: http://cliffhangerstudios.se
* Version: 1.0
*/

 

/*-----------------------------------------------------------------------------
	Construct widget
-----------------------------------------------------------------------------*/
class joppiBanner extends WP_Widget {
	function __construct() {
		$params = array(
			'description' 	=> 'Allows you to set a custom banner with custom text as a widget',
			'name' 			=> 'Custom Banner'
		);
		parent::__construct( 'joppiBanner', '', $params );
	}

	/*-------------------------------------------------------------------------
		Back End widget view
	-------------------------------------------------------------------------*/
	public function form( $instance ) {
		
		extract( $instance );

		/*----------------------------------------------------------
		// PLUGIN-SPECIFIC CSS
		// Inline to work in any theme
		----------------------------------------------------------*/
		?>

		<style>
		label > input{ 
			visibility: hidden;
			position: absolute;
			margin: 0; /* Remove radio button */
			display: flex;
			align-items: center;
			justify-content: center;
		}
		label > input + img { /* IMAGE STYLES */
			cursor:pointer;
			border:2px solid transparent;
			border: 5px solid rgba(0, 0, 0, 0);
			display: inline-block;
			width: 100%;
		}
		label > input:checked + img{
			border: 5px solid #8CB468;
		}
		label > input:hover + img{
			border: 5px solid #8CB468;
		}
		</style>
		
		<?php
		/*---------------------------------------------------------------------
			Input field for cutstom text on banner
		---------------------------------------------------------------------*/
		?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' );?>">BANNER TEXT</label>
			<input
			class="widefat"
			id="<?php echo $this->get_field_id( 'title' );?>"
			name="<?php echo $this->get_field_name( 'title' );?>"
			value="<?php if( isset( $title ) ) echo esc_attr( $title ); ?>" />
		</p>
		<?php

		/*---------------------------------------------------------------------
			Query for images in uploaded in "Media"
		---------------------------------------------------------------------*/

		?>
		<div class="image-holder">
		<?php

		$queryArgs = array(
			'post_type'      => 'attachment',
			'post_mime_type' => 'image',
			'post_status'    => 'inherit',
		);
	
		$the_query = new WP_Query( $queryArgs );
		if ( $the_query->have_posts() ) {
			foreach ( $the_query->posts as $image ) {
			?>
			<label>
				<input class="imgbtn" type="radio" name="<?php echo $this->get_field_name( 'image' );?>" value="<?php  echo $image->ID ?>" id="imgbtn <?php  echo $image->ID ?>">
					<img src=" <?php echo $images[] = wp_get_attachment_url( $image->ID );?>"/>
				</input>
			</label>
			<?php
			}
		}else{
			echo '<p>' . __( 'Sorry, no images found. Upload your own images on the media-page.', 'coffe-theme' ) . '</p>';
		}

		?>
		</div>
		<?php
	
	}
	
	/*-------------------------------------------------------------------------
		Front End widget view
	-------------------------------------------------------------------------*/
	
	public function widget( $args, $instance ) {

		// Inline CSS to give PLUGIN-SPECIFIC CSS to work in any theme
		// Can be overriden in functions.php when registering sidebar
		$args = array(
		'id'			=> 'my-$i',
        'before_widget' => '<div
							class="widget-container"
							id="widget-container"
							">',
        'after_widget'  => '</div><div class="randnum">',
        'before_title'  => '<h1
							class="banner-title"
							style="
							font-family:Raleway, Sans-Serif;
							font-weight:100;							
							color:white;
							position:absolute;
							text-shadow: 0 0 8px #000;
							text-align: center;
							width: 100%;
							">',
        'after_title'   => '</h1>',
		);
		
		// Extract object args and values into variables
		extract( $args );
		extract( $instance );

		// Getting title
		$title = apply_filters( 'widget_title', $title );

		// Getting image url based on image id
		$image = apply_filters( 'widget_decription', $image );
		$image = wp_get_attachment_url( $image );

		echo $before_widget;
			echo $before_title . $title . $after_title;
			echo '<div>
					<img class="banner-bg"
					src="' . $image .'"
					style="
					width: 100%;
					display: inline;">
				 </div>';
		echo $after_widget;
	}
}
/*-------------------------------------------------------------------------
	Register widget
-------------------------------------------------------------------------*/
add_action( 'widgets_init', 'register_joppi_banner' );

function register_joppi_banner() {
	register_widget('joppiBanner');	
}

?>

