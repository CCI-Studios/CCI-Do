<?php


class ComCcidoControllerMessage extends ComDefaultControllerDefault {

	public function __construct(KConfig $config) {
		parent::__construct($config);

		// allow anonomous additions
		$auth = KFactory::get('site::com.ccido.command.authorize');
		$this->getCommandChain()->dequeue($auth);
		$this->getCommandChain()->enqueue(KFactory::get('site::com.ccido.command.allowadd'));
	}
}
