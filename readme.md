# PHRESCUE

PHRescue is a web application for the manage of animal shelters. It's based on Laravel 5.3 and Vue 2.
Currently in development

## Development setup

Installation and running of the application locally for development.

### Prerequisites

- PHP 7+
- MariaDB/MySQL
- Composer
- Node

### Backend setup

Run `composer install` followed by `composer update`.

Add a copy of `.env.example` as `.env` (if it wasn't already done by composer). Modify the following variables to your
local database setup ones (or create this ones in your database):
```
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

Run `php artisan migrate` to generate the application tables.

In case you want to populate the database with sample data, run `php artisan db:seed`.

Run `php artisan generate` to create the application key (it will be added to your `.env` file automatically).

### Frontend setup

To be able to compile/generate the javascript and css files:

Run `npm install`.

Run `gulp` to generate css and javascript files. In case that you want this files to be recompiled automatically, 
you can also run `gulp watch`.

### Execution

In order to run the application is recommended a full web server like Apache. The document root should point to 
the `/public` folder of the project.

For quick running of the application you can execute `php artisan serve`, this will run a basic web server in 
`localhost:8000`.

## License

PHRescue is open-sourced software (license pending)
