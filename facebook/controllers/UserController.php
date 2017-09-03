<?php
	class UserController extends Controller{

		public $modelName = 'UsersModel';

		public function index(){
			$users = $this->model->all();
			require_once('views/users/liste.phtml');
		}

		public function show(){
			$id = $_GET['id'];
			$user = $this->model->find($id);
			require_once('views/users/details.phtml');
		}
	}
?>