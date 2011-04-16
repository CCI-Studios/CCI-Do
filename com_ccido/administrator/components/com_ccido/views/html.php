<?php

class ComCcidoViewHtml extends ComDefaultViewHtml {

	public function __construct(KConfig $config) {
		$config->views = array(
			'events'	=> JText::_('Events'),
			'links'		=> JText::_('Links'),
			'members'	=> JText::_('Wedding Party'),
			'albums'	=> JText::_('Photo Albums'),
			'messages'	=> JText::_('Guestbook'),
		);
		parent::__construct($config);
	}
}
