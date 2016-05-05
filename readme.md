We are going to build a simple TODO application with Routes, Models, Controllers and Views (MVC)

Lets write a simple document for references

Database Schema:

		Table 1: User -> (USER MODEL)
				id,
				username,
				email
				password


		Table 2: Todo -> (TODO MODEL)
				id,
				user_id,
				title,
				content,
				created_at,
				updated_at
				is_deleted

Completed

Routes:
	We will define the routes needed for this entire application

	'/' -> GET(REQUEST) -> Basic Homepage route(view)

	'/login' -> GET(REQUEST) -> Returns simple login page(view)
	'/login' -> POST(REQUEST) -> Check if user exists and authenticated and redirect to accounts page(AUTH)
	'/signup' -> GET(REQUEST) -> Returns signup page(view)
	'/signup' -> POST(REQUEST) -> Create a new user and send him to account page(AUTH)
	'/logout' -> GET(REQUEST) -> Destroy Auth session and redirect to login or homepage


	'/todo' -> GET(REQUEST) -> Show all todo for logged in user
	'/todo' -> POST(REQUEST) -> Create new todo item 
	'/todo' -> PUT(REQUEST) -> To update a item in todo list
	'/todo' -> DELETE(REQUEST) -> To remove the item





See when ever u want to create a table
use this syntax

php artisan make:migration create_tablename_table


php artisan migrate 
	this command will run the up() in schema

php artisan migrate:rollback 
	this command will run the down() in schema


Now every table is called a MODEL

User table is called USER Model
TODO table is called TODO Model

	Lets create a new modal for TODO TABLE user table already have user model

	app/User.php -> its the user model

	Lets create TODO model using command
	php artisan make:model TODO

	app/Todo.php



Now lets define the routes

app/Http/routes.php