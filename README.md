![Restler](https://github.com/Luracast/Restler/raw/master/public/examples/resources/Restler.png)

Basic Restler Application
=========================

Minimalistic api server boilerplate for [Luracast Restler](https://github.com/Luracast/Restler)

Restler is an api first microframework that offers better web api by design. Every branch in this repository contains different application templates to suit your needs.

Basic App provides the bare minimum to get started with restler development


Installation
------------

Make sure PHP 5.3.2 or above (at least 5.3.4 recommended to avoid potential bugs) is available on your server

[Composer](http://getcomposer.org/) is used to manage the dependencies. If you dont already have composer installed, we recommend installing it globally

### Install Composer

Instructions to install composer globally are available in [getcomposer.org](https://getcomposer.org/doc/00-intro.md#system-requirements)

### Install Basic Restler Application

You can run the following command on your terminal window to install the app

    composer create-project restler/application=dev-basic {app_name}

Replace `{app_name}` with the name of your application.

It will create a new folder and place all the needed files to get started.


What's in it?
-------------

Basic is a minimalistic app templates for api development. It has a sample api class called `Home` that has the following success message for the api root.


```json
{
    "success": {
        "code": 200,
        "message": "Restler is up and running!"
    }
}

```

On your development machine if you have PHP 5.4 and above, you can run the development server by running the `./serve` on the project root. This will run the php development server at port 8000 on localhost by default. If you need to run change that you can use the command line options as shown below

    ./serve --port=8888 -host=testserver.dev

This project also comes with swagger ui for testing and documenting the api. You can access that using the following url

http://localhost:8000/explorer


Next Steps
----------

There is only public api, you may want to add an auth class and add some protected api
