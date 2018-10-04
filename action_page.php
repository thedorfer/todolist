<html>

<?php

	require_once('db_connect.php');
	
	db();
	global $link;
	
?>

<head>
	<title>Todo List</title>
</head>
<body>

<?php
	//remove selected entries
	if(isset($_GET['delete'])){
		for($i=0; $i<sizeof($_GET['delete']); $i++){
			$id = $_GET['delete'][$i];
			$query = "DELETE FROM todos WHERE id = '$id'";
			$deleteTodo = mysqli_query($link, $query);
		}
	}
	
	if(empty($_GET['edit'])) header("Refresh:0; url=index.php");

?>

	<h1>Edit item to the Todo list</h1>
<?php

	
	if(isset($_GET['edit'])){
		for($i=0; $i<sizeof($_GET['edit']); $i++){
			$id = $_GET['edit'][$i];
			$query = "SELECT todoDescription FROM todos WHERE id = '$id'";
			$result = mysqli_query($link, $query);
			$row = mysqli_fetch_assoc($result);
			$description = $row['todoDescription'];
			
?>
					
		<form method="post" action="">
			<input name='todoDescription' type='text' size='90%' value='<?php echo $description; ?>'>
			<input name='todoID' type='hidden' value='<?php echo $id; ?>'>
			<input type='submit' name='submit' value='Submit'>
		</form>
		
<?php
		}
	}

?>

</body>
<?php
	if(isset($_POST['submit'])){
		$newDescription = $_POST['todoDescription'];
		
		//edit in database
		$query = "UPDATE todos SET todoDescription = '$newDescription' WHERE id = '$id' ";
		$insertTodo = mysqli_query($link, $query);
		if($insertTodo){
			header("Refresh:0; url=index.php");
		} else {
			echo 'Error adding task';
		}
		
	}

	mysqli_close($link);
?>
</html>