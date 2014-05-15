<?php 
App::uses("AppController", "Controller");

class SourcesController extends AppController {
	public $components = array('RequestHandler');
	
    public function index() {
	    $sources = $this->Source->getAsList("all");
		$this->set(array(
		    "sources" => $sources,
			"_serialize" => array("sources")
		));
	}
}