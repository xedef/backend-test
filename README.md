# Deskbookers Backend Test

Howdy, this exercise is in a smaller degree what your daily work at Deskbookers could be. We hope you find it interesting, and looking forward hearing from you.

## Requirements

For this exercise it's necessary to have a working Node/NPM/Yarn setup and a machine with PHP (CLI) support. You can use your own web server (if you have one) or use XAMP (https://www.apachefriends.org/index.html) to install one on your own machine.

## Assignment

Before you start make sure to clone this project.

In this exercise we have an example database structure and some models which represent them. Included in this exercise is a SQLite3 database (and source files), PHP models and some extra PHP application code which exposes a simple List/Query for `Venues` and all the relational data that belongs to a `Venues`.

### PHP
To start the php applications:
`php -S localhost:3030 -t src/php`

### Task 1:

The PHP API has a throws some errors/returns invalid data in some of the endpoints. Could you please fix them ?
In the `Venues` list endpoint, could you add for each venue an array with the items name?

### Task 2:

We now need to migrate all this code to a Node application that:

* A representation of the same models (you can write your own SQL or use a queryBuilder/ORM/etc)
* Exposes the same endpoints and functionality
* Add a *new* endpoint to create / update / delete `Venues`

You're free to use any dependencies/frameworks you want, there is a folder that you can use to put your code `src/node`. But do make sure that it works on Node 8 and to include instructions on how to run it.

> **How to run**
> `cd src/node`
> `yarn install` (or `npm install`)
> `yarn start` (or `npm run start`)

#### Nice 2 Have

* Validate the model when creating a new venue through the API endpoint
* Automated unit tests on the new Node application
