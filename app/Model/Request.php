<?php

class Request extends AppModel {
	public $name = 'Request';
		
	public $validate = array(
		'first_name' => array(
			 'required' => array(
                'rule' => array('notBlank'),
                'message' => 'A username is required'
            ),
		),
		'last_name' => array(
			 'required' => array(
                'rule' => array('notBlank'),
                'message' => 'A username is required'
            ),
		),
		'phone' => array(
			 'required' => array(
                'rule' => array('notBlank'),
                'message' => 'A username is required'
            ),
		),
		'email' => array(
			 'required' => array(
                'rule' => array('notBlank'),
                'message' => 'A username is required'
            ),
		),
		'pick_up_loc' => array(
			 'required' => array(
                'rule' => array('notBlank'),
                'message' => 'A username is required'
            ),
		),
		'drop_off_loc' => array(
			 'required' => array(
                'rule' => array('notBlank'),
                'message' => 'A username is required'
            ),
		),
		'pick_up_date' => array(
			'required' => array(
				'rule' => array('rent_dates'),
				'message' => 'Wrong dates'
			),
		),
		'pick_up_time' => array(
			 'required' => array(
                'rule' => array('notBlank'),
                'message' => 'A username is required'
            ),
		),
		'drop_off_date' => array(
			'required' => array(
				'rule' => array('rent_dates'),
				'message' => 'Wrong dates'
			),
			
		),
		'drop_off_time' => array(
			 'required' => array(
                'rule' => array('notBlank'),
                'message' => 'A username is required'
            ),
		),
		'driver_age' => array(
			 'required' => array(
                'rule' => array('notBlank'),
                'message' => 'A username is required'
            ),
		),
	);
	
	public function rent_dates(){
		// debug($this->data);
		$date1 = strtotime($this->data['Request']['pick_up_date']);
		$date2 = strtotime($this->data['Request']['drop_off_date']);
		// $username = $username['username'];
		
		
		if($date1 <= $date2){
			return true;
		}else{
			return false;
		}
	}
	
}

?>