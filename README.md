## Starter project for realtime course on Udemy

**Created By :** Mahmoud Anwar
**Email :** Engsahaly@gmail.com

This is the main readme file for this starter project to use as initial starting point fro realtime course on Udemy

## Installation

To get started, clone this repository.

```
git clone https://github.com/engsahaly/starter_project_for_realtime.git
```

Next, copy your `.env.example` file as `.env` and configure your Database connection.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOUR-DATABASE-NAME
DB_USERNAME=YOUR-DATABASE-USERNAME
DB_PASSWORD=YOUR-DATABASE-PASSWROD
```

## Run Packages and helpers

You have to all used packages and load helpers as below.

```
composer install
npm install
npm run build
```

## Generate new application key

You have to generate new application key as below.

```
php artisan key:generate
```

## Run Migrations and Seeders

You have to run all the migration files included with the project and also run seeders as below.

```
php artisan migrate
php artisan db:seed
```

## Accessing Admin Panel

You can access admin login page using this url.

```
http://localhost:8000/admin/login
Email: admin@admin.com
Password: 123456789
```
