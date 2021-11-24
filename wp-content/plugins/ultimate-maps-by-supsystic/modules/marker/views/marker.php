<<<<<<< HEAD
<?php
class markerViewUms extends viewUms {
	public function getListOperations($markerId) {
		$this->assign('marker', array('id' => $markerId));
		return parent::getContent('markerListOperations');
	}
=======
<?php
class markerViewUms extends viewUms {
	public function getListOperations($markerId) {
		$this->assign('marker', array('id' => $markerId));
		return parent::getContent('markerListOperations');
	}
>>>>>>> 29212546cc82e935cef17fd492e0a61a9640f45d
}