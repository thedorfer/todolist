<?php
	require_once('db_connect.php');
?>

<html>
<head>
	<title>Todo list</title>
</head>
<body>
	
	<h1>Add item to the Todo list</h1>
		
		<form method="post" action="index.php">
			<input name='todoDescription' type='text' size='90%'>
			<input type='submit' name='submit' value='Submit'>
		</form>

		
	<h1>Todo list</h1>
	
	<form action='action_page.php'><ol>
<?php
	//connect to database and pull data
	db();
	global $link;
	$query = 'SELECT id, todoDescription, date FROM todos';
	$result = mysqli_query($link, $query);

	$count = 0;
	
	//check if there’s any data inside the table
	if(mysqli_num_rows($result) >= 1){
		$list = array();
			while($row = mysqli_fetch_array($result)){
				$id = $row['id'];
				$description = $row['todoDescription'];
				$date = $row['date'];
			
				$count++;
				
				$list[$count] = array($id, $description, $date);
				
				sort($list);
			}
		for ($i = 0; $i<sizeof($list); $i++){
			$id = $list[$i][0];
			$date = $list[$i][2];
			$description = $list[$i][1];
?>

		<li>
			
			<?php echo "$date " ?> - <input name='todoDescription' type='text' size='50%' value='<?php echo "$description " ?>' readonly> <button name='edit[]' value='<?php echo $id; ?>' type='submit'> Edit <button name='delete[]' value='<?php echo $id; ?>' type='submit'> Remove
		</li>

<?php
		}
	}
?>
</ol>
	</form>
</body>

<?php
	if(isset($_POST['submit'])){
		$description = $_POST['todoDescription'];
		
		//connect to database
		db();
		global $link;
		
		//insert into database
		$query = "INSERT INTO todos(todoDescription, date) VALUES ('$description', now())";
		$insertTodo = mysqli_query($link, $query);
		if($insertTodo){
			header("Refresh:0");
		} else {
			echo 'Error adding task';
		}
		
		//close database link
		mysqli_close($link);
	}
?>
</html>