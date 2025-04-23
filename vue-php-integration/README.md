# Simple Vue.js-PHP integration

## Overview
Project showcases simple ***Local*** **PHP** backend + **Vue.js** frontend.

Front-end sends a single string message to the backend, and the backend sends it back.


## Project setup

* Requires XAMPP -> Apache module.
* Extact project to 'C:\xampp\htdocs', so that path to package.json will be 'C:\xampp\htdocs\vue-php-integration\package.json'
* Run ```npm install```
* Inside 'C:\Windows\System32\drivers\etc\hosts' add the lines:
```
127.0.0.1	vue-php-integration-front.test
127.0.0.1	vue-php-integration-back.test
```
* Inside 'C:\xampp\apache\conf\extra\httpd-vhosts.conf' add the lines:
```
 <VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/vue-php-integration/dist"
    ServerName vue-php-integration-front.test
 </VirtualHost>

  <VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/vue-php-integration/backend"
    ServerName vue-php-integration-back.test
 </VirtualHost>
```
* Run the Apache module

## Run Project
* DEVELOPMENT- run ```npm run serve```
* PRODUCTION- Input the following URL into the browser: ```vue-php-integration-front.test```
