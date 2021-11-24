<<<<<<< HEAD
<?php
class dateUms {
	static public function _($time = NULL) {
		if(is_null($time)) {
			$time = time();
		}
		return date(UMS_DATE_FORMAT_HIS, $time);
	}
=======
<?php
class dateUms {
	static public function _($time = NULL) {
		if(is_null($time)) {
			$time = time();
		}
		return date(UMS_DATE_FORMAT_HIS, $time);
	}
>>>>>>> 29212546cc82e935cef17fd492e0a61a9640f45d
}