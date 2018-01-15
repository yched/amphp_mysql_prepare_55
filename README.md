Reproduction repo for https://github.com/amphp/mysql/issues/55

```
$ docker-compose up -d

$ docker-compose run php php amphp_sql_prepare.php
$ docker-compose run php php amphp_sql_query.php
$ docker-compose run php php pdo_prepare_emulate_on.php
$ docker-compose run php php pdo_prepare_emulate_off.php
```
