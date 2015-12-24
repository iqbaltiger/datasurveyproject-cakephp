<?php
App::uses('AppController', 'Controller');
/**
 * PersonnelInformations Controller
 *
 * @property PersonnelInformation $PersonnelInformation
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PersonnelInformationsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PersonnelInformation->recursive = 0;
		$this->set('personnelInformations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PersonnelInformation->exists($id)) {
			throw new NotFoundException(__('Invalid personnel information'));
		}
		$options = array('conditions' => array('PersonnelInformation.' . $this->PersonnelInformation->primaryKey => $id));
		$this->set('personnelInformation', $this->PersonnelInformation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PersonnelInformation->create();
			if ($this->PersonnelInformation->save($this->request->data)) {
				$last_insert_id = $this->PersonnelInformation->getLastInsertID();
								$this->Session->setFlash(__('The personnel information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view',$last_insert_id));
			} else {
				$this->Session->setFlash(__('The personnel information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$users = $this->PersonnelInformation->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PersonnelInformation->exists($id)) {
			throw new NotFoundException(__('Invalid personnel information'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PersonnelInformation->save($this->request->data)) {
				$this->Session->setFlash(__('The personnel information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view',$id));
			} else {
				$this->Session->setFlash(__('The personnel information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('PersonnelInformation.' . $this->PersonnelInformation->primaryKey => $id));
			$this->request->data = $this->PersonnelInformation->find('first', $options);
		}
		$users = $this->PersonnelInformation->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PersonnelInformation->id = $id;
		if (!$this->PersonnelInformation->exists()) {
			throw new NotFoundException(__('Invalid personnel information'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PersonnelInformation->delete()) {
			$this->Session->setFlash(__('The personnel information has been deleted. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The personnel information could not be deleted. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
