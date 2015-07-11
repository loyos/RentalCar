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
			
			$this->Car->id = $info['Request']['car_id'];
			$car_info = $this->Car->read();	
			
			// sending email with request template
		
			$saved = $this->Request->save($this->request->data);
			// debug($saved);
			// $this->Request->set($this->request->data);
			// if ($this->Request->validates()) {				
			// } else {				
				// $errors = $this->Request->validationErrors;
				// debug($errors);
			// }			
			if($saved){  // send email and redirect home
			
				$Email = new CakeEmail();
				$Email->viewVars(array('info' => $info, 'car_info' => $car_info));
				$Email->template('request')
					->emailFormat('both')
					->to('loyenrique1@gmail.com')
					->cc(array('loy_enrique1@hotmail.com', 'gmontenegro500@gmail.com', 'info@miamibeachrentalcarusa.com'))
					->from('miamirental@no-reply.com')
					->subject('Rent Request')
					->send();
				
				$this->Session->setFlash('Your request has been sent.');
				$this->redirect(array('controller' => 'index', 'action' => 'index'));
			}else{
				$this->Session->setFlash('Error, please check fields');
			}
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