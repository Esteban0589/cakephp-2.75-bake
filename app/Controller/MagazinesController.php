<?php
App::uses('AppController', 'Controller');
/**
 * Magazines Controller
 *
 * @property Magazine $Magazine
 * @property PaginatorComponent $Paginator
 */
class MagazinesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Magazine->recursive = 0;
		$this->set('magazines', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Magazine->exists($id)) {
			throw new NotFoundException(__('Invalid magazine'));
		}
		$options = array('conditions' => array('Magazine.' . $this->Magazine->primaryKey => $id));
		$this->set('magazine', $this->Magazine->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Magazine->create();
			if ($this->Magazine->save($this->request->data)) {
				$this->Flash->success(__('The magazine has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The magazine could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Magazine->exists($id)) {
			throw new NotFoundException(__('Invalid magazine'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Magazine->save($this->request->data)) {
				$this->Flash->success(__('The magazine has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The magazine could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Magazine.' . $this->Magazine->primaryKey => $id));
			$this->request->data = $this->Magazine->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Magazine->id = $id;
		if (!$this->Magazine->exists()) {
			throw new NotFoundException(__('Invalid magazine'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Magazine->delete()) {
			$this->Flash->success(__('The magazine has been deleted.'));
		} else {
			$this->Flash->error(__('The magazine could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
