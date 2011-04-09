<?php

class ComCci_doDatabaseRowEvent extends KDatabaseRowDefault {

	public function getMapURL() {
		$location = str_ireplace(' ', '+', $this->location);
		return "http://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;q={$location}&amp;ie=UTF8&amp;z=17&amp;output=embed";
	}
}
