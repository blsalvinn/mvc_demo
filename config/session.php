<?php
class Session
{
	
	//set session (SET)
	static function session_set($key, $val){
		
		$_SESSION[$key] = $val;
	}

	// get session (GET)
	static function session_get($key){
		return (isset($_SESSION[$key])) ? $_SESSION[$key] : false;
	}

	// del session (DELETE)
	static function session_delete($key){
		if (isset($_SESSION[$key])) {
			unset($_SESSION[$key]);
		}
	}
}



?>