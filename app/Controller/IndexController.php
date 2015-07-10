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
			
			$this->Car->id = $info['Request']['car_id'];
			$car_info = $this->Car->read();
			
			// debug($car_info);			
			
			// sending email with request template
		
			$this->Request->save($this->request->data);
			$Email = new CakeEmail();
			$Email->viewVars(array('info' => $info, 'car_info' => $car_info));
			$Email->template('request')
				->emailFormat('both')
				->to('loyenrique1@gmail.com')
				->cc(array('loy_enrique1@hotmail.com'))
				->from('me@example.com')
				->subject('Rent Request')
				->send();
				
			$Email = new CakeEmail();
			$Email->viewVars(array('info' => $info, 'car_info' => $car_info));
			$Email->template('request')
				->emailFormat('both')
				->to('loy_enrique1@hotmail.com')
				->cc(array('loy_enrique1@hotmail.com'))
				->from('me@example.com')
				->subject('Rent Request')
				->send();
			
			$this->Session->setFlash('Your request has been sent.');
			$this->redirect(array('controller' => 'index', 'action' => 'index'));
		}
	
        $this->Car->id = $id;
        $this->set('car', $this->Car->read());
		$this->set('car_id', $id);
    }
	
	public function yacht() {
		
    }
	
	public function contact() {
		
    }
}

?>