![Tests](https://github.com/anthony-mills/flash_cards/workflows/Tests/badge.svg?branch=master)

## About Flash Cards

Learn subject matter quick with this Digital Flash Card application built with the PHP Laravel framework. It aims to help you to remember information in a more time efficent manner. 

### Why Do I Want This?

A flash card is a tool that aids the [process of memorisation](https://en.wikipedia.org/wiki/Flashcard). Recently while studying to sit an AWS certification I was haunted by a feeling that key facts were just not sticking in my memory as well as they could. Sure I could revise the content again but what if it didn't stick the next time around either? 

A new approach was needed to quickly revise key facts without wasting time having to go over the same content in its entirety. So I decided to create this flash card tool with Laravel so I could create my own sets of topics and related cards to study.

It frontend allows unauthenticated users to cycle though a subset of cards under each category available. While a simple backend admin system that allows the creation and management of cards and their associated categories.

### Live Demo

A demo version of the [application is online with AWS related flash cards](https://aws.anthonymills.dev) to play with.

### Screenshots

![Viewing Cards](/screenshots/cards.gif?raw=true "Looking at flash cards")

Select a Card Set to Study

![Topic Selection](/screenshots/1.png?raw=true "Select card set to study")

Showing Card Question

![Viewing Question](/screenshots/2.png?raw=true "Viewing Question")

Showing Answer on Card

![Showing Answer](/screenshots/3.png?raw=true "Showing Answer")

Saved Cards in Admin Panel

![Stored Cards](/screenshots/4.png?raw=true "Stored Cards")

Card Creation in Admin Panel

![Card Creation](/screenshots/5.png?raw=true "Card Creation")

### Text Effects

By adding bold and underline styles to your card text in the editor will add effects to the text on the card.

![Bold - Adds a highlighter type effect to text.](/screenshots/highlight.png?raw=true "Bold - Adds a highlighter type effect to text.")

![Underline - Will underline text in red.](/screenshots/underline.png?raw=true "Underline - Will underline text in red")

### Requirements 

The application is created with Laravel 7.

So an environment running PHP versions 7.2.5 and above is required.

Along with a MySQL server to hold the flash cards and categories.

### Getting Started

*composer install* 

*cp .env.example .env*

*./artisan key:generate*

Edit the newly created .env file and add the database configuration values relevant to your environment.

*./artisan migrate:seed*
*./artisan db:seed*

### Test User Account

A test user is created with the following credentials:

**User:** test.user@test.com

**Password:** 2ht4eqx0

A test admin account can also be accessed with the following credentials:

**User:** test.admin@test.com

**Password:** 2ht4eqx0

### Credits

* Flash card presentation code was adapted from [Curtis Blackwell's Flash Cards](https://github.com/curtisblackwell/flash_cards) project.

* Text editor for creating and editing the flash card content hails from the [Summernote project](https://summernote.org/).

* Big props also go out to the [Laravel Framework](https://laravel.com/) for making a project like this so simple to build.

### Licence

Copyright (C) 2023 [Anthony Mills](http://www.anthony-mills.com)

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
