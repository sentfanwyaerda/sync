<?php
$sync_settings = array(
	'authentication' => array(
		'test' => md5('password') #CHANGE THIS NOW!!!
		),
	'chroot' => dirname(__FILE__).DIRECTORY_SEPARATOR.'test-www'.DIRECTORY_SEPARATOR,
);
?>
