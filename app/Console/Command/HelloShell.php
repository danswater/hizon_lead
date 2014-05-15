<?php 
class HelloShell extends AppShell {
    public $uses = array("Source");
    public function main() {
	    $this->out("Hello World!");
	}
	
	public function hey_there() {
	    $sources = $this->Source->find("list");
	    foreach($sources as $key => $value) {
		    $this->out($value);
		}
	}
}