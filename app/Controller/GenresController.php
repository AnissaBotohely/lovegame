<?php
App::uses('AppController', 'Controller');
/**
 * Genres Controller
 *
 * @property Genre $Genre
 */
class GenresController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Genre->recursive = 0;
		$this->set('genres', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Genre->exists($id)) {
			throw new NotFoundException(__('Invalid genre'));
		}
		$options = array('conditions' => array('Genre.' . $this->Genre->primaryKey => $id));
		$this->set('genre', $this->Genre->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Genre->create();
			if ($this->Genre->save($this->request->data)) {
				$this->Session->setFlash(__('The genre has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The genre could not be saved. Please, try again.'));
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
		if (!$this->Genre->exists($id)) {
			throw new NotFoundException(__('Invalid genre'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Genre->save($this->request->data)) {
				$this->Session->setFlash(__('The genre has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The genre could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Genre.' . $this->Genre->primaryKey => $id));
			$this->request->data = $this->Genre->find('first', $options);
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
		$this->Genre->id = $id;
		if (!$this->Genre->exists()) {
			throw new NotFoundException(__('Invalid genre'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Genre->delete()) {
			$this->Session->setFlash(__('Genre deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Genre was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
