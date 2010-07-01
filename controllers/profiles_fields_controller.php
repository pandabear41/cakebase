<?php
class ProfilesFieldsController extends AppController {

	var $name = 'ProfilesFields';
	var $uses = array('Profile', 'ProfilesField');
       var $layout = 'authake';

	function admin_index() {
		$this->ProfilesField->recursive = 0;
		$this->set('profilesFields', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid profiles field', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('profilesField', $this->ProfilesField->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->ProfilesField->create();
			$sqlv = 'ALTER TABLE '. $this->Profile->table .' ADD `'.$this->data['ProfileField']['varname'].'` ';
                     $sqlv .= $this->data['ProfileField']['field_type'];
                     if ($this->data['ProfileField']['field_type']!='TEXT'&&$this->data['ProfileField']['field_type']!='DATE')
                     	$sqlv .= '('.$this->data['ProfileField']['field_size'].')';
                     $sqlv .= ' NOT NULL ';
                     if ($this->data['ProfileField']['default'])
                            $sqlv .= " DEFAULT '".$this->data['ProfileField']['default']."'";
                     else
                            $sqlv .= (($this->data['ProfileField']['field_type']=='TEXT'||$this->data['ProfileField']['field_type']=='VARCHAR')?" DEFAULT ''":" DEFAULT 0");
                     if (! $this->Profiles->query($sqlv)) {
				$this->Session->setFlash(__('The profiles could not be saved. Please, try again.', true));
			}
      
			if ($this->ProfilesField->save($this->data)) {
				$this->Session->setFlash(__('The profiles field has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profiles field could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid profiles field', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProfilesField->save($this->data)) {
				$this->Session->setFlash(__('The profiles field has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profiles field could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProfilesField->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for profiles field', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProfilesField->delete($id)) {
			$this->Session->setFlash(__('Profiles field deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Profiles field was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>