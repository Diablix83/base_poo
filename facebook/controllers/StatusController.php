<?php
	class StatusController extends Controller{

		public $modelName = 'StatusModel';

		public function index(){
			$id = $_GET['id'];
			$statusAll = $this->model->all();
			require_once('views/status/liste.phtml');
		}

		public function show(){
			$id = $_GET['id'];
			$status = $this->model->find($id);
			require_once('views/status/details.phtml');
		}
	}
?>