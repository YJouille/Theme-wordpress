<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a6cf1e26e2468804614611967dbf6149f97e7d96
<?php
class  iconsUms extends moduleUms {
	public function init(){
		parent::init();
		add_filter('upload_mimes', array($this, 'addMimeTypes'));
		$this->getModel()->checkDefIcons();
		/*if(frameUms::_()->isAdminPlugPage()){
			$umsExistsIcons = $this->getModel()->getIcons();
			frameUms::_()->addJSVar('iconOpts', 'umsExistsIcons', $umsExistsIcons);
			frameUms::_()->addScript('iconOpts', $this->getModPath() .'js/iconOpts.js');			
		}*/
	}
	function addMimeTypes($mimes) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
<<<<<<< HEAD
=======
=======
<?php
class  iconsUms extends moduleUms {
	public function init(){
		parent::init();
		add_filter('upload_mimes', array($this, 'addMimeTypes'));
		$this->getModel()->checkDefIcons();
		/*if(frameUms::_()->isAdminPlugPage()){
			$umsExistsIcons = $this->getModel()->getIcons();
			frameUms::_()->addJSVar('iconOpts', 'umsExistsIcons', $umsExistsIcons);
			frameUms::_()->addScript('iconOpts', $this->getModPath() .'js/iconOpts.js');			
		}*/
	}
	function addMimeTypes($mimes) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
>>>>>>> 29212546cc82e935cef17fd492e0a61a9640f45d
>>>>>>> a6cf1e26e2468804614611967dbf6149f97e7d96
}