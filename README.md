# Getting started
This is laravel admin dashboard app, using screenlock, role and permission, websockets,livewire, laravel breadcrumbs, Offline Component

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/9.x)

Alternative installation is possible without local dependencies relying on [Docker](#docker). 

Clone the repository

    git clone https://github.com/onlinesandy/l9-websocket-admin.git

Switch to the repo folder

    cd l9-websocket-admin

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate
    
install the node modules packages 

    npm install    

Start the local development server

    php artisan serve
    npm run dev

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone https://github.com/onlinesandy/l9-websocket-admin.git
    cd l9-websocket-admin
    composer install
    cp .env.example .env
    php artisan key:generate 
    npm install
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

## Database seeding

**Populate the database with seed data with relationships which includes users, articles, comments, tags, favorites and follows. This can help you to quickly start testing the api or couple a frontend and start using it with ready content.**

Open the Seeders file and set the property values as per your requirement

    database/seeders/CreateAdminUserSeeder.php
    database/seeders/PermissionTableSeeder.php
    

Run the database seeder and you're done

    php artisan db:seed

***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:refresh
    
## Docker

To install with [Docker](https://www.docker.com), run following commands:

```
git clone https://github.com/onlinesandy/l9-websocket-admin.git
cd l9-websocket-admin
cp .env.example.docker .env
docker run -v $(pwd):/app composer install
cd ./docker
docker-compose up -d
docker-compose exec php php artisan key:generate
docker-compose exec php php artisan migrate
docker-compose exec php php artisan db:seed
docker-compose exec php php artisan serve --host=0.0.0.0
```

The api can be accessed at [http://localhost:8000/api](http://localhost:8000/api).

# Code overview

## Dependencies

- [laravel-breeze](https://laravel.com/docs/9.x/starter-kits#breeze-and-blade) - For Login UI

- [laravel-websockets](https://beyondco.de/docs/laravel-websockets/getting-started/introduction) - Implemented Laravel Web sockets
- [laravel-livewire](https://laravel-livewire.com) - For Real Time Data 
- [laravel-excel](https://docs.laravel-excel.com/3.1/exports/export-formats.html) - For Excel/CSV Import/Export 
- [laravel-role-permission](https://spatie.be/docs/laravel-permission/v5/installation-laravel) - For Role and Permission
- [laravel-breadcrumbs](https://github.com/diglactic/laravel-breadcrumbs) - For Breadcrumbs
- [Laravel-Acquaintances](https://github.com/multicaret/laravel-acquaintances) - Friendship
- [Laravel-Userstamps](https://www.larablocks.com/package/wildside/userstamps) - Userstamps
- [Laravel-Visitor](https://github.com/shetabit/visitor) - Route Visitors


## Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.

----------
