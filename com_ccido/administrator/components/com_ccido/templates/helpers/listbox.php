<?php

class ComCcidoTemplateHelperListbox extends ComDefaultTemplateHelperListbox {

	public function memberType($config = array()) {
		$config = new KConfig($config);

		$config->append(array(
			'name'		=> 'memberType',
			'attribs'	=> array(),
			'deselect'	=> true
		))->append(array(
			'selected'	=> $config->{$config->name}
		));

		$option = array();

		if ($config->deselect) {
			$options[] = $this->option(array('text'=>'- '.JText::_('Select').' -', 'value'=>''));
		}

		$options[] = $this->option(array('text'=>JText::_('Bridesmaid'), 'value'=>'0'));
		$options[] = $this->option(array('text'=>JText::_('Groomsman'), 'value'=>'1'));

		$config->options = $options;
		return $this->optionlist($config);
	}
}
