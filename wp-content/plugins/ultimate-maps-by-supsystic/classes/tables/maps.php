<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a6cf1e26e2468804614611967dbf6149f97e7d96
<?php
class tableMapsUms extends tableUms{
    public function __construct() {

        $this->_table = '@__maps';
        $this->_id = 'id';
        $this->_alias = 'toe_m';
        $this->_addField('id', 'int', 'int', '11')
                ->_addField('title', 'varchar', 'varchar', '255')
				->_addField('engine', 'varchar', 'varchar', '32')
                ->_addField('html_options', 'text', 'text', '')
                ->_addField('create_date', 'datetime', 'datetime', '')
                ->_addField('params', 'text', 'text', '');

    }
}

<<<<<<< HEAD
=======
=======
<?php
class tableMapsUms extends tableUms{
    public function __construct() {

        $this->_table = '@__maps';
        $this->_id = 'id';
        $this->_alias = 'toe_m';
        $this->_addField('id', 'int', 'int', '11')
                ->_addField('title', 'varchar', 'varchar', '255')
				->_addField('engine', 'varchar', 'varchar', '32')
                ->_addField('html_options', 'text', 'text', '')
                ->_addField('create_date', 'datetime', 'datetime', '')
                ->_addField('params', 'text', 'text', '');

    }
}

>>>>>>> 29212546cc82e935cef17fd492e0a61a9640f45d
>>>>>>> a6cf1e26e2468804614611967dbf6149f97e7d96
