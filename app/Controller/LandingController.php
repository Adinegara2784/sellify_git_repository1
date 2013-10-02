<?php

	class LandingController extends AppController {

  var $helper=array('RequestHandler');
  var $uses=array('User');
		public function index() {
                       
			$this->layout = 'landing';
                        
                        /* save email in user table
                          then redirect survey page */
                        if(!empty($this->data)){                           
                          $email = $this->data['email'];
                          $users = $this->User->find('all',array('conditions'=>array('email'=>$email)));                           
                          if(empty($users)){
                          $this->User->set('email',$email);
                          if ($this->User->validates()) {
                          $this->User->save();
                          $id =  $this->User->getLastInsertID();                          
                          $this->redirect(array('controller'=>'Landing','action'=>'survey',$id));
                          }
                          else {                           
                            $errors = $this->User->validationErrors;
                        }
                        }
                        }

		}
		public function survey($id=null) {
                        
                        $this->layout = 'landing';
                        $users = $this->User->find('first',array('conditions'=>array('id'=>$id)));
                        $this->set('email',$users);
                        if(!empty($this->data)){
                            $this->User->set('id',$id);
                            $this->User->set('first_name',$email);
                            $this->User->set('last_name',$email);
                          $this->User->save();
                        }

		}

		public function dash() {
			
		}

	}

?>