<?php

App::uses('CakeEmail', 'Network/Email');

class IndexController extends AppController {
    
	public $helpers = array('Html', 'Form');
	public $uses = array('Car','Request');
	public $components = array('Session');

    public function index() {		
        $this->set('cars', $this->Car->find('all'));
    }
	
	public function vehicles() {
        $this->set('cars', $this->Car->find('all'));
    }

    public function view($id = null) {
		
		if ($this->request->is('post')) {
			
			$info = $this->request->data;
			
			// debug($info);
		
			$this->Request->save($this->request->data);
			$this->Session->setFlash('Your request has been sent.');
			$Email = new CakeEmail();
			$Email->viewVars(array('info' => $info));
			$Email->template('request')
				->emailFormat('html')
				->to('loyenrique1@gmail.com')
				->from('app@domain.com')
				->send();
		}
	
        $this->Car->id = $id;
        $this->set('car', $this->Car->read());
    }
	
	public function yacht() {
		
    }
	
	public function contact() {
		
    }
}

?>