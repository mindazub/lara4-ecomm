<?php

return array(

	


	'driver' => 'eloquent',


	'model' => 'Account',

	


	'table' => 'account',



	'reminder' => array(

		'email' => 'email/request',

		'table' => 'token',

		'expire' => 60,

	),

);
