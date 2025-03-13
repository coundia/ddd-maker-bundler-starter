# ddd-maker-bundle Usage

This is a demo project for usage of my bundle [ddd-maker-bundle](https://packagist.org/packages/cnd/ddd-maker-bundle).
 

This project is generated by my bundle   [ddd-maker-bundle](https://packagist.org/packages/cnd/ddd-maker-bundle).

## Installation

### 1. Clone the repository

    git clone https://github.com/coundia/ddd-maker-bundler-starter.git

### 2. Run with Docker

#### a. Install dependencies

    composer install

#### b. Start the application with Docker
	
    docker compose up -d --build

---

### USAGE


---
```
task local:start
or 
symfony serve

# List maker

#clean all
sh clean.sh
php bin/console make:ddd-full Wallet --force false
php bin/console make:ddd-command Wallet --force false
php bin/console make:ddd-query Wallet --force false
php bin/console make:ddd-vo Wallet --force false

#migrate

task local:dd

#or for docker

task dd

```
Api docs
[http://127.0.0.1:8000/api/docs](http://127.0.0.1:8000/api/docs)

# For more infos see
[usage.md](doc/usage.md)[doc/usage.md](doc/usage.md)