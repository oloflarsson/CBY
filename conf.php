<?php
$cbyconf = array(
	'doctrine' => array(
		'devmode' => true,
		'connectionOptions' => array(
			'driver'   => 'pdo_mysql',
			'user'     => 'cby',
			'password' => 'kalas!!!',
			'host'     => 'dbi',
			'dbname'   => 'cby_2014_entities',
			'charset'  => 'utf8',
			'driverOptions' => array(
				1002 => 'SET NAMES utf8'
			)
		),
	),
	'economy' => array(
		'payto' => "BankGiro 5349-7707 Salza Productions"
	),
	'campstart' => '2014-07-15',
	'fieldinfo' => array(
		'StatusLink' => array(
			'type' => 'StatusLink',
			'frontname' => '',
			'backname' => '',
			'desc' => '',
			'required' => false,
			'option' => false,
			'editable' => false,
			'escape' => false,
		),
		'Id' => array(
			'type' => 'id',
			'frontname' => 'ID',
			'backname' => 'ID',
			'desc' => '',
			'required' => true,
			'option' => false,
			'editable' => false,
			'escape' => true,
		),
		'Created' => array(
			'type' => 'DateTime',
			'frontname' => 'Created',
			'backname' => 'Created',
			'desc' => '',
			'required' => true,
			'option' => false,
			'editable' => false,
			'escape' => true,
		),
		'Ip' => array(
			'type' => 'text',
			'frontname' => 'IP',
			'backname' => 'IP',
			'desc' => '',
			'required' => true,
			'option' => false,
			'editable' => false,
			'escape' => true,
		),
		'ReceivedGuardianOption' => array(
			'type' => 'ReceivedOption',
			'frontname' => 'Målsmans tillstånd inlämnat',
			'backname' => 'Intyg',
			'desc' => 'Har tillstånd från målsman lämnats in?',
			'required' => false,
			'option' => true,
			'editable' => true,
			'escape' => true,
		),
		'CheckedIn' => array(
			'type' => 'ReceivedOption',
			'frontname' => 'Incheckad',
			'backname' => 'IC',
			'desc' => 'Har incheckning genomförts?',
			'required' => false,
			'option' => true,
			'editable' => true,
			'escape' => true,
		),
		'ReceivedShirtOption' => array(
			'type' => 'ReceivedOption',
			'frontname' => 'Fått T-Shirt',
			'backname' => 'IShirt',
			'desc' => 'Har T-Shirt givits ut?',
			'required' => false,
			'option' => true,
			'editable' => true,
			'escape' => true,
		),
		'ReceivedOilOption' => array(
			'type' => 'ReceivedOption',
			'frontname' => 'Fått Lampolja',
			'backname' => 'IOil',
			'desc' => 'Har lampolja givits ut?',
			'required' => false,
			'option' => true,
			'editable' => true,
			'escape' => true,
		),
		'Firstname' => array(
			'type' => 'text',
			'frontname' => 'Förnamn',
			'backname' => 'Förnamn',
			'desc' => '',
			'required' => true,
			'option' => false,
			'editable' => true,
			'escape' => true,
		),
		'Nick' => array(
			'type' => 'text',
			'frontname' => 'Eldsjäls-nick',
			'backname' => 'Eldsjäls-nick',
			'desc' => 'Eldsjäls-nick',
			'required' => false,
			'option' => false,
			'editable' => true,
			'escape' => true,
		),
		'Lastname' => array(
			'type' => 'text',
			'frontname' => 'Efternamn',
			'backname' => 'Efternamn',
			'desc' => 'Efternamn',
			'required' => true,
			'option' => false,
			'editable' => true,
			'escape' => true,
		),
		'Ssn' => array(
			'type' => 'ssn',
			'frontname' => 'Personnummer',
			'backname' => 'Personnr',
			'desc' => 'Personnummer',
			'required' => true,
			'option' => false,
			'editable' => true,
			'escape' => true,
		),
		'Email' => array(
			'type' => 'email',
			'frontname' => 'Email',
			'backname' => 'Email',
			'desc' => '',
			'required' => true,
			'option' => false,
			'editable' => true,
			'escape' => true,
		),
		'Phone' => array(
			'type' => 'text',
			'frontname' => 'Mobilnummer',
			'backname' => 'Mobil',
			'desc' => 'Mobilnummer',
			'required' => true,
			'option' => false,
			'editable' => true,
			'escape' => true,
		),
		'TicketOption' => array(
			'type' => 'TicketOption',
			'frontname' => 'Biljett',
			'backname' => 'Biljett',
			'desc' => '',
			'required' => true,
			'option' => true,
			'editable' => true,
			'escape' => true,
		),
		'BedOption' => array(
			'type' => 'BedOption',
			'frontname' => 'Sovplats',
			'backname' => 'Sovplats',
			'desc' => '',
			'required' => true,
			'option' => true,
			'editable' => true,
			'escape' => true,
		),
		'ShirtOption' => array(
			'type' => 'ShirtOption',
			'frontname' => 'T-Shirt',
			'backname' => 'Shirt',
			'desc' => '',
			'required' => true,
			'option' => true,
			'editable' => true,
			'escape' => true,
		),
		'OilOption' => array(
			'type' => 'OilOption',
			'frontname' => 'Lampolja',
			'backname' => 'Lampolja',
			'desc' => 'Lampolja',
			'required' => true,
			'option' => true,
			'editable' => true,
			'escape' => true,
		),
		'DatePaid' => array(
			'type' => 'DateTime',
			'frontname' => 'Betaltid',
			'backname' => 'Betaltid',
			'desc' => 'Tidpunkten för första genomförta inbetalningen.',
			'required' => true,
			'option' => false,
			'editable' => true,
			'escape' => true,
		),
		'AmountPaid' => array(
			'type' => 'text',
			'frontname' => 'Betalat',
			'backname' => 'Betalat',
			'desc' => 'Hur mycket som är inbetalat.',
			'required' => true,
			'option' => false,
			'editable' => true,
			'escape' => true,
		),
		'PriceSum' => array(
			'type' => 'PriceSum',
			'frontname' => 'Att Betala',
			'backname' => 'Ska Betala',
			'desc' => 'Hur mycket som ska betalas in.',
			'required' => true,
			'option' => false,
			'editable' => true,
			'escape' => true,
		),
		'ConsumerOption' => array(
			'type' => 'ConsumerOption',
			'frontname' => 'Mat',
			'backname' => 'Mat',
			'desc' => 'Mat',
			'required' => true,
			'option' => true,
			'editable' => true,
			'escape' => true,
		),
		'Allergycomment' => array(
			'type' => 'textarea',
			'frontname' => 'Allergier',
			'backname' => 'Allergier',
			'desc' => 'Allergier',
			'required' => false,
			'option' => false,
			'editable' => true,
			'escape' => true,
		),
		'Comment' => array(
			'type' => 'textarea',
			'frontname' => 'Kommentar',
			'backname' => 'Kommentar',
			'desc' => 'Kommentar',
			'required' => false,
			'option' => false,
			'editable' => true,
			'escape' => true,
		),
	),
	'frontfields' => array(
		'Firstname',
		'Nick',
		'Lastname',
		'Ssn',
		'Email',
		'Phone',
		'TicketOption',
		'BedOption',
		'ShirtOption',
		'OilOption',
		'ConsumerOption',
		'Allergycomment',
		'Comment',
	),
	'backfields' => array(
		'StatusLink',
		'ReceivedGuardianOption',
		'CheckedIn',
		'ReceivedShirtOption',
		'ReceivedOilOption',
		'Firstname',
		'Nick',
		'Lastname',
		'Ssn',
		'Email',
		'Phone',
		'TicketOption',
		'BedOption',
		'ShirtOption',
		'OilOption',
		'DatePaid',
		'AmountPaid',
		'PriceSum',
		'ConsumerOption',
		'Allergycomment',
		'Comment',
	)
);