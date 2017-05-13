<?php
class block_simple extends block_base {
    public function init() {
        $this->title = get_string('simple', 'block_simple');
    }
    public function get_content() {
    	if ($this->content !== null) {
           return $this->content;
        }
 
        $this->content         =  new stdClass;
        $this->content->text   = $this->config->text;
        $this->content->footer = '';
 
        return $this->content;
    }
}
