<?php
	class Input extends Champ{

		public $type;
		
		public function __construct($type, $name, $placeholder = ''){
			$this->type = $type;
			$this->name = $name;
			$this->placeholder = $placeholder;
		}

		public function __toString(){
			return "<input type='$this->type' name='$this->name' placeholder='$this->placeholder'/>";
		}
	}
?>