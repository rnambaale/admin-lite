## Setup

### [Generate SSH Keys](https://git-scm.com/book/en/v2/Git-on-the-Server-Generating-Your-SSH-Public-Key)

`ssh-keygen -t rsa -C "your.email@example.com" -b 4096`

Upload public key; _id_rsa.pub_, to Github for authentication

### [Clone Repo](https://git-scm.com/docs/git-clone)

`$ cd /var/www/html/`

`html$ git clone git@github.com:rnambaale/admin-lite.git`

### [Installing Dependencies](https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies)

`html# cd admin-lite`

`admin-lite$ composer install -v`

### Environment Variables

`admin-lite$ cp .env.example .env`

### Application key

`admin-lite$ php artisan key:generate`

### [Running Migrate](https://laravel.com/docs/master/migrations#running-migrations)

**Note**: Take precaution as the following command might `delete` existing database tables.

`php artisan migrate`

### [Directory Permissions](https://laravel.com/docs/master/installation#configuration)

`admin-lite$ chmod 777 -R bootstrap/cache`

`admin-lite$ chmod 777 -R storage`

### [The Public Disk](https://laravel.com/docs/master/filesystem#the-public-disk)

`admin-lite$ php artisan storage:link`

### Install & compile NodeJS dependencies

`admin-lite$ npm install && npm run dev`

### Local Development Server

`admin-lite$ php artisan serve`

Visit: [`http://127.0.0.1:8000`](http://127.0.0.1:8000)
