<?php
return [
    'title' => __( 'Follow Us Github', 'follow-us-block' ),
    'categories' => [ 'follow-us' ],
    'blockTypes' => [ 'core/follow-us-github' ],
    'content' => '
            <!-- wp:create-block/follow-us-block -->
            <div class="wp-block-create-block-follow-us-block"><!-- wp:image {"align":"center","id":10,"sizeSlug":"full","linkDestination":"none"} -->
            <div class="wp-block-image"><figure class="aligncenter size-full"><img src="https://test.local/wp-content/uploads/2022/05/images.png" alt="" class="wp-image-10"/></figure></div>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"center","placeholder":"Add header here"} -->
            <h2 class="has-text-align-center">' . __( 'Follow Us', 'follow-us-block' ) . '</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","placeholder":"Add descriptions here"} -->
            <p class="has-text-align-center">' . __( 'Hi 👋 I\'m a software engineer working on open-source such as PHP, WordPress, MySQL, JavaScript, Angular, and ReactJS.', 'follow-us-block' ) . '</p>
            <!-- /wp:paragraph -->

            <!-- wp:button {"placeholder":"Button Label","align":"center"} -->
            <div class="wp-block-button aligncenter"><a class="wp-block-button__link" href="https://github.com/alamgircsebd" target="_blank" rel="noreferrer noopener">' . __( 'My GitHub Profile', 'follow-us-block' ) . '</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:create-block/follow-us-block -->
            ',
];