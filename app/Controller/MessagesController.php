<?php
App::uses('AppController', 'Controller');
/**
 * Messages Controller
 *
 * @property Message $Message
 */
class MessagesController extends AppController {
	
	public function isAuthorized($user){
		return true;
	}
	

	public function discussion($id) {
		$connectedid = $this->Auth->user('id');
		// je suis l4utilisqteur 1

		$this->Message->recursive = 0;
		//$this->set('messages', $this->paginate(array('Message.user_id'=>$id,array(
		//'conditions' => array('Message.user_receiver_id'=> $connectedid)))));



		// OR AND CONDITION VARIABLE
		$orcondition = $this->Message->find('all',array(
			'conditions' => array('OR' => array(
					array('AND' => array(
										array('dest_id'=> $id),
										array('exp_id'=> $connectedid)
										)
			),
					array('AND' => array(
										array('dest_id'=> $connectedid),
										array('exp_id'=> $id)
										)
						)
					)),
		'order' => array('date ASC')
		) );

		$this->set('messages', $orcondition);


		//debug($orcondition);
		//$this->render("index");
	}
	public function inbox(){

			$connectedid = $this->Auth->user('id');
			$this->Message->recursive = 0;
			/*
			$data = $this->Message->find('all');
			$this->set('messages', $data); */

			$data = $this->Message->find('all',array(
			'conditions' => array('OR' => array(
			array('dest_id'=> $connectedid),
			array('exp_id'=> $connectedid)
			)),
		//	'group' => array('exp_id','dest_id'),
			'order' => array('Message.date DESC')

			) );



			$this->set('messages', $data);
			/* $d['message'] = current($this->Message->find('all'));
			$this -> set($d); */

	}

	public function index() {
		$this->Message->recursive = 0;
		$this->set('messages', $this->paginate());
	}

	public function add() {

		if ($this->request->is('post')) {
			$this->Message->create();
			//$this->request->data['Message']['dest_id']=$this->request->data['User']['group_id'];
			$this->request->data['Message']['exp_id']=$this->Auth->user('id');
			$this->request->data['Message']['dest_id']=substr ($this->here,23);
			//debug($this->request->data());
			//die();
			if ($this->Message->save($this->request->data)) {
				$this->Session->setFlash(__('Votre message a bien été envoyé'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Erreur. Veuillez, réessayer.'));
			}

		}
		
	}

	public function view(){

	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Message->recursive = 0;
		$this->set('messages', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Message->exists($id)) {
			throw new NotFoundException(__('Invalid message'));
		}
		$options = array('conditions' => array('Message.' . $this->Message->primaryKey => $id));
		$this->set('message', $this->Message->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Message->create();
			if ($this->Message->save($this->request->data)) {
				$this->Session->setFlash(__('The message has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The message could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Message->exists($id)) {
			throw new NotFoundException(__('Invalid message'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Message->save($this->request->data)) {
				$this->Session->setFlash(__('The message has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The message could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Message.' . $this->Message->primaryKey => $id));
			$this->request->data = $this->Message->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Message->id = $id;
		if (!$this->Message->exists()) {
			throw new NotFoundException(__('Invalid message'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Message->delete()) {
			$this->Session->setFlash(__('Message deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Message was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
