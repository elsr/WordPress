add_filter( 'the_title', 'kld_title_order_received', 10, 2 );
function kld_title_order_received( $title, $id ) {
	if ( is_order_received_page() && get_the_ID() === $id ) {
		$order_key = apply_filters( 'woocommerce_thankyou_order_key', empty( $_GET['key'] ) ? '' : wc_clean( $_GET['key'] ) );
		$order_id = isset( $_GET ) ? wc_get_order_id_by_order_key( $_GET ) : '';
		if ( $order_id > 0 ) {
			$order = wc_get_order( $order_id );
			if ( ! $order || $order->get_order_key() !== $order_key ) {
				$order = false;
			}
		}
		if ( isset ( $order ) ) {
			$title = sprintf( "Ваше&nbsp;Величество, %1s&nbsp;%2s!", esc_html( $order->get_billing_first_name() ),esc_html( $order->get_billing_last_name() ) );
		}
	}
	return $title;
}
