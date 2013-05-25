<?php

define('FALLBACKIMAGE_PATH', str_replace(str_replace('\\','/',
                $_SERVER['DOCUMENT_ROOT']).'/', "",
                str_replace('\\','/',dirname(__FILE__))) );

Object::add_extension('Image', 'CustomImageExtension');

CustomImageExtension::$fallback_image = FALLBACKIMAGE_PATH.'/image/no_image.png';
	
