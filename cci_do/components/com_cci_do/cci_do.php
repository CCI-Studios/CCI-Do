<?php
defined('_JEXEC') or die('Restricted Access');

KLoader::load('site::com.cci_do.mappings');

echo KFactory::get('site::com.cci_do.dispatcher')
	->dispatch(KRequest::get('get.view', 'cmd', 'persons'));
