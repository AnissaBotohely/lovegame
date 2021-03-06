<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {


	/**
	* beforeFilter
	*
	* @author elyany
	**/
	
	public function beforeFilter(){

		parent::beforeFilter();
		$this->Auth->allow('add');
		$this->Auth->allow('logout');
		$this->Auth->allow('search');
	}
	
	public function isAuthorized($user){
		if($this->action == 'delete' && $user['group_id'] ==1) {
			return true;
		}
		
		if($this->action == 'login' && $user['group_id'] ==1) {
			return true;
		}
		
		if($this->action == 'logout' && $user['group_id'] ==1) {
			return true;
		}
		
		if($this->action == 'edit'){
			$id = $this->request->params['pass'][0];
			if(isset($user['id']) && $user['id'] == $id){
				return true;
			}
			else {
				$this->Session->setFlash('access denied');
				return false;
			}
		}	
		return parent::isAuthorized($user);
	}
	
	
	
	/**
	* login and logout
	*
	* @author lovegame
	**/

	public function login(){
		if($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->redirect($this->Auth->redirect());
			}
			else {
				$this->Session->setFlash(__('Invalid username or password'));
			}
		}
	}
	
	public function logout(){
		$this->Auth->logout();
		$this->Session->setFlash("Vous êtes maintenant déconnecté");
		$this->redirect('/');
	}
	


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
//ajout de 10 coeurs à l'inscription (elyany)
			$this->request->data['User']['coeur']=10;
			
		$this->request->data['User']['group_id']=2;	
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$orientations = $this->User->Orientation->find('list');
		$this->set(compact('orientations'));
		
		$genres = $this->User->Genre->find('list');
		$this->set(compact('genres'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		
		$orientations = $this->User->Orientation->find('list');
		$this->set(compact('orientations'));
		
		$genres = $this->User->Genre->find('list');
		$this->set(compact('genres'));
		
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * home listing membres
 * displaying my info
 * @author: pierre, anouch, gasp
 */

	public function home() {
		$autregenre = $this->Auth->user('genre_id');
			if($this->Auth->user('genre_id') == 1) {
				$autregenre = 2;
			}
			else{
				$autregenre = 1;
			} 

			// echo 'mon genre:'.$this->Auth->user('genre_id').' autre genre:'.$autregenre;
			

		/*array('controller' => 'orientations', 'action' => 'view', $user['Orientation']['id'])); 
		 $specifiquementCeluiCi = $this->Article->find('first', array(
        'conditions' => array('Article.id' => 1)
    ));

if ($user['orientation_id'] && $user['orientation_id']==1) {
				return true;	
			}
		*/

		$user = $this->User->find('all',array(
			'conditions' => array('genre_id'=>$autregenre)
		));


		$this->set('users', $user);
	}


	/**
	 * get age
	 *
	 * @return void
	 * @author anouch
	 */
	function age() {
		$age = date('Y') - date('Y', strtotime($user['naissance']));
		if (date('md') < date('md', strtotime($user['naissance']))) {
			return $age - 1;
		}
		$this->set('age', $age);

	}


}
