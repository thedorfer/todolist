# Todo List

A legacy PHP and MySQL CRUD application for creating, editing, organizing, and deleting personal task items. This project is kept as an early full-stack web application sample and portfolio archive.

## Features

- Create new task items
- Edit existing tasks
- Delete completed or unwanted tasks
- Store task data in a MySQL database
- Display tasks ordered by creation date

## Technical stack

- PHP
- MySQL
- HTML/CSS
- Server-side form handling
- Basic relational database setup

## What this project demonstrates

This project shows foundational full-stack development concepts:

- Relational data persistence
- Basic CRUD application design
- Server-side scripting
- Database connection configuration
- Simple installation/setup documentation

## Local setup

The server must support PHP and MySQL.

1. Copy the project files into the desired web folder.
2. Edit `db_connect.php` with the appropriate MySQL host, username, and password.
3. Run `setup.php` from the browser to configure the database tables.

Example:

```text
http://localhost/todolist/setup.php
```

## Security note

This is a legacy learning/project archive and should not be deployed publicly without modernization. A production-ready version should add stronger credential management, prepared statements, server-side validation, CSRF protection, authentication, and updated PHP security practices.

## Portfolio positioning

This repository is best viewed as an early example of practical application development and database-backed web workflows. It complements more recent enterprise experience with Oracle PL/SQL, system integration, backend automation, data pipelines, and API-driven workflows.

## Author

James Allendoerfer  
Senior Integration Developer | Oracle PL/SQL | Backend Systems | Data Engineering

## License

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
