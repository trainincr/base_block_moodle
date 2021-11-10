<?php

namespace block_base_block_moodle\privacy;

defined('MOODLE_INTERNAL') || die();

/**
 * Privacy Subsystem for block_category_list implementing null_provider.
 *
 * @package    base_block_moodle
 * @copyright  2021 Jorge Castrillo <jorge@train-in.cr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or lat
 */
class provider implements \core_privacy\local\metadata\null_provider {

    /**
     * Get the language string identifier with the component's language
     * file to explain why this plugin stores no data.
     *
     * @return  string
     */
    public static function get_reason() : string {
        return 'privacy:metadata';
    }
}
