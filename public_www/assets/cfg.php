<?php
	error_reporting(E_ALL ^ E_WARNING);
	date_default_timezone_set('Europe/Copenhagen');
	session_set_cookie_params(["SameSite" => "none"]); //none, lax, strict
	session_set_cookie_params(["Secure" => "true"]); //false, true
	session_set_cookie_params(["HttpOnly" => "true"]); //false, true
	session_start();
?>