# UI Webkit

## Application Requirmetns

| Software | Version |
| -------- | ------- |
| PHP      | 8.1.13  |
| Laravel  | 10.13.2 |
| Composer | 2.5.7   |
| Node.js  | 4.18.1  |
| NPM/NPX  | 8.19.2  |

## Installation Instructions

### Download / Clone Git Repository

Download the git repository or clone it with below command

```shell
git clone https://github.com/haroon-sajjad/uiwebkit-laravel10.git
```

and change directory 

```shell
cd uiwebkit-laravel10
```

### Change ENV Variable

Before running `composer install`:

1. Create MySql database `ui_webkit` or whatever name you decide.
2. Rename `.env.example` to `.env`.
3. Change databse conguration variables according to your

```Dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=ui_webkit
    DB_USERNAME=root
    DB_PASSWORD=
```

### Install Composer Packages

Run the composer install by following command and wait to compelete the setup

```shell
composer install
```

> If composer is not installed on your computer, download it and and follow the instcutions from this URL:
> [Composer](https://getcomposer.org/)

### Generate Key

Run below command to generate application key.

```shell
php artisan key:generate
```

### Populate Database

Populate database with default tables and data by running below command

```shell
php artisan migrate
```

### Place Images

This repository contains a `images.zip` file. Unzip it and place all images under `/storage/app/images` directory. Create images directory if not exists.

### Install Node packages

Run the node.js installer to install the webpack dependencies. Wait till the process is compelete.

```shell
npm install
```

> If node.js is not installed on your computer, download it and and follow the instcutions from this URL:
> [Node.js](https://nodejs.org/)

### Vite Resources Build

Run vite with npx to build the resources

```shell
npx vite build --watch
```

> Only use `--watch` switch if you want to continuesly watch the build on every code save.

### Laravel Storage Linking

Link the storage directory with public directory so that asset() function work correctly. Use below command to build the link.

```shell
php artisan storage:link --force
```

### Run the Server

```shell
php artisan serve
```
