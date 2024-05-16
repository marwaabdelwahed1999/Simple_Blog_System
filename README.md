# Simple Blog System

This is a basic blog system where you can view, create, edit, and delete posts. It provides a straightforward interface for managing blog posts and viewing them.
## Backend Development

- Use PHP to handle server-side logic.
- CRUD operations for posts:
  - Displaying all posts.
  - Displaying a single post by its ID.
  - Creating a new post.
  - Editing an existing post.
  - Deleting a post.

## Frontend Interface

- Basic HTML interface to interact with the backend:
  - A page to list all blog posts (`index.php`).
  - A form to add a new post (`add_post.php`).
  - Edit and delete options for each post (only visible with admin privileges).
  - Edit post page (`edit_post.php`).
  - Single post page (`single_post.php`).

## Files Included

- `config.php`: MySQL PDO connection configuration.
- `crud.php`: Contains CRUD functions for posts.
- `index.php`: Displays all blog posts and provides options for editing and deleting posts.
- `add_post.php`: Form to add a new post.
- `edit_post.php`: Form to edit an existing post.
- `delete_post.php`: Deletes a post.
- `single_post.php`: Displays a single post.
- `blogdb.sql`: SQL script for database and table schemas.

## Setup

1. Clone this repository to your local machine.
2. Open phpMyAdmin 
3. Import the `blogdb.sql` file to your MySQL database to create the required table.
4. Update `config.php` with your MySQL database credentials.
5. Run `config.php` to Connect to the database.
6. run `index.php` to your local web server 

## Operation

1. Access the blog system by navigating to `index.php` on your web server.
2. You can view, add, edit, and delete blog posts from the provided interface.
