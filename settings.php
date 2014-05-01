<?php
if(!defined('SYNC_AUTHENTICATION')){
	define('SYNC_AUTHENTICATION', '[{"username": "test", "password": "'.md5('password').'"}]'); #CHANGE THIS NOW!!!
}
if(!defined('SYNC_CHROOT')){
	define('SYNC_CHROOT', dirname(__FILE__).DIRECTORY_SEPARATOR.'test-www'.DIRECTORY_SEPARATOR );
}
if(!defined('SYNC_STATE')){
	define('SYNC_STATE', dirname(__FILE__).DIRECTORY_SEPARATOR.'state'.DIRECTORY_SEPARATOR);
}
if(!defined('SYNC_REMOTE')){
	define('SYNC_REMOTE', "https://user:pass@somewhere.else/sync.php");
}
?>
