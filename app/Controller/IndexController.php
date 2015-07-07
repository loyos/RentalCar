<?php

class IndexController extends AppController {
    
	public $helpers = array('Html', 'Form');
	public $uses = array('Car');

    public function index() {		
        $this->set('cars', $this->Car->find('all'));
    }
	
	public function vehicles() {
        $this->set('cars', $this->Car->find('all'));
    }

    public function view($id = null) {
        $this->Car->id = $id;
        $this->set('car', $this->Car->read());
    }
	
	public function yacht() {
		
    }
	
	public function contact() {
		
    }
}

?>