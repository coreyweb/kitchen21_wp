/*! MailChimp - v0.1.0
 * Copyright (c) 2017; * Licensed MIT */
/*eslint strict: ["error", "function"]*/

( function ( window, $ ) {
	'use strict';

	var signupForms = document.querySelectorAll( 'form[data-action="email-signup"]' );

	var emailSignup = function ( e ) {
		var $form = e.currentTarget,
			$emailInput = $form.querySelector( 'input[type="email"]' ),
			$check = $form.querySelector( 'input[name="b_6ddb37f55f770bce2b8d6e9d9_d075c46e3a"]' ),
			emailAddress = $emailInput.value;

		e.preventDefault();

		if ( $check.value ) {
			return false;
		}

		$.post( '/api/signup', {
				'email': emailAddress,
				'security': ''
			},
			function ( res ) {
				if ( res.data.status === 'subscribed' ) {
					return handleSubscribed( res, $form, $emailInput );
				}
				handleError( res, $form, $emailInput );
			},
			'json'
		);

	};

	var handleSubscribed = function ( res, form ) {
		var formContainer = form.parentNode,
			wrapper = formContainer.parentNode,
			successContainer = wrapper.querySelector( '.success-message' );

		formContainer.classList.add( 'hide' );
		successContainer.classList.remove( 'hide' );

	};

	var handleError = function ( res, form, emailInput ) {
		var $message = form.querySelector( '[data-source="message"]' ),
			msgText = 'Oops. There was a problem. Please try again.';
		if ( res.data.title === 'Member Exists' ) {
			msgText = 'This email is already on our list.';
		} else if ( res.data.title === 'Invalid Resource' ) {
			if ( res.data.detail.search( 'Oops. Please enter a valid email.' ) > -1 ) {
				msgText = emailInput.value + ' Oops. Please enter a valid email.';
			} else if ( res.data.detail.search( 'Oops. Please enter a valid email.' ) > -1 ) {
				msgText = 'Oops. Please enter a valid email.)';
			}
		}
		emailInput.classList.add( 'error' );
		$message.innerText = msgText;
		$message.classList.add( 'alert-warning' );
		$message.classList.remove( 'hide' );
	};

	signupForms.forEach( function ( form ) {
		form.addEventListener( 'submit', emailSignup );
	} );

} )( this, jQuery );
