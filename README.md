# BulletinBoard

![](https://img.shields.io/github/stars/viktor0018/bulletin-board.test.svg)

[Source code](https://github.com/viktor0018/bulletin-board.test)

## Installation

Development environment requirements :
Docker - 19.03.12
Composer version 2.0.8

    git clone https://github.com/viktor0018/bulletin-board.test
    cd bulletin-board.test
    composer install
    npm install

Run the sail:

    sail up

Run migrations:

    sail artisan migrate:fresh

Seeding the database :

    sail artisan db:seed

Now you can access the application via http://0.0.0.0:80
And application database via adminer - http://0.0.0.0:8081/?pgsql=postgres&username=root&db=bulletin_board.test&ns=public&table=users

### Dbdesigner.id

    https://app.dbdesigner.id/?action=open&uuid=064808d3-c135-4ee3-9957-acfa12900353
