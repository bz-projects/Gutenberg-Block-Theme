<?php 

/**
 * CSS einbinden
 */

function wordpress_training_css_einbindung() {

	wp_enqueue_style(
        
        // WordPress Style name
		'wordpress-beispiel-css-name',

        // WordPress Funktion, um die style.css direkt einzubinden
		get_stylesheet_uri()
	);
}
add_action( 'wp_enqueue_scripts', 'wordpress_training_css_einbindung' );


/**
 * Theme Support aktivieren
 */

function wordpress_training_theme_supports() {

    // Gutenberg Block Styles und Full Site Editor aktivieren
    add_theme_support( 'wp-block-styles' );

    // Gutenberg Block Breiten aktivieren (normal, breit, vollflächig) 
    add_theme_support( 'align-wide' );

}
add_action( 'after_setup_theme', 'wordpress_training_theme_supports' );


/**
 * Pattern registrieren - Möglichkeit
 */


function wordpress_training_theme_pattern() {

    /**
     * Pattern Kategorie registrieren
     * 
     */

    register_block_pattern_category(
        'wpmeetup',
        array( 'label' => __( 'WordPress Meetup', 'wpmeetup' ) )
    );

    // unregister_block_pattern_category( 'wpmeetup');

    /**
     * Pattern registrieren - Möglichkeit
     * @link: https://onlinestringtools.com/escape-string
     */

    register_block_pattern(
        'wpmeetup/meetupsectionfunc',
        array(
            'title'       => __( 'WP Meetup Func Pattern', 'wpmeetup' ),
            'categories'    => array('wpmeetup'),
            'keywords'      => array('meetup'),
            'description' => _x( 'Hallo Welt','my-plugin' ),
            'content'     => "\n<!-- wp:group {\"style\":{\"spacing\":{\"padding\":{\"top\":\"3em\",\"right\":\"3em\",\"bottom\":\"3em\",\"left\":\"3em\"}},\"color\":{\"background\":\"#eecb00\"}},\"textColor\":\"background\",\"layout\":{\"type\":\"default\"}} -->\n<div class=\"wp-block-group has-background-color has-text-color has-background\" style=\"background-color:#eecb00;padding-top:3em;padding-right:3em;padding-bottom:3em;padding-left:3em\">\n   <!-- wp:columns {\"verticalAlignment\":\"top\"} -->\n   <div class=\"wp-block-columns are-vertically-aligned-top\">\n      <!-- wp:column {\"verticalAlignment\":\"top\"} -->\n      <div class=\"wp-block-column is-vertically-aligned-top\">\n         <!-- wp:heading -->\n         <h2>Lorem Ipsum</h2>\n         <!-- /wp:heading -->\n         <!-- wp:image {\"id\":24,\"width\":232,\"height\":227,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n            <figure class=\"wp-block-image size-full is-resized\">\n                <img src=\"https://www.benjamin-zekavica.de/sogotcho/2021/09/gutenpuu@3x-540x529-300x294-1.png\" alt=\"\" class=\"wp-image-24\" width=\"232\" height=\"227\"/>\n            </figure>\n         <!-- /wp:image -->\n         <!-- wp:paragraph -->\n         <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\n         <!-- /wp:paragraph -->\n      </div>\n      <!-- /wp:column -->\n      <!-- wp:column {\"verticalAlignment\":\"top\"} -->\n      <div class=\"wp-block-column is-vertically-aligned-top\">\n         <!-- wp:heading -->\n         <h2>Lorem Ipsum</h2>\n         <!-- /wp:heading -->\n         <!-- wp:paragraph -->\n         <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>\n         <!-- /wp:paragraph -->\n         <!-- wp:paragraph -->\n         <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>\n         <!-- /wp:paragraph -->\n         <!-- wp:buttons -->\n         <div class=\"wp-block-buttons\">\n            <!-- wp:button -->\n            <div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Meetup Button</a></div>\n            <!-- /wp:button -->\n         </div>\n         <!-- /wp:buttons -->\n      </div>\n      <!-- /wp:column -->\n   </div>\n   <!-- /wp:columns -->\n</div>\n<!-- /wp:group -->",
        )
    );


    // Entfernt ein Pattern
    // unregister_block_pattern( 'wpmeetup/meetupsectionfunc' );
}
add_action( 'init', 'wordpress_training_theme_pattern' );