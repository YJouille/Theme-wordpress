<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a6cf1e26e2468804614611967dbf6149f97e7d96
<?php
class tableMarker_groupsUms extends tableUms{
    public function __construct() {

        $this->_table = '@__marker_groups';
        $this->_id = 'id';
        $this->_alias = 'ums_mrgr';
        $this->_addField('id', 'int', 'int', '11', '')
                ->_addField('title', 'varchar', 'varchar', '255', '')
                ->_addField('description', 'text', 'text', '', '')
				->_addField('params', 'text', 'text', '', '')
				->_addField('parent','int','int','0', '')
				->_addField('sort_order','int','int','0', '');
    }
}

<<<<<<< HEAD
=======
=======
<?php
class tableMarker_groupsUms extends tableUms{
    public function __construct() {

        $this->_table = '@__marker_groups';
        $this->_id = 'id';
        $this->_alias = 'ums_mrgr';
        $this->_addField('id', 'int', 'int', '11', '')
                ->_addField('title', 'varchar', 'varchar', '255', '')
                ->_addField('description', 'text', 'text', '', '')
				->_addField('params', 'text', 'text', '', '')
				->_addField('parent','int','int','0', '')
				->_addField('sort_order','int','int','0', '');
    }
}

>>>>>>> 29212546cc82e935cef17fd492e0a61a9640f45d
>>>>>>> a6cf1e26e2468804614611967dbf6149f97e7d96
