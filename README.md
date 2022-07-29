<p align="center"><img src="https://www.remotecompany.com/assets/remote-company-logo.svg" width="400"></p>

# Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites
What things you need to install the software and how to install them

* [Composer](https://getcomposer.org/download/) - Download the php dependency manager
* npm
```
npm install npm@latest -g
```
### Installation

1. Clone  development repo
```sh
git clone remotecompany  https://github.com/KenMutisya/remotecompany
```
2. Install Composer dependencies
```sh
composer install
```
3. Install NPM packages
```sh
npm install
```
3. Install NPM packages
```sh
npm run dev / npm run prod
```
4. Create a .env file
    * Copy content of env.example  to .env  file & edit database configuration.

5. Cd into the project folder

6. Run `php artsian key:generate`

7. Run `php artisan migrate`
7. Run `php artisan serve --port 8000`
8. Visit http://localhost:8000/

## Running the tests

To run tests:

`php artisan test`

## Built With

* [Laravel](http://www.laravel.com/) - Laravel
* [Vue JS](https://maven.apache.org/) - Vue JS
* [MySQL](https://www.mysql.com/) - MySQL

## Authors

* **Kennedy Mutisya** - *Full Stack Developer* - [Kennedy Mutisya](https://github.com/kenmush)

