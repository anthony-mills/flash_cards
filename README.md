## About Flash Cards

Digital Flash Card application for aiding the memorisation of information. 

## Getting Started

composer install 

cp .env.example .env

./artisan key:generate

Edit the newly created .env file and add the database configuration values relevant to your environment.

./artisan migrate:seed
./artisan db:seed

## Test User Account

A test user is created with the follwing credentials:

User: test.user@test.com
Password: 2ht4eqx0

## Credits

The flash card presentation code was adapted from [Curtis Blackwell's Flash Cards](https://github.com/curtisblackwell/flash_cards) project.
