<?php

$config['SignMeUp'] = array(
	'from' => 'Clipmunk.com <no-reply@clipmunk.com>',
	'layout' => 'default',
	'welcome_subject' => 'Welcome to Clipmunk.com %username% using email address %email%',
	'sendAs' => 'text',
	'activation_template' => 'activate',
	'welcome_template' => 'welcome',
	'password_reset_field' => 'password_reset',
	'password_reset_template' => 'forgotten_password',
	'password_reset_subject' => 'Password reset from Clipmunk.com',
	'new_password_template' => 'new_password',
	'new_password_subject' => 'Your new password from Clipmunk.com',
	'xMailer' => 'Clipmunk.com Email',
);