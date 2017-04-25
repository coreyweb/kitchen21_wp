<?php

namespace Nimbus\MailChimp;

if ( ! class_exists( 'Base_API' ) ) {
	require_once 'class-base-api.php';
}

use \DrewM\MailChimp\MailChimp;

class Api extends \Base_API {

	/**
	 * Possible action endpoints "/ajax/$action" any $action that doesn't exist in the array will return an error
	 * @var array
	 */
	protected static $front_endpoints = [ 'signup' ];

	/**
	 * Possible admin only endpoints, a user without permissions will get an error trying to request this
	 * @var array
	 */
	protected static $admin_endpoints = [];

	function signup() {

		$MailChimp = new MailChimp( \Nimbus\MailChimp\MAILCHIMP_API_KEY );

		if ( true || 'POST' === $this->request_type() ) {
			$email_address = sanitize_text_field( $_POST['email'] );
			$result = $MailChimp->post('lists/'.\Nimbus\MailChimp\MAILCHIMP_LIST_ID.'/members', [
                'email_address' => $email_address,
                'status'        => 'subscribed',
            ]);

		}

		return $result;
	}

}
