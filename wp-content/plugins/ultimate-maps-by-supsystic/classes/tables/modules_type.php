<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a6cf1e26e2468804614611967dbf6149f97e7d96
<?php
class tableModules_typeUms extends tableUms {
    public function __construct() {
        $this->_table = '@__modules_type';
        $this->_id = 'id';     /*Let's associate it with posts*/
        $this->_alias = 'toe_m_t';
        $this->_addField($this->_id, 'text', 'int', '', __('ID', UMS_LANG_CODE))->
                _addField('label', 'text', 'varchar', '', __('Label', UMS_LANG_CODE), 128);
    }
}
?>
<<<<<<< HEAD
=======
=======
<?php
class tableModules_typeUms extends tableUms {
    public function __construct() {
        $this->_table = '@__modules_type';
        $this->_id = 'id';     /*Let's associate it with posts*/
        $this->_alias = 'toe_m_t';
        $this->_addField($this->_id, 'text', 'int', '', __('ID', UMS_LANG_CODE))->
                _addField('label', 'text', 'varchar', '', __('Label', UMS_LANG_CODE), 128);
    }
}
?>
>>>>>>> 29212546cc82e935cef17fd492e0a61a9640f45d
>>>>>>> a6cf1e26e2468804614611967dbf6149f97e7d96
