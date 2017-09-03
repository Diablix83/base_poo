<?php
	class Form{

		public $action;
		public $method;
		private $content = [];

		public function __construct($action = '', $method = 'POST'){
			$this->action = $action;
			$this->method = $method;
		}

		public function __toString(){
			$html = "<form action='$this->action' method='$this->method'>";

			foreach ($this->content as $champ) {
				$html .= $champ;
			}
			$html .= "</form>";
			return $html;
		}

		public function addContent($content){
			$this->content[] = $content;
		}
	}
?>