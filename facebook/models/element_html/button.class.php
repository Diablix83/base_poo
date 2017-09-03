<?php
	class Button{

		public $type;
		public $content;

		public function __construct($type = 'submit', $content = 'Envoyer'){
			$this->type = $type;
			$this->content = $content;
		}

		public function __toString(){
			return "<button type='$this->type'>$this->content</button>";
		}

	}
?>