Todo List

Todo List is a simple to do list that allows for users to create basic todo lists that are ordered by the date they were created.  Users can add new tasks, edit existing tasks and remove tasks.

Prerequisites

The server must support both PHP and MYSQL databases.

Installing

1.	Copy all the files into the desired folder.

2.	Edit db_connect.php in the following sections

	$mysql_host = 'localhost';  //replace localhost with the url of your server
	
	$mysql_user = 'root';  //replace root with your mysql user login name
	
	$mysql_pw = ‘’;  //put your mysql server password between the quotes
	
3.	Configure the databases by running the setup.php file from your browser. ie. http://localhost/todolist/setup.php

Author

James Allendoerfer

License

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
