# Jornada Almuerzo Backend

## About

This is a backend api without authentication for the crud operations supporting the frontend application with the logic and database access.
This software was developed with Laravel 9.3.8 using model migrations.

## Requirements
- PHP 7.4 / Programing Language
- MySQl or PostGress / Database Engine
- Composer / Package manager for PHP
- Laravel 9.3.8 / MVC framework 

## Getting Started
Clone this respository
`git clone https://github.com/macloviw/JornadaAlmuerzoBackend.git`

Install the dependencies
`composer install`

Run the migrations
`php artisan migrate`

*If you want some example items in the database: optional
`php artisan db:seed`

Run the application
`php artisan serve`


## Api EndPoints

The next endpoint has the basic Crud operations for the Entregas table and 3 variations for filtering and ordering queries.

### Endpoint list
- GET 'api/entregas'    Get all records limited by 10 order by IdEntrega in ascending ordering
- GET 'api/entregas/{start?}/{limit?}/{orderby?}/{order?}' Get all records starting by 10 or optional parameter limited by 10 or optional parameter order by IdEntrega or optional parameter in order asc or by the optional parameter.
- GET 'api/{id}' Get record by IdEntrega
- GET 'api/entregas/find?q={searchcriteria}' Search record filtering by Nombre, Apellidos or CorreoElectronico
- POST 'api/entregas' Create a new record with required fields (Nombre, Apellidos, CorreoElectronico, Edad, ComidaEntregada)
- PUT 'api/entregas' Update an existing record.
- DELETE 'api/delete' Delete record based on IdEntrega

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
