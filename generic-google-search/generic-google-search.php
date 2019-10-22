<?php
/*
Plugin Name: Generic Google Search
Description: Adds a shortcode [generic_google_search] to insert a generic google search form - (Not a Google Custom Search)
Version:     0.1.0
Author:      Ron Holt
Author URI:  http://ronholt.info/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function ggs_shortcode( $atts ) {
    $a = shortcode_atts( array(
        'id'                => 'generic-google-search',
        'class'             => 'generic-google-search',
        'target'            => '_blank',
        'size'              => '30',
        'maxlength'         => '255',
        'text_input_value'  => '',
        'placeholder'       => 'Search Terms...',
        'button_value'      => 'Google Search',
    ), $atts );

    $output = '
        <form id="' . $a['id'] . '" class="' . $a['class'] . '" ' . 
                'method="get" action="http://www.google.com/search" target="' . $a['target'] . '">
            <input type="text" size="' . $a['size'] . '" maxlength="' . $a['maxlength'] . 
                    '" value="' . $a['text_input_value'] . '" placeholder="' . $a['placeholder'] . '">
            <input type="submit" value="' . $a['button_value'] . '">
        </form>
    ';

    return $output;
}
add_shortcode( 'generic_google_search', 'ggs_shortcode' );
?>
