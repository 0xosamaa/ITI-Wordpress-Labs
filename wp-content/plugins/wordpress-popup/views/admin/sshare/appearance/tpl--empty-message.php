<?php
/**
 * Message for when no display types were selected.
 *
 * @package Hustle
 * @since 4.0.0
 */

?>
<div id="hustle-appearance-empty-message" class="sui-message"<?php echo ! $is_empty ? ' style="display: none;"' : ''; ?>>

	<?php
	if ( ! $this->is_branding_hidden ) :
		$image_path        = self::$plugin_url . 'assets/images/hustle-empty-message.png';
		$image_retina_path = self::$plugin_url . 'assets/images/hustle-empty-message@2x.png';
		echo $this->render_image_markup( $image_path, $image_retina_path, 'sui-image' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	else :
		echo $this->render_image_markup( $this->branding_image, '', 'sui-image', 172, 192 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	endif;
	?>

	<div class="sui-message-content">

		<h2><?php esc_html_e( 'No Display Option Enabled', 'hustle' ); ?></h2>

		<p>
			<?php
			printf(
				/* translators: 1: opening a tag, 2: closing a tag */
				esc_html__( 'Whoops, you need to choose where you want the social widget to show up first. Jump back to %1$sDisplay Options%2$s and enable a module.', 'hustle' ),
				'<a href="#" data-tab="display" class="hustle-go-to-tab">',
				'</a>'
			);
			?>
		</p>

	</div>

</div>
