<?php
require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'settings.php');

class sync {
	private $authentication = array();
	private $chroot = NULL;
	private $state = NULL;
	private $remote = NULL;

	function sync(){}

	public function authenticate($user=NULL, $pswd=FALSE){}
	private function is_authenticated(){ return TRUE; }

	public function mount($directory=NULL){}

	public function generate_state(){ return $state; }
	public function get_state($timestamp=NULL){
		if($timestamp == NULL){ return self::generate_state(); }
		return $state;
	}
	public function compare_state($one, $two){ return $task; }

	public function get_remote_state($timestamp=NULL){ return $state; }

	public function push($file, $data){}
	public function pull($file){ return $data; }
	public function merge($file, $data){ return $data; }
}
function sync(){ return sync::sync(); }

/*debug*/ print '&lt;%Sync%&gt;';
exit;
?>
