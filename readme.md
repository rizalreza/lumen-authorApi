# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](http://lumen.laravel.com/docs).


## How to use

**Clone repo**

	git clone https://github.com/rizalreza/lumen-authorApi

**Install the composer dependencies**
 
 	composer install

**Database Configuration**

	* Create new database
	* Edit credentials database on .env file
		DB_DATABASENAME=
		DB_USERNAME=
		DB_PASSWORD=

**Migrate**

	php artisan migrate

**Run**

	php -S localhost:8080 -t public


**Endpoint**

**Author**



| 		URL         | HTTP Method |               Operation                |
|:-----------------:| :---------: |:--------------------------------------:|
| /api/author      |  GET 	      | Returns an array of **author**        |
| /api/author/:id  |  GET        | Returns the **author** with id of :id |
| /api/author      |  POST       | Adds a new **author** and return it   |
| /api/author/:id  |  PUT        | Updates the **author** with id of :id |
| /api/author/:id  |  DELETE     | Deletes the **author** with id of :id |


**Book**



| 		URL         | HTTP Method |               Operation                |
|:-----------------:| :---------: |:--------------------------------------:|
| /api/book      |  GET 	      | Returns an array of **book**        |
| /api/book/:id  |  GET        | Returns the **book** with id of :id |
| /api/book       |  POST       | Adds a new **book** and return it   |
| /api/book/:id  |  PUT        | Updates the **book** with id of :id |
| /api/book/:id  |  DELETE     | Deletes the **book** with id of :id |

