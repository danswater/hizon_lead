<?php 
App::uses("AppModel", "Model");

class Source extends AppModel {

    public function getAsList() {
	    return $this->find("list");
	}
	
	public function getAsGeneric() {
	    return $this->find("all");
	}
}