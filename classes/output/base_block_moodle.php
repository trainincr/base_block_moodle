<?php


namespace block_base_block_moodle\output;

defined('MOODLE_INTERNAL') || die();

use renderable;
use renderer_base;
use templatable;
/*
use html_writer;
use moodle_url;
*/

/**
 * Class containing data for base_block_moodle block.
 *
 * @package    base_block_moodle
 * @copyright  2021 Jorge Castrillo <jorge@train-in.cr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or lat
 */
class base_block_moodle implements renderable, templatable {

    /**
     * @var object An object containing the configuration information for the current instance of this block.
     */
    protected $config;

    /**
     * Constructor.
     *
     * @param object $config An object containing the configuration information for the current instance of this block.
     */
    public function __construct($config) {
        $this->config = $config;
    }

    /**
     * Export this data so it can be used as the context for a mustache template.
     *
     * @param \renderer_base $output
     * @return stdClass
     */
    public function export_for_template(renderer_base $output) {

        $data = new \stdClass();

        $data->title = empty($this->config->title) ? get_string('blocktitle', 'block_base_block_moodle') : $this->config->title;

        return $data;
    }

}
