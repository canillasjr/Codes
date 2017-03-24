<?php

	/* saving data to database */

	function dbsave( $table = '', $values = '' ){

		try{

			$cmd		=	new PDO('mysql:host=localhost;dbname=timberpo_wordpress', 'timberpo_wp', 'E()B%b)Jz{~8');

			$query		=	$cmd->prepare('INSERT INTO '.$table.' VALUES('.$values.')');

			$cmd->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			print_r($query);

			$query->execute();

			return 'Your booking has been successfully done!';

		}catch( PDOException $e ){

			echo $e->getMessage();

		}

	}

	/* Updating data to database */

	function dbupdate( $table = '', $new_values = '', $conditions ){

		try{

			$cmd		=	new PDO('mysql:host=localhost;dbname=timberpo_wordpress', 'timberpo_wp', 'E()B%b)Jz{~8');

			$query		=	$cmd->prepare('UPDATE '.$table.' SET '.$new_values.' '.$conditions);

			$cmd->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$query->execute();

			return "Updated!";

		}catch( PDOException $e ){

			echo $e->getMessage();

		}

	}

	/* Query data from database and return data into json format */

	function dbquery( $table, $filter, $conditions ){

		try{

			$return		=	'';

			$cmd		=	new PDO('mysql:host=localhost;dbname=timberpo_wordpress', 'timberpo_wp', 'E()B%b)Jz{~8');

			$query		=	$cmd->prepare('SELECT '.$filter.' FROM '.$table.' '.$conditions);

			$cmd->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$query->execute();

			$return		=	$query->fetchAll(PDO::FETCH_ASSOC);

			return json_encode($return);

		}catch( PDOException $e ){

			echo $e->getMessage();

		}

	}

	/* Get the last ID from the table */

	function gatEtastId( $table, $filter, $conditions ){

		try{

			$return		=	'';

			$cmd		=	new PDO('mysql:host=localhost;dbname=timberpo_wordpress', 'timberpo_wp', 'E()B%b)Jz{~8');

			$query		=	$cmd->prepare('SELECT '.$filter.' FROM '.$table.' '.$conditions);

			$cmd->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$query->execute();

			while($result = $query->fetch(PDO::FETCH_OBJ)){

				$return = $result->extra_task;

			}

			return $return;

		}catch( PDOException $e ){

			echo $e->getMessage();

		}

	}

	/* Checking User if it is existed in the database */

	function checkingUser( $table, $filter, $conditions ){

		try{

			$return		=	'';

			$cmd		=	new PDO('mysql:host=localhost;dbname=timberpo_wordpress', 'timberpo_wp', 'E()B%b)Jz{~8');

			$query		=	$cmd->prepare('SELECT '.$filter.' FROM '.$table.' '.$conditions);

			$cmd->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$query->execute();

			while($result = $query->fetch(PDO::FETCH_OBJ)){

				$return = $result->id;

			}

			return $return;

		}catch( PDOException $e ){

			echo $e->getMessage();

		}

	}

	function userRatingExist( $table, $filter, $conditions ){

		try{

			$return		=	'';

			$cmd		=	new PDO('mysql:host=localhost;dbname=timberpo_wordpress', 'timberpo_wp', 'E()B%b)Jz{~8');

			$query		=	$cmd->prepare('SELECT '.$filter.' FROM '.$table.' '.$conditions);

			$cmd->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$query->execute();

			while($result = $query->fetch(PDO::FETCH_OBJ)){

				$return = $result->rating_id;

			}

			return $return;

		}catch( PDOException $e ){

			echo $e->getMessage();

		}

	}

	/* Get the last Inserted ID from the database */

	function lastInsertedId( $table, $filter, $conditions ){

		try{
			$return		=	'';
			$cmd		=	new PDO('mysql:host=localhost;dbname=timberpo_wordpress', 'timberpo_wp', 'E()B%b)Jz{~8');
			$query		=	$cmd->prepare('SELECT '.$filter.' FROM '.$table.' '.$conditions);
			$cmd->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query->execute();

			while($result = $query->fetch(PDO::FETCH_OBJ)){

				$return = $result->id;

			}

			return $return;

		}catch( PDOException $e ){

			echo $e->getMessage();

		}

	}

?>
