<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {
    var $helpers = array('Time', 'Htmlbis','Menu');
    var $components = array('DebugKit.Toolbar','Session','Authake');

    function __makePassword($password1, $password2) {
        if ($password1 != $password2) {
            $this->Session->setFlash(__('The two passwords do not match!', true), 'error');
            return false;
        }
        return md5($password1);
    }

    function beforeFilter() { //pr($this);
	 if ($this->Authake->isLogged()){ // Checking for the SESSION - Proceed only if MEMBER/USER is logged in.
                $this->loadModel('User'); // Loading MEMBER Model
                
                // UPDATE MEMBER VISIT TIME
                $last_visit = date('Y-m-d H:i:s', time());
                $this->User->updateAll(array('User.lastvisit' => '"'.$last_visit.'"'), array('User.id' => $this->Authake->getUserId()));
	 }
        $this->Authake->beforeFilter($this);

        return true;
    } // end beforeFilter()


}
