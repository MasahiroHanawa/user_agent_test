# user_agent_test

### install

```
$ git clone git@github.com:MasahiroHanawa/user_agent_test.git

$ cd user_agent_test

$ git clone git@github.com:MasahiroHanawa/user_agent_docker.git

$ cd laradock

$ docker exec -it laradock_workspace_1 /bin/bash

# cd CheckUserAgent

# composer install

# cp .env.example .env

# php artisan key:generate
```

### How to test

```
$ cd laradock

$ docker exec -it laradock_workspace_1 /bin/bash

# php artisan key:generate

# cd CheckUserAgent

# ./vendor/bin/phpunit tests/UserAgentTest.php
```
