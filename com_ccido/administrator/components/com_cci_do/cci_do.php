<?php
defined('_JEXEC') or die;
defined('KOOWA') or die;

echo KFactory::get('admin::com.cci_do.dispatcher')
	->dispatch(KRequest::get('get.view', 'cmd', 'events'));
