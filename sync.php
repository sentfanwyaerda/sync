<?php
require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'settings.php');

class sync {
	private $authentication = array(/*{"username":"", "password":""}*/);
	private $chroot = /*PATH*/ NULL;
	private $state = /*PATH*/ NULL;
	private $remote = /*URI*/ NULL;

	function sync(){
		$this->authentication = json_decode(SYNC_AUTHENTICATION, TRUE);
		$this->chroot = SYNC_CHROOT;
		$this->state = SYNC_STATE;
		$this->remote = SYNC_REMOTE;
	}

	public function authenticate($user=NULL, $pswd=FALSE){}
	private function is_authenticated(){ return TRUE; }

	public function mount($directory=NULL){}

	public function generate_state(){
		$list = self::scandir($this->chroot, TRUE, $this->chroot);
		/*debug*/ $state = $list;
		return $state;
	}
	private function scandir($path, $recursive=TRUE, $chroot=NULL){
		$list = scandir($path);
		$add = array();
		foreach($list as $i=>$file){
			if(preg_match("#^[\.]{1,2}$#", $file)){ unset($list[$i]); }
			else{ #is a file or directory
				if(is_dir($path.DIRECTORY_SEPARATOR.$file) && $recursive === TRUE){
					$add = array_merge($add, self::scandir($path.DIRECTORY_SEPARATOR.$file, $recursive, $chroot) );
					$list[$i] = $file.DIRECTORY_SEPARATOR;
				}
				/*fix*/ $list[$i] = preg_replace("#^(".$chroot.")[\\/]{0,2}(.*)$#i", "\\2", $path.DIRECTORY_SEPARATOR).$list[$i];
			}
		}
		$list = array_merge($list, $add);
		sort($list);
		return $list;
	}
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
/*test*/ print '<pre>';
/*test*/ $syn = new sync();
/*test*/ print_r($syn);
/*test*/ $list = $syn->generate_state(); print_r($list);
/*test*/ print '</pre>';
exit;
?>
