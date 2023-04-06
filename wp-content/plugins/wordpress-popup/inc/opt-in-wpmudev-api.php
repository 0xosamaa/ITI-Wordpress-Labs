<?php // phpcs:ignore WordPress.Files.FileName.InvalidClassFileName
/**
 * Opt_In_WPMUDEV_API
 *
 * @package Hustle
 */

/**
 * Class Opt_In_WPMUDEV_API
 */
class Opt_In_WPMUDEV_API {
	const DOMAIN       = 'https://wpmudev.com';
	const REDIRECT_URI = 'https://wpmudev.com/api/hustle/v1/provider';

	/**
	 * Nonce option name
	 *
	 * @var string
	 */
	private $nonce_option_name = 'hustle_custom_nonce';

	/**
	 * Helper function to generate unique none changeable nonce.
	 *
	 * @return string The unique nonce value.
	 */
	public function get_nonce_value() {
		$nonce = get_option( $this->nonce_option_name );

		if ( empty( $nonce ) ) {
			/**
			 * Generate the nonce value only once to avoid error response
			 * when retrieving access token.
			 */
			$nonce = wp_generate_password( 40, false, false );

			update_option( $this->nonce_option_name, $nonce );
		}

		return $nonce;
	}

	/**
	 * Helper function to validate nonce value.
	 *
	 * @param string $nonce Nonce.
	 *
	 * @return bool
	 */
	public function verify_nonce( $nonce ) {
		return $nonce === $this->get_nonce_value();
	}

	/**
	 * Get redirect URL
	 *
	 * @param string $provider Provider.
	 * @param string $action Action.
	 * @param array  $params Params.
	 * @param bool   $migration Migration.
	 * @return string
	 */
	public function redirect_uri( $provider, $action, $params = array(), $migration = 0 ) {
		$params = wp_parse_args(
			$params,
			array(
				'action'   => $action,
				'provider' => $provider,
				'wpnonce'  => $this->get_nonce_value(),
				'migrate'  => true === $migration ? 1 : 0,
				'redirect' => site_url( '/' ),
			)
		);

		return add_query_arg( $params, self::REDIRECT_URI );
	}

	/**
	 * Validates request callback from WPMU DEV
	 *
	 * @param string $provider Provider.
	 * @return bool
	 */
	public function validate_callback_request( $provider ) {
		$wpnonce        = filter_input( INPUT_GET, 'wpnonce' );
		$domain         = filter_input( INPUT_GET, 'domain', FILTER_VALIDATE_URL );
		$provider_input = filter_input( INPUT_GET, 'provider' );

		return ! empty( $wpnonce ) && $this->verify_nonce( $wpnonce )
			&& self::DOMAIN === $domain && $provider === $provider_input;
	}

	/**
	 * Print error page on failed integration.
	 *
	 * @param string $message Message.
	 * @param string $retry_url Retry URL.
	 * @param string $cancel_url Cancel URL.
	 */
	public function api_die( $message, $retry_url = '', $cancel_url = '' ) {
		$html  = sprintf( '<p><img src="%s" /></p>', Opt_In::$plugin_url . 'assets/img/hustle.png' );
		$html .= sprintf( '<p>%s</p>', $message );

		if ( ! empty( $retry_url ) ) {
			$html .= sprintf( '<a href="%s" class="button button-large">%s</a>', esc_url( $retry_url ), __( 'Retry', 'hustle' ) ); }

		if ( ! empty( $cancel_url ) ) {
			$html .= sprintf( ' <a href="%s" class="button button-large">%s</a>', esc_url( $cancel_url ), __( 'Cancel', 'hustle' ) ); }

		$html = sprintf( '<div style="text-align: center;">%s</div>', $html );

		wp_die( esc_html( $html ), esc_html__( 'Hustle failure notice.', 'hustle' ), 403 );
	}
}
