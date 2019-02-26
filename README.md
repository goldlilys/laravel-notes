# laravel-notes

1. To run the app, Composer and Laravel must be installed first

https://laravel.com/docs/5.7#installing-laravel

2. Use the command line, go to the /notes/notes directory

3. Type

php artisan serve

That will output something similar to:

goldlilys:~/dev/demos/notes/notes\$ php artisan serve
Laravel development server started: <http://127.0.0.1:8000>

4. Click on the server link

5. You'll be able to visit every page, except for the Notes page which requires the MySQL to be setup correctly. You'll have to modify the /config/database.php connections > mysql section with the unix_socket settings so that Laravel sees the MySQL connection ... if it's set to your localhost environment, this is probably not needed so it can be commented out or use the default

env('DB_SOCKET', '')

6. Modify the .env file in the /notes/notes directory and make sure the DB_CONNECTION values matches your database connections

7. Created a notes table with some data stored and must be imported using the gzip file provided, OR create and populate a notes table yourself.

8. Once laravel is able to connect to the database, you'll be able to visit the http://127.0.0.1:8000/notes page with the Notes app
