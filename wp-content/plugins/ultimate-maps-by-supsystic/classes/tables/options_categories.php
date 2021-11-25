<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a6cf1e26e2468804614611967dbf6149f97e7d96
<?php
class tableOptions_categoriesUms extends tableUms {
    public function __construct() {
        $this->_table = '@__options_categories';
        $this->_id = 'id';     
        $this->_alias = 'toe_opt_cats';
        $this->_addField('id', 'hidden', 'int', 0, __('ID', UMS_LANG_CODE))
            ->_addField('label', 'text', 'varchar', 0, __('Method', UMS_LANG_CODE), 128);
    }
}
?>
<<<<<<< HEAD
=======
=======
<?php
class tableOptions_categoriesUms extends tableUms {
    public function __construct() {
        $this->_table = '@__options_categories';
        $this->_id = 'id';     
        $this->_alias = 'toe_opt_cats';
        $this->_addField('id', 'hidden', 'int', 0, __('ID', UMS_LANG_CODE))
            ->_addField('label', 'text', 'varchar', 0, __('Method', UMS_LANG_CODE), 128);
    }
}
?>
>>>>>>> 29212546cc82e935cef17fd492e0a61a9640f45d
>>>>>>> a6cf1e26e2468804614611967dbf6149f97e7d96
