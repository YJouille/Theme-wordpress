<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a6cf1e26e2468804614611967dbf6149f97e7d96
<?php
class markerViewUms extends viewUms {
	public function getListOperations($markerId) {
		$this->assign('marker', array('id' => $markerId));
		return parent::getContent('markerListOperations');
	}
<<<<<<< HEAD
=======
=======
<?php
class markerViewUms extends viewUms {
	public function getListOperations($markerId) {
		$this->assign('marker', array('id' => $markerId));
		return parent::getContent('markerListOperations');
	}
>>>>>>> 29212546cc82e935cef17fd492e0a61a9640f45d
>>>>>>> a6cf1e26e2468804614611967dbf6149f97e7d96
}