# Environnements

[Back to summary](index.md)

Pré-requis :
* PHP >= 7.4
* MySQL >= 8.0

There are several different environments:
* `dev`: development environment
* `test`: test environment

For each environment, it will be necessary to create a file containing the environment variables.

## Development environment
For example `.env.dev.local`.
```dotenv
# Required if you want to run system tests
DATABASE_URL=mysql://root:password@127.0.0.1:3306/tiplay_dev
```

##Test Environment

It is essential to create the `.env.test.local` file to ensure the proper functioning of the tests, you can use this example as a basis:

```dotenv
# Required if you want to run system tests
DATABASE_URL=mysql://root:password@127.0.0.1:3306/tiplay_test
```

207 / 5000
Résultats de traduction
Don't forget to configure other environment variables if needed, like `MAILER_DSN`.

It is preferable to insert the environment variables in the configuration of the virutalhost in production. 