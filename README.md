# IO Builders challenge

This is a sample project about Ports and Adapters, CQRS and DDD.

To keep it as simple as possible there is no external DB or Message Broker so all the commands and events are synchronous.

## Project structure

The project is composed by one application, the one attached to the framework, and two contexts.

### Challenge App (apps)

This is the framework application, in this case Symfony.

### Challenge Context (src)

This context has the core domain and business logic for the User and the Account. It also manages the account operations
like: buy, sell and transfer.

### Ethereum Context (src)

This context is the adapter to the Ethereum server. Due lack of libraries in PHP that can interact with Ethereum is a mock.

## Test and Initialization

You can interact with the project with following commands of the makefile:

```
make test               # run unit tests
make behat              # run integration tests
make composer-install   # install dependencies
make dockerize          # create an image of the project, install dependecies
make start              # create the image and run the project
```