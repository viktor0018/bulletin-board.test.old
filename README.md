# BulletinBoard

![](https://img.shields.io/github/stars/viktor0018/bulletin-board.test.svg)

<p align="center">
  <img src="https://sun9-30.userapi.com/impg/gvrzAaO3aTzrv30QeP9RmlUCgkMXv2a9pOowbw/ky0484i3A6U.jpg?size=1320x1276&quality=96&proxy=1&sign=aaa12f9617b7f14d4a1f223d7a887a9d&type=album" width="500" title="hover text">
</p>

## Development environment requirements :

    Docker version 19.03.12
    Composer version 2.0.8
    NPM version  6.14.5

## Installation

    $ git clone https://github.com/viktor0018/bulletin-board.test
    $ cd bulletin-board.test
    $ composer install
    $ npm install

Run the sail:

    $ sail up

Run migrations:

    $ sail artisan migrate:fresh

Seeding the database :

    $ sail artisan db:seed

Now you can access the application via http://0.0.0.0:80

And application database via adminer - http://0.0.0.0:8081/?pgsql=postgres&username=root&db=bulletin_board.test&ns=public&table=users

Usefull commands:

    alias sail='bash vendor/bin/sail'

### Dbdesigner.id

    https://app.dbdesigner.id/?action=open&uuid=064808d3-c135-4ee3-9957-acfa12900353

<p align="center">
  <img src="https://sun9-51.userapi.com/impg/6fxouferzZU0MXSz9_p2VFf7-7q8ipJhsdt6bA/HbWZdzLL3UU.jpg?size=2560x1511&quality=96&proxy=1&sign=085cf6904b6d322b5631a78c5ffcf9b1&type=album" width="500" title="hover text">
</p>
