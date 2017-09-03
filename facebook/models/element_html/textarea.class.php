<?php
	class Textarea extends Champ{

		public function __construct($name, $placeholder = ' '){
			$this->name = $name;
			$this->placeholder = $placeholder;
		}

		public function __toString(){
			return "<textarea name='$this->name' placeholder='$this->placeholder'></textarea>";
		}
	}
?>