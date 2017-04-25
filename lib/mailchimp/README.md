MailChimp
===========

MailChimp API interface

Installation: Add this directory to a lib directory in your theme, and add a
require script in functions.php

Update mailchimp.php to include the api keys and mailchimp list id.

`const MAILCHIMP_API_KEY = '<your api key>';
const MAILCHIMP_LIST_ID = '<your mailchimp list id>';`

`require_once( get_template_directory() . '/lib/mailchimp/mailchimp.php' );`

Visit "Settings > Permalinks" in the WordPress admin to flush the rewrite rules.
( All you need to do is visit the page. )

Add the template part in your theme templates

`get_template_part( "/lib/mailchimp/includes/templates/part-signup-form", "and-modal" );`
