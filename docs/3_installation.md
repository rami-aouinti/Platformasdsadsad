# Installation

[Back to summary](index.md)

## Get the project sources
Consider forking the project, be sure to read the [contribution guide](../CONTRIBUTING.md).

````
git clone https://github.com/<your-username>/ <repo-name>
````

## Prerequisites
* PHP> = 8.0
* PHP extensions:
  * ctype
  * iconv
  * json
  * xml
  * intl
  * mbstring
* compose
* MySQL / MariaDB
* NodeJS> = 14.4
* npm> = 6.14

## Install dependencies
First, go to the project folder:
````
cd <repo-name>
````

Execute the following command
````
make install
````

## Environments
To make the project work on your machine, remember to configure the different environments. A documentation on this subject is present [here] (4_envirissements.md).

## Initialize databases
Starting with the `test` environment
````
make database-test
````

Then the `dev` environment:
````
make database-dev
````

If you wish, you can also inject fixtures in addition to setting up the database:

For the `test` environment
````
make fixtures-test
````

Then the `dev` environment:
````
make fixtures-dev
````

## Start the server locally
It is necessary to have installed the [symfony binary] (https://symfony.com/download).
````
symfony serve
````

## Management of external resources (css, js)
Compile the files once in the development environment:
````
npm run dev
````

Activate automatic compilation:
````
npm run watch
````

Compile the files for production:
````
npm run build
````