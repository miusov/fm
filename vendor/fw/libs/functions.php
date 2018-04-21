<?php

/**
 * @param bool $http
 */
function redirect($http = false)
{
	if ($http)
	{
		$redirect = $http;
	}
	else
	{
	$redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/';
	}
	header("Location: $redirect");
	exit;
}

/**
 * @param $str
 * @return string
 */
function h($str)
{
	return htmlspecialchars($str, ENT_QUOTES);
}