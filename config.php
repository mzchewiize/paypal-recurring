<?php
  if (session_status() == PHP_SESSION_NONE) { session_start(); } //PHP >= 5.4.0

	define('PPL_MODE', 'sandbox');

	if(PPL_MODE=='sandbox'){
		/*SANDBOX ACCOUNT USR PASS SIGNATURE*/
		define('PPL_API_USER', 'xxxxxxxxx');
		define('PPL_API_PASSWORD', 'xxxxxxxxx');
		define('PPL_API_SIGNATURE', 'xxxxxxxxx');
	}
	else{
		
		define('PPL_API_USER', 'somepaypal_api.yahoo.co.uk');
		define('PPL_API_PASSWORD', '123456789');
		define('PPL_API_SIGNATURE', 'opupouopupo987kkkhkixlksjewNyJ2pEq.Gufar');
	}
	
	define('PPL_LANG', 'EN');
	define('PPL_LOGO_IMG', 'http://www.sanwebe.com/wp-content/themes/sanwebe/img/logo.png');
	define('PPL_RETURN_URL', 'hxxxxxxxxx/paypal/process.php');
	define('PPL_CANCEL_URL', 'hxxxxxxxxx/paypal/cancel_url.php');
	define('PPL_CURRENCY_CODE', 'USD');
