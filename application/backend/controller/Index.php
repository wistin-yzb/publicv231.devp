<?php

namespace app\backend\controller;

use \think\View;
use \think\Controller;
use think\Db;

class Index extends controller {
	
	// index
	public function index() {		
		$data = Db::name('test')->where('id',1)->find();
		//助手函数
// 		$data = db('test')->where('id',1)->find();
// 		echo '<pre>';
// 		var_export($data);		
		$view = new View ();
		return $view->fetch ();
	}
	
	// login
	public function login() {
		$view = new View ();
		return $view->fetch ();
	}
	
	//checklogin
	public function checklogin() {
		$account = input ( 'post.account' );
		$password = input ( 'post.password' );
		if ($account == "" || $password == "") {
			$this->error ( '请填写登录信息' );
			exit ();
		}
		if($account!='fans2019admin'&&$password!='fans2019passwd'){
			$this->error ( '登录信息填写错误' );
			exit ();
		}
		$captcha = input ( 'post.captcha' );
		if (! captcha_check ( $captcha )) {
			$this->error ( '验证码错误' );
			exit ();
		}
		$this->redirect ( 'backend/index/index');
	}
	
	// welcome
	public function welcome() {
		$view = new View ();		
		$view->lastLoginIp = $this->request->ip();
		$view->lastLoginTime = date('Y-m-d H:i:s',time());
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
