<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a6cf1e26e2468804614611967dbf6149f97e7d96
<?php
class csvgeneratorUms {
    protected $_filename = '';
    protected $_delimiter = ';';
    protected $_enclosure = "\n";
    protected $_data = array();
	protected $_escape = '\\';
    public function __construct($filename) {
        $this->_filename = $filename;
    }
    public function addCell($x, $y, $value) {
        $this->_data[ $x ][ $y ] = '"'. $value. '"';    //If will not do "" then wymbol for example , will broke file
    }
    public function generate() {
        $strData = '';
        if(!empty($this->_data)) {
            $rows = array();
            foreach($this->_data as $cells) {
                $rows[] = implode($this->_delimiter, $cells);
            }
            $strData = implode($this->_enclosure, $rows);
        }
        filegeneratorUms::_($this->_filename, $strData, 'csv')->generate();
    }
	public function setDelimiter($delimiter) {
		$this->_delimiter = $delimiter;
	}
	public function getDelimiter() {
		return $this->_delimiter;
	}
	public function getEnclosure() {
		return $this->_enclosure;
	}
	public function getEscape() {
		return $this->_escape;
	}
}

<<<<<<< HEAD
=======
=======
<?php
class csvgeneratorUms {
    protected $_filename = '';
    protected $_delimiter = ';';
    protected $_enclosure = "\n";
    protected $_data = array();
	protected $_escape = '\\';
    public function __construct($filename) {
        $this->_filename = $filename;
    }
    public function addCell($x, $y, $value) {
        $this->_data[ $x ][ $y ] = '"'. $value. '"';    //If will not do "" then wymbol for example , will broke file
    }
    public function generate() {
        $strData = '';
        if(!empty($this->_data)) {
            $rows = array();
            foreach($this->_data as $cells) {
                $rows[] = implode($this->_delimiter, $cells);
            }
            $strData = implode($this->_enclosure, $rows);
        }
        filegeneratorUms::_($this->_filename, $strData, 'csv')->generate();
    }
	public function setDelimiter($delimiter) {
		$this->_delimiter = $delimiter;
	}
	public function getDelimiter() {
		return $this->_delimiter;
	}
	public function getEnclosure() {
		return $this->_enclosure;
	}
	public function getEscape() {
		return $this->_escape;
	}
}

>>>>>>> 29212546cc82e935cef17fd492e0a61a9640f45d
>>>>>>> a6cf1e26e2468804614611967dbf6149f97e7d96
