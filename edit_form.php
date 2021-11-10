<?php

class block_base_block_moodle_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block_base_block_moodle'));

        $mform->addElement('text', 'config_title', get_string('blocktitle', 'block_base_block_moodle'));
        $mform->setDefault('config_title', '');
        $mform->setType('config_title', PARAM_TEXT);


    }

}