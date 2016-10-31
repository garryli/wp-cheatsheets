<?php
/**
 * WooCommerce filters and actions
 */


/**
 * Update currency symbols
 */
function my_update_nzd_symbol($symbol, $currency) {
	if ($currency === 'NZD') {
		return 'NZD $';
	} else {
		return $symbol;
	}
}

add_filter('woocommerce_currency_symbol', 'my_update_nzd_symbol', 10, 2);

