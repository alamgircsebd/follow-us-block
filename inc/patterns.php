<?php
/**
 * Register follow us patterns
 * 
 * @since 1.0.0
 * 
 * @return void
 */
function follow_us_register_block_patterns() {
    $patterns_categories = apply_filters(
        'follow-us-patterns-categories',
        [ 
            'follow-us' => [ 'label' => __( 'Follow Us', 'follow-us-block' ) ]
        ]
    );
    $patterns = apply_filters( 'follow-us-patterns', [ 'follow-us-github' ] );

    // patterns categories registering.
    foreach ( $patterns_categories as $pattern => $pattern_properties ) {
        if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $pattern ) ) {
            register_block_pattern_category( $pattern, $pattern_properties );
        }
    }

    // patterns registering.
    foreach ( $patterns as $pattern ) {
        $pattern_path = FOLLOW_US_DIR . '/inc/patterns/' . $pattern . '.php';

        register_block_pattern(
            $pattern,
            require $pattern_path
        );
    }
}
add_action( 'init', 'follow_us_register_block_patterns' );

