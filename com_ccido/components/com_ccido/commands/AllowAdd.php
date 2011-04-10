<?php

class ComCcidoCommandAllowadd extends ComDefaultCommandAuthorize {

	public function _controllerBeforeAdd(KCommandContext $context) {
		return true;
	}
}
