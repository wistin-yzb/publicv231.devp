<?php

namespace app\backend\controller;

use \think\View;
use think\Controller;

class Index extends controller {
	
	// index
	public function index() {
		$view = new View ();
		return $view->fetch ();
	}
	
	// login
	public function login() {
		$view = new View ();
		return $view->fetch ();
	}
	
	// welcome
	public function welcome() {
		$view = new View ();
		return $view->fetch ();
	}
	
	// loginout
	public function loginout() {
		$systime = time ();
		$this->redirect ( 'backend/index/login', [ 
				'token' => 'ffdffferr023dvwiwiwixin;~*)999adf' . $systime 
		] );
	}
}
