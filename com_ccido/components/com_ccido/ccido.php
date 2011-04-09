<?php
defined('_JEXEC') or die('Restricted Access');

KLoader::load('site::com.ccido.mappings');

echo KFactory::get('site::com.ccido.dispatcher')
	->dispatch(KRequest::get('get.view', 'cmd', 'persons'));
