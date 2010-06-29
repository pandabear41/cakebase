<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $uses     = array('User', 'Rule');
	var $components = array('Filter','Authake');

  	var $paginate = array(
       	'limit' => 30,
              'order' => array(
              	'User.login' => 'asc'
              )
        );

	function index($tableonly = false) {
		$this->User->recursive = 1;
        	$filter = $this->Filter->process($this);
        	$this->set('users', $this->paginate(null, $filter));
        	$this->set('tableonly', $tableonly);
	}

	function view($id = null, $viewactions = null) {
		$this->User->recursive = 1;
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
        	$this->set('user', $this->User->read(null, $id));
        	$groups = $this->User->getGroups($id);
        	$this->set('rules', $this->Rule->getRules($groups));
        	if ($viewactions === 'actions') {
            		$this->set('actions', $this->Authake->getActionsPermissions($groups));
        	}
	}

	function add() {
        	if (!empty($this->data)) {
            
            	// only an admin can make an admin
            		if (in_array(1, $this->data['Group']['Group']) and !in_array(1, $this->Authake->getGroupIds())) {
                		$this->Session->setFlash(__('You cannot add a user in administrators group', true), 'warning');
                		$this->redirect(array('action'=>'index'));
            		}
            
            		$p = $this->data['User']['password'];
            		$this->data['User']['password'] = $this->__makePassword($p, $p);
            
            		$this->User->create();
            		if ($this->User->save($this->data)) {
                		$this->Session->setFlash(__('The User has been saved', true), 'success');
                		$this->redirect(array('action'=>'index'));
            		} else {
                		$this->Session->setFlash(__('The User could not be saved. Please, try again.', true), 'error');
            		}
		
        	}
        	$this->data['User']['password'] = '';
       	$groups = $this->User->Group->find('list');
        	$this->set(compact('groups'));
	}

	function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid User', true));
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->User->read(null, $id);
        
        // check if user allow to edit (only an admin can edit an admin)
        $gr = Set::extract($user, "Group.{n}.id");
        
        if (in_array(1, $gr) and !in_array(1, $this->Authake->getGroupIds())) {
            $this->Session->setFlash(__('You cannot edit a user in administrators group', true), 'warning');
            $this->redirect(array('action'=>'index'));
        }
        
        if (!empty($this->data)) {
            // only Admin (id 1) can modify its profile (for security reasons)
            if ($id == 1 && $this->Authake->getUserId() != 1) {
                $this->Session->setFlash(__('Only the admin can change its profile!', true), 'warning');
                $this->redirect(array('action'=>'index'));
            }
            
            // only an admin can make an admin
            if($this->data['Group']['Group'] == ''){
              $this->data['Group']['Group'] = array();
            }
            
            if (
                isset($this->data['Group']['Group']) and
                in_array(1, $this->data['Group']['Group']) and
                !in_array(1, $this->Authake->getGroupIds())
                ) {
                $this->Session->setFlash(__('You cannot add a user in administrators group', true), 'warning');
                $this->redirect(array('action'=>'index'));
            }

            // check if pwd changed
            if ($p = $this->data['User']['password'])
                $this->data['User']['password'] = $this->__makePassword($p, $p);
            else
                unset($this->data['User']['password']);

            if (empty($this->data['Group']))
                $this->data['Group']['Group'] = array(); // delete user-group relation if selection empty

            unset($this->data['User']['username']); // never change the login

            // save user
            if ($this->User->save($this->data)) {
                $this->Session->setFlash(__('The User has been saved', true), 'success');
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('The User could not be saved. Please, try again.', true), 'error');
            }
        }
        
		// show edit form
        $this->data = $user;
        $this->data['User']['password'] = '';

        // find groups
        $groups = $this->User->Group->find('list');
        unset($groups[0]); // remove group 0 (everybody)
        $this->set(compact('groups'));
	}

	function delete($id = null) {
        // check if user in admins group
        $user = $this->User->read(null, $id);
        
        if (!$id || $id == 1) {
            $this->Session->setFlash(__('Invalid id for User', true), 'error');
            $this->redirect(array('action'=>'index'));
        }
        
        // check if user allow to edit (only an admin can edit an admin)
        $gr = Set::extract($user, "Group.{n}.id");
        
        if (in_array(1, $gr) and !in_array(1, $this->Authake->getGroupIds())) {
            $this->Session->setFlash(__('You cannot delete a user in administrators group', true), 'warning');
            $this->redirect(array('action'=>'index'));
        }

        if ($this->User->delete($id)) {
            $this->Session->setFlash(__('User deleted', true), 'success');
            $this->redirect(array('action'=>'index'));
        }
	}
}
?>