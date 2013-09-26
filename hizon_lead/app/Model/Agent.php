<?php 
App::uses("AppModel", "Model");

class Agent extends AppModel {
  
    public function getAsList() {
	    return $this->find("list");
	}
	
	public function getAsGeneric() {
	    return $this->find("all");
	}  
}