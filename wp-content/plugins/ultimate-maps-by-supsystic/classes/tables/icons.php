<<<<<<< HEAD
<?php
class tableIconsUms extends tableUms{
    public function __construct() {

        $this->_table = '@__icons';
        $this->_id = 'id';
        $this->_alias = 'ums_icons';
        $this->_addField('id', 'int', 'int', '11')
                ->_addField('title', 'varchar', 'varchar', '100')
                ->_addField('description', 'description', 'text', '')
                ->_addField('path', 'varchar', 'varchar', '255')
				->_addField('width', 'int', 'int', '5')
				->_addField('height', 'int', 'int', '5')
				->_addField('is_def', 'int', 'int', '5');
    }
}

=======
<?php
class tableIconsUms extends tableUms{
    public function __construct() {

        $this->_table = '@__icons';
        $this->_id = 'id';
        $this->_alias = 'ums_icons';
        $this->_addField('id', 'int', 'int', '11')
                ->_addField('title', 'varchar', 'varchar', '100')
                ->_addField('description', 'description', 'text', '')
                ->_addField('path', 'varchar', 'varchar', '255')
				->_addField('width', 'int', 'int', '5')
				->_addField('height', 'int', 'int', '5')
				->_addField('is_def', 'int', 'int', '5');
    }
}

>>>>>>> 29212546cc82e935cef17fd492e0a61a9640f45d
