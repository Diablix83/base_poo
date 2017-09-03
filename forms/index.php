<?php
	require_once('champ.class.php');
	require_once('input.class.php');
	require_once('textarea.class.php');
	require_once('button.class.php');
	require_once('form.class.php');


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

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Formulaire d'inscription</title>
		<style>
			input, textarea{
				display: block;
			}
		</style>
	</head>
	<body>
		<header>
			<h1>Formulaire d'inscription</h1>
		</header>
		<main>
			<?= $form ?>

		</main>
		<script type="text/javascript" src="script/script.js"></script>
	</body>
</html>