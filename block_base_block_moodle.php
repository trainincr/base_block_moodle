<?php


/**
 * Class callable from moodle system block_base_block_moodle.
 *
 * @package    base_block_moodle
 * @copyright  2021 Jorge Castrillo <jorge@train-in.cr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or lat
 */
class block_base_block_moodle extends block_base {
    function init() {
        $this->title = get_string('pluginname', 'block_base_block_moodle');
    }

    public function get_content() {

        if ($this->content !== NULL) {
            return $this->content;
        }

        if (!isloggedin() or isguestuser()) {
            // Only real users can access myprofile block.
            return;
        }

        $this->page->requires->js_call_amd('block_base_block_moodle/baseblock', 'init');

        $renderable = new \block_base_block_moodle\output\base_block_moodle($this->config);
        $renderer = $this->page->get_renderer('block_base_block_moodle');

        $this->content = new stdClass();
        $this->content->text = $renderer->render($renderable);
        $this->content->footer = '';

        return $this->content;
    }

    public function specialization() {
        if(!empty($this->config)){
            if (empty($this->config->title)) {
                $this->title = get_string('blocktitle', 'block_base_block_moodle');
            } else {
                $this->title = $this->config->title;
            }
        }
    }

    public function instance_allow_multiple() {
        //allow more than one instance on a page
        return true;
    }

    public function hide_header() {
        return true;
    }

}


