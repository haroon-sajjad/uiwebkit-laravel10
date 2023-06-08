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

: Download the git repository or clone it with below command

`git clone https://github.com/haroon-sajjad/uiwebkit-laravel10.git`

### Install Composer Packages

: Run the composer install by following command and wait to compelete the setup

`composer install`

> If composer is not installed on your computer, download it and and follow the instcutions from below URL:
> [Composer](https://getcomposer.org/)

### Install Node packages

Run the node.js installer to install the webpack dependencies. Wait till the process is compelete.

`npm install`

> If node.js is not installed on your computer, download it and and follow the instcutions from below URL:
> [Node.js](https://nodejs.org/)

### Vite Resources Build

Run vite with npx to build the resources

`npx vite build --watch`

> Only use `--watch` switch if you want to continuesly watch the build on every code save.

### Laravel Storage Linking

Link the storage directory with public directory so that asset() function work correctly. Use below command to build the link.

`php artisan storage:link`

### Run the Server

`php artisan serve`
