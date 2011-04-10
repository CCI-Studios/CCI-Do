<?php

class ComCcidoModelMembers extends KModelTable {

	public function __construct(KConfig $config) {
		parent::__construct($config);

		$this->_state
			->insert('type', 'int');
	}


	protected function _buildQueryWhere(KDatabaseQuery $query) {
		$state = $this->_state;

		if (is_numeric($state->type)) {
			$query->where('tbl.bridesmaid', '=', $state->type);
		}

		parent::_buildQueryWhere($query);
	}

}
