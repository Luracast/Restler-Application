![Restler](https://github.com/Luracast/Restler/raw/master/public/examples/resources/Restler.png)

Restler Application with Eloquent
=================================

Api server boilerplate with database support for [Luracast Restler](https://github.com/Luracast/Restler)

Restler is an api first micro framework that offers better web api by design.
 
Every branch in this repository contains different application templates to suit your needs.

Eloquent App provides laravel 4.2 structure and database support for your restler development


Installation
------------

Make sure PHP 5.4 or above is available on your server

[Composer](http://getcomposer.org/) is used to manage the dependencies. If you don't already 
have composer installed, we recommend installing it globally

### Install Composer

Instructions to install composer globally are available in [getcomposer.org](https://getcomposer.org/doc/00-intro.md#system-requirements)

### Install Eloquent Restler Application

You can run the following command on your terminal window to install the app

    composer create-project restler/application=dev-eloquent {app_name}

Replace `{app_name}` with the name of your application.

It will create a new folder and place all the needed files to get started.


What's in it?
-------------

Eloquent is a app templates that provides full laravel database functionality for your restler application.
Adds Migration, Seeding and Artisan support to Illuminate Database.


[Laravel](https://github.com/laravel/laravel) is a web application framework with expressive, elegant syntax. 
We extracted the database functionality from it and made it available for restler

The [Illuminate Database](https://github.com/illuminate/database) component is a full database toolkit for PHP, 
providing an expressive query builder, ActiveRecord style ORM, and schema builder. It currently supports MySQL, 
Postgres, SQL Server, and SQLite. We combined it with Illuminate FileSystem and Illuminate Console to make 
Artisan work with database related commands.

It has a sample api class called `Home` in `app/controllers` directory that has the following success message 
for the api root.


```json
{
    "success": {
        "code": 200,
        "message": "Restler is up and running!"
    }
}

```

On your development machine, you can run the development server by 
running the `php artisan serve` on the project root. This will run the php development server at 
port 8000 on localhost by default. If you need to run change that you can use the command line 
options as shown below

    php artisan serve --port=8888 -host=testserver.dev

This project also comes with swagger ui for testing and documenting the api. You can access that 
using the following url

http://localhost:8000/explorer


#### How it works?

`index.php` in the public folder includes the `autoload.php` in `bootstrap` folder which internally 
uses composer autoloader. This enables lazy loading for all db related classes. Only when you call 
one of the DB related class, database engine is initialized.

#### More Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs/4.2). 
Refer to all database related sections from there.


