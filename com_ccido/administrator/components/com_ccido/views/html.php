<?php

class ComCcidoViewHtml extends ComDefaultViewHtml {

	public function __construct(KConfig $config) {
		$config->views = array(
			'events'	=> JText::_('Events'),
			'messages'	=> JText::_('Guestbook'),
			'links'		=> JText::_('Links'),
			'albums'	=> JText::_('Photo Albums'),
			'persons'	=> JText::_('Wedding Party')
		);
		parent::__construct($config);
	}
}
