<?php
$cbyconf = array(
	'doctrine' => array(
		'devmode' => true,
		'connectionOptions' => array(
			'driver'   => 'pdo_mysql',
			'user'     => DB_USER,     // from wp-config.php
			'password' => DB_PASSWORD, // from wp-config.php
			'host'     => DB_HOST,     // from wp-config.php
			'dbname'   => 'cby_2012_entities',
			'charset'  => 'utf8',
			'driverOptions' => array(
				1002 => 'SET NAMES utf8'
			)
		),
	),	
);