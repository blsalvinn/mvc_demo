<?php
class Session
{	
	//ss : session
	//Set ss
	static function session_set($key, $val){
		$_SESSION[$key] = $val;
	}

	//Get ss
	static function session_get($key){
		return (isset($_SESSION[$key])) ? $_SESSION[$key] : false;
	}

	//Delete ss
	static function session_delete($key){
		if (isset($_SESSION[$key])) {
			unset($_SESSION[$key]);
		}
	}
}
?>