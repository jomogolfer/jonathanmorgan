<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}


/*

    REMOVE THEM COPYRIGHT INFO FROM FOOTER

*/
add_action( 'simpledark_site_info', 'simpledark_add_site_info' );
if ( ! function_exists( 'simpledark_add_site_info' ) ) {
  /**
   * Add site info content.
   */
  function simpledark_add_site_info() {
    $site_info = sprintf(
      '%1$s &copy;%2$s <a href="%3$s" rel="home">%4$s</a> : <a href="%5$s">%6$s</a> %7$s',
      esc_html__( 'Copyright', 'simple-dark' ), date_i18n( __( 'Y' , 'simple-dark' ) ), esc_url( home_url( '/' ) ), esc_html( get_bloginfo( 'name', 'display' ) ), esc_url( home_url( '/' ) ), esc_html( get_bloginfo( 'description', 'display' ) ),
      sprintf(
        /* translators:*/
        // esc_html__( 'Theme: %1$s by %2$s.', 'simple-dark' ), 'Simple Dark', '<a href="https://www.indocreativemedia.com/free-wordpress-themes/" target="_blank">IndoCreativeMedia</a>'
      )
    );
    echo apply_filters( 'simpledark_site_info_content', // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
      wp_kses( $site_info, 
        array( 
          'a' => array(
            'class'   => array(),
            'href'    => array(),
            'rel'     => array(),
            'title'   => array(),
            'target'  => array()
          ) 
        ) 
      ) 
    );
  }
}

