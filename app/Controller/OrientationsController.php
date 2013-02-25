<?php
App::uses('AppController', 'Controller');
/**
 * Orientations Controller
 *
 * @property Orientation $Orientation
 */
class OrientationsController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Orientation->recursive = 0;
		$this->set('orientations', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Orientation->exists($id)) {
			throw new NotFoundException(__('Invalid orientation'));
		}
		$options = array('conditions' => array('Orientation.' . $this->Orientation->primaryKey => $id));
		$this->set('orientation', $this->Orientation->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Orientation->create();
			if ($this->Orientation->save($this->request->data)) {
				$this->Session->setFlash(__('The orientation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orientation could not be saved. Please, try again.'));
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
		if (!$this->Orientation->exists($id)) {
			throw new NotFoundException(__('Invalid orientation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Orientation->save($this->request->data)) {
				$this->Session->setFlash(__('The orientation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orientation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Orientation.' . $this->Orientation->primaryKey => $id));
			$this->request->data = $this->Orientation->find('first', $options);
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
		$this->Orientation->id = $id;
		if (!$this->Orientation->exists()) {
			throw new NotFoundException(__('Invalid orientation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Orientation->delete()) {
			$this->Session->setFlash(__('Orientation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Orientation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
