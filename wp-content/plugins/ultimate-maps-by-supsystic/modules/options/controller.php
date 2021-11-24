<<<<<<< HEAD
<?php
class optionsControllerUms extends controllerUms {
	public function saveGroup() {
		$res = new responseUms();
		if($this->getModel()->saveGroup(reqUms::get('post'))) {
			$res->addMessage(__('Done', UMS_LANG_CODE));
		} else
			$res->pushError ($this->getModel('options')->getErrors());
		return $res->ajaxExec();
	}
	public function getPermissions() {
		return array(
			UMS_USERLEVELS => array(
				UMS_ADMIN => array('saveGroup')
			),
		);
	}
}

=======
<?php
class optionsControllerUms extends controllerUms {
	public function saveGroup() {
		$res = new responseUms();
		if($this->getModel()->saveGroup(reqUms::get('post'))) {
			$res->addMessage(__('Done', UMS_LANG_CODE));
		} else
			$res->pushError ($this->getModel('options')->getErrors());
		return $res->ajaxExec();
	}
	public function getPermissions() {
		return array(
			UMS_USERLEVELS => array(
				UMS_ADMIN => array('saveGroup')
			),
		);
	}
}

>>>>>>> 29212546cc82e935cef17fd492e0a61a9640f45d
