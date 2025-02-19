<?php

include '/translation/french/main.php';


public function translate($key) {
	global $translations;

	return isset($translations[$key]) ? $translations[$key] : $key;
}
