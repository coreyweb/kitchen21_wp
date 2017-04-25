<?php
/**
 * MailChimp library autoloader.
 *
 *
 * @version   0.1.0
 */
namespace Nimbus\MailChimp;
if ( version_compare( PHP_VERSION, "7.0", "<" ) ) {
	trigger_error( ' requires PHP version 7.0 or higher', E_USER_ERROR );
}

const MAILCHIMP_API_KEY = 'f34f9d01156d9c9219ce67e0ba066a28-us14';
const MAILCHIMP_LIST_ID = 'd075c46e3a';

require( "includes/vendor/autoload.php" );

// Require files
if ( ! class_exists( '\\Nimbus\\MailChimp\\Api' ) ) {
     require_once __DIR__ . '/includes/class-mailchimp-api.php';
}

// Bootstrap
new Api();
