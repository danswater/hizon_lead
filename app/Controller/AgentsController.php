<?php 
App::uses("AppController", "Controller");

class AgentsController extends AppController {
	public $components = array('RequestHandler');
	
    public function index() {
	    $agents = $this->Agent->find("all");
		$this->set(array(
		    "agents" => $agents,
			"_serialize" => array("agents")
		));
	}
	
	public function login() {
	    $this->layout = "outsidelayout";
	}
}