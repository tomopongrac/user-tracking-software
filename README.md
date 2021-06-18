# User tracking software

## About aplication

Application track visits to some pages.

In admin area you can see all data about users who visits pages.

## Requirements

Application is created with Laravel 8 and all requirements you can check on [this link](https://laravel.com/docs/7.x/installation#server-requirements).

## Installation

Navigate to folder where you want to install application and then type this command

```
git clone https://github.com/tomopongrac/user-tracking-software.git
```

Enter to the folder

```
cd user-tracking-software
```

We will be using sqlite database so you must create file for database with command
```
touch ./database/database.sqlite
```

Create .env file

```
cp .env.example .env
```

Install packages

```
composer install
```

Generate api key

```
php artisan key:generate
```

In your .env file change database configuration variables to this

```
DB_CONNECTION=sqlite
DB_HOST=
DB_PORT=
DB_DATABASE=/absolute/path/to/database.sqlite
DB_USERNAME=root
DB_PASSWORD=
```

To copy absolute path to database/database.sql to clipboard use this command (this command is for terminal on MacOS)

```
pwd | pbcopy
```

Now you can migrate your database with this command

```
php artisan migrate
```

Start server with

```
php artisan serve
```

And then open this link [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser

## Usage

To enter to admin area first you need to register new account. That you can do by entering link [http://127.0.0.1:8000/register](http://127.0.0.1:8000/register)

If you have account login page is on link [http://127.0.0.1:8000/login](http://127.0.0.1:8000/login)
