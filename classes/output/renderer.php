<?php

namespace block_base_block_moodle\output;

defined('MOODLE_INTERNAL') || die;

use plugin_renderer_base;

/**
 * base_block_moodle block renderer
 *
 * @package    base_block_moodle
 * @copyright  2021 Jorge Castrillo <jorge@train-in.cr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class renderer extends plugin_renderer_base {

    /**
     * Return the main content for the block myprofile.
     *
     * @param base_block_moodle $baseblockmoodle The myprofile renderable
     * @return string HTML string
     */
    public function render_base_block_moodle(base_block_moodle $baseblockmoodle) {
        return $this->render_from_template('block_base_block_moodle/base_block_moodle', $baseblockmoodle->export_for_template($this));
    }
}
