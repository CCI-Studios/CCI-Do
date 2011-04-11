<?php

class ComCcidoTableAlbums extends KDatabaseTableAbstract {

	protected function _initialize(KConfig $config) {
		$uploadable = KFactory::tmp('lib.cci.database.behavior.uploadable', array(
			'thumbs' => array(
				array('prefix'=>'t_', 'width'=>100, 'height'=>75)
			)
		));
		$config->behaviors = array($uploadable);
print_r($uploadable);
		parent::_initialize($config);
	}
}
