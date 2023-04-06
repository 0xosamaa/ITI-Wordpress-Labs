<?php
/**
 * Welcome dialog for fresh installs.
 *
 * @package Hustle
 * @since 4.0.0
 */

$banner_img_1x = self::$plugin_url . 'assets/images/release-highlight-header.png';
$banner_img_2x = self::$plugin_url . 'assets/images/release-highlight-header@2x.png';
$user          = wp_get_current_user();
$username      = ! empty( $user->user_firstname ) ? $user->user_firstname : $user->user_login;
$url           = 'https://wpmudev.com/docs/wpmu-dev-plugins/hustle/#integrations';
?>

<div class="sui-modal sui-modal-md">

	<div
		role="dialog"
		id="hustle-dialog--release-highlight"
		class="sui-modal-content"
		aria-modal="true"
		aria-labelledby="hustle-dialog--release-highlight-title"
		aria-describedby="hustle-dialog--release-highlight-description"
		data-name="<?php echo esc_attr( Hustle_Dashboard_Admin::HIGHLIGHT_MODAL_NAME ); ?>"
	>

		<div class="sui-box" style="margin-bottom: 10px;">

			<div class="sui-box-header sui-flatten sui-content-center sui-spacing-right--30  sui-spacing-left--30">

				<button class="sui-button-icon sui-button-float--right hustle-modal-close" style="z-index: 2;" data-modal-close>
					<span class="sui-icon-close sui-md" aria-hidden="true"></span>
					<span class="sui-screen-reader-text"><?php esc_html_e( 'Close this dialog window', 'hustle' ); ?></span>
				</button>

				<figure role="banner" class="sui-box-banner" aria-hidden="true">
				<?php echo $this->render_image_markup( $banner_img_1x, $banner_img_2x, 'sui-image sui-image-center' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</figure>

				<h3 id="hustle-dialog--release-highlight-title" class="sui-box-title sui-lg"><?php esc_html_e( 'New! Unsubscribe from third-party email lists', 'hustle' ); ?></h3>

				<p id="hustle-dialog--release-highlight-description" class="sui-description">
					<?php /* translators: url */ ?>
					<?php printf( esc_html__( 'In the newest Hustle 4.6.0 release, your connected third-party email lists will automatically be updated when a user unsubscribes using Hustle forms. See the list of supported third-party apps in our %1$sdocumentation%2$s.', 'hustle' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>' ); ?>
				</p>

				<ul style="margin: 0 0 0 20px; list-style: disc;text-align: left;">

					<li>
						<h6 style="margin-bottom: 0;"><?php esc_html_e( 'Right-to-Left support', 'hustle' ); ?></h6>
						<p class="sui-description" style="margin-left: -20px;margin-bottom: 30px;"><?php esc_html_e( 'We\'ve also added support for RTL languages. So, whether your site is in Arabic, Hebrew, or any other RTL language, your modules will look spot on!', 'hustle' ); ?></p>
					</li>

					<li>
						<h6 style="margin-bottom: 0;"><?php esc_html_e( 'Two call-to-action buttons', 'hustle' ); ?></h6>
						<p class="sui-description" style="margin-left: -20px;"><?php esc_html_e( 'Choose whether you want to include one or two call-to-action buttons, or none at all.', 'hustle' ); ?></p>
					</li>

				</ul>


			</div>

			<div class="sui-box-footer sui-flatten sui-content-center sui-spacing-bottom--50">

				<button id="hustle-release-highlight-action-button" class="sui-button" data-modal-close>
					<?php esc_html_e( 'Got It', 'hustle' ); ?>
				</button>

			</div>

		</div>

		<button class="sui-modal-skip" data-modal-close><?php esc_html_e( "I'll check this later", 'hustle' ); ?></button>

	</div>

</div>
