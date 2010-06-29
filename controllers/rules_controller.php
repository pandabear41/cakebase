<?php
class RulesController extends AppController {

	var $name = 'Rules';
	var $uses = array('Rule');

function index($tableonly = false) {
        $this->Rule->recursive = 0;
        $this->set('rules', $this->Rule->find('all'));
        $this->set('tableonly', $tableonly);
    }
    
    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid Rule.', true), 'error');
            $this->redirect(array('action'=>'index'));
        }
        $this->set('rule', $this->Rule->read(null, $id));
    }


    function add() {
        if (!empty($this->data)) {
            $this->Rule->create();
            if ($this->Rule->save($this->data)) {
                $this->Session->setFlash(__('The Rule has been saved', true), 'success');
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('The Rule could not be saved. Please, try again.', true), 'warning');
            }
        }
        
        $groups = $this->Rule->Group->find('list');
        $this->set(compact('groups'));
        
        // fix permissions dropdown menu
        $permissions = $this->Rule->getEnumValues('permission');
        $this->set(compact('permissions'));
    }

    function edit($id = null) {//$this->Rule->getEnumValues('permission'));
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid Rule', true), 'error');
            $this->redirect(array('action'=>'index'));
        }
        if ($id == '1') { // do not touch to the admin rule
            $this->Session->setFlash(__('Impossible to edit this rule!', true), 'warning');
            $this->redirect(array('action'=>'index'));
        }
        if (!empty($this->data)) {
            if ($this->Rule->save($this->data)) {
                $this->Session->setFlash(__('The Rule has been saved', true), 'success');
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('The Rule could not be saved. Please, try again.', true), 'warning');
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Rule->read(null, $id);
        }
        
        // fix groups dropdown menu
        $groups = $this->Rule->Group->find('list');
        $this->set(compact('groups'));
        
        // fix permissions dropdown menu
        $permissions = $this->Rule->getEnumValues('permission');
        $this->set(compact('permissions'));
    }

    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for Rule', true), 'error');
        } else
        if ($id == '1') { // do not touch to the admin rule
            $this->Session->setFlash(__('Impossible to delete this rule!', true), 'warning');
        } else
        if ($this->Rule->delete($id)) {
            $this->Session->setFlash(__('Rule deleted', true), 'success');
        }
        $this->redirect(array('action'=>'index'));
    }

    function up($id1, $id2) { // swap order of two rules
        if ($id1 != 1 && $id2 != 1) {
            $r1 = $this->Rule->findById($id1);
            $r2 = $this->Rule->findById($id2);
            $order = $r1['Rule']['order'];
            $r1['Rule']['order'] = $r2['Rule']['order'];
            $r2['Rule']['order'] = $order;
            $this->Rule->save($r1);
            $this->Rule->save($r2);
        }
        $this->redirect(array('action'=>'index'));
    }


}
?>