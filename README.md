# Basic CRM With Laravel

## Follow below instructions to setup project

Clone the repository

    https://github.com/priyankamackwan/WebPatriot-Basic-CRM-Laravel.git

Switch to the repo folder

    cd WebPatriot-Basic-CRM-Laravel

Create Folders if doesn't exist

	boostrap/cache, storage/framework/cache,storage/framework/views, storage/framework/sessions, storage/logs

Create a .env file

	cp .env.example .env

Generate a new application key

	php artisan key:generate

Install all the dependencies using composer

    composer install

Run the database migrations (Set the database connection in .env before migrating)

	php artisan migrate --seed

Start the local development server

    php artisan serve

You can now access the server at http://localhost:3000
