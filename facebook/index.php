<?php
	require_once('configuration.php');


	$task = 'index';

	if(!empty($_GET['task'])){
		$task = $_GET['task'];
	}
	/*
	$formContent = [
		$inputNom = new Input('text', 'nom', 'Votre nom de famille'),
		$inputPrenom = new Input('text', 'prenom', 'Votre prénom'),
		$inputEmail = new Input('email', 'email', 'Votre email'),
		$inputPassword = new Input('password', 'email', 'Votre password'),
		$textarea = new Textarea('adresse', 'Votre adresse'),
		$buttonEnvoyer = new Button()
	];

	$form = new Form();

	foreach ($formContent as $content) {
		$form->addContent($content);
	};
	*/

	$controller = new UserController();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php require_once('views/partial/nav.phtml'); ?>
		<?php $controller->$task(); ?>
		
	</body>
</html>