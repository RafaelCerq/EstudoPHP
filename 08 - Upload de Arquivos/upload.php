<?php


	var_dump($_FILES['arquivo']);
	
	var_dump(move_uploaded_file($_FILES['arquivo']['tmp_name'], __DIR__ .'/arquivo.jpg'));