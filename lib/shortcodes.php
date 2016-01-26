<?php
/**
 * Custom shortcodes
 */

// Buttons
function blujay_button($atts) {
    $a = shortcode_atts(array(
        'size' => '',
        'icon' => '',
        'text' => 'Button Text',
        'link' => 'http://www.meetalex.com',
    ), $atts);

    if ($a["icon"]) {
        $button_icon = '<i class="fa '.$a["icon"].' "></i>';
    }

    return '<a href="'.esc_attr($a["link"]).'" class="button '.esc_attr($a["size"]).'">'.esc_attr($a["text"]).' '.$button_icon.'</a>';
}
add_shortcode( 'button', 'blujay_button' );

// Columns
function blujay_columns( $atts, $content = null ) {
    return '<div class="columns">' . do_shortcode($content) . '</div>';
}
add_shortcode('columns', 'blujay_columns');

// 1/2 Columns
function blujay_column_one_half( $atts, $content = null ) {
    return '<div class="column one-half">' . do_shortcode($content) . '</div>';
}
add_shortcode('column_one_half', 'blujay_column_one_half');

// 1/4 Columns
function blujay_column_one_fourth( $atts, $content = null ) {
    return '<div class="column one-fourth">' . do_shortcode($content) . '</div>';
}
add_shortcode('column_one_fourth', 'blujay_column_one_fourth');

// 1/3 Columns
function blujay_column_one_third( $atts, $content = null ) {
    return '<div class="column one-third">' . do_shortcode($content) . '</div>';
}
add_shortcode('column_one_third', 'blujay_column_one_third');

// 2/3 Columns
function blujay_column_two_thirds( $atts, $content = null ) {
    return '<div class="column two-thirds">' . do_shortcode($content) . '</div>';
}
add_shortcode('column_two_thirds', 'blujay_column_two_thirds');

?>
