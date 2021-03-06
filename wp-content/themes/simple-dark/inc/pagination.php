<?php
/**
 * Pagination layout
 *
 * @package SimpleDark
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'simpledark_pagination' ) ) {

	function simpledark_pagination( $args = array(), $class = 'pagination mb-0' ) {

		if ( ! isset( $args['total'] ) && $GLOBALS['wp_query']->max_num_pages <= 1 ) {
			return;
		}

		$args = wp_parse_args(
			$args,
			array(
				'mid_size'           => 2,
				'prev_next'          => true,
				'prev_text'          => __( '&#10094;', 'simple-dark' ),
				'next_text'          => __( '&#10095;', 'simple-dark' ),
				'screen_reader_text' => __( 'Posts navigation', 'simple-dark' ),
				'type'               => 'array',
				'current'            => max( 1, get_query_var( 'paged' ) ),
			)
		);

		$links = paginate_links( $args );
		if ( ! $links ) {
			return;
		}

		?>

		<nav aria-labelledby="posts-nav-label">

			<h2 id="posts-nav-label" class="sr-only">
				<?php echo esc_html( $args['screen_reader_text'] ); ?>
			</h2>

			<ul class="<?php echo esc_attr( $class ); ?>">

				<?php
				foreach ( $links as $key => $link ) {
					?>
					<li class="page-item <?php echo strpos( $link, 'current' ) ? 'active' : ''; ?>">
						<?php echo str_replace( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
							'page-numbers', 
							'page-link', 
							wp_kses( $link, 
								array( 
									'a' => array(
										'class' => array(),
										'href' => array()
									), 
									'span' => array(
										'aria-current' => array(),
										'class' => array()
									)
								)
							)
						); ?>
					</li>
					<?php
				}
				?>

			</ul>

		</nav>

		<?php
	}
}
