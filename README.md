<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
<p align="center">
</p>

<div align="center">
<a href="https://vuejs.org/" target="_blank"><img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/vuejs-original-wordmark.svg" alt="Vue.js" height="50" /></a>
</div>

### Brief instructions for installing and configuring the educational project

* composer create-project laravel/laravel:^8.0 example-app
* In file .env input value and setting database
* php artisan migrate
* composer require laravel/ui
* php artisan ui:auth
* php artisan ui bootstrap
* php artisan ui vue
* npm update vue-loader
* npm run dev
* php artisan serve
* npm run watch (each change starts the build automatically)

### Additional actions in case of errors...

* php artisan route:cache
* php artisan route:clear
* php artisan config:clear
* php artisan cache:clear
* php artisan optimize

### For tests:

* cp .env .env.testing
* php artisan make:test TicketTest --unit
* php artisan migrate --seed --env=testing
* php artisan migrate:refresh --seed --env=testing
* composer dump-autoload
* php artisan test

### Package.json for install mix & start project:

{
"private": true,
"scripts": {
"dev": "npm run development",
"development": "cross-env NODE_ENV=development node_modules/webpack/bin/webpack.js --progress
--config=node_modules/laravel-mix/setup/webpack.config.js",
"watch": "npm run development -- --watch",
"watch-poll": "npm run watch -- --watch-poll",
"hot": "cross-env NODE_ENV=development node_modules/webpack-dev-server/bin/webpack-dev-server.js --inline --hot
--disable-host-check --config=node_modules/laravel-mix/setup/webpack.config.js",
"prod": "npm run production",
"production": "cross-env NODE_ENV=production node_modules/webpack/bin/webpack.js --no-progress
--config=node_modules/laravel-mix/setup/webpack.config.js"
},
"devDependencies": {
"@popperjs/core": "^2.10.2",
"axios": "^0.19",
"bootstrap": "^5.1.3",
"cross-env": "^7.0",
"laravel-mix": "^6.0.10",
"lodash": "^4.17.19",
"resolve-url-loader": "^3.1.2",
"sass": "^1.32.11",
"sass-loader": "^10.4.1",
"vue": "^2.6.12",
"vue-loader": "^15.2.2",
"vue-router": "^3.5.3",
"vue-template-compiler": "^2.6.12"
}
}
