<<<<<<< HEAD
<?php
class csvViewUms extends viewUms {
	public function getTabContent() {
		$options = frameUms::_()->getModule('options')->getModel()->getAll();
		$csv_options = !empty($options['csv_options']) && !empty($options['csv_options']['value']) ? $options['csv_options']['value'] : array();
		$this->assign('delimiters', array(';' => ';', ',' => ','));
		$this->assign('options', $csv_options);
		return parent::getContent('csvTabContent');
	}
=======
<?php
class csvViewUms extends viewUms {
	public function getTabContent() {
		$options = frameUms::_()->getModule('options')->getModel()->getAll();
		$csv_options = !empty($options['csv_options']) && !empty($options['csv_options']['value']) ? $options['csv_options']['value'] : array();
		$this->assign('delimiters', array(';' => ';', ',' => ','));
		$this->assign('options', $csv_options);
		return parent::getContent('csvTabContent');
	}
>>>>>>> 29212546cc82e935cef17fd492e0a61a9640f45d
}