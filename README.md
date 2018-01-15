Reproduction repo for https://github.com/amphp/mysql/issues/55

```
$ docker-compose up -d

$ docker-compose run php php amphp_sql_prepare.php
$ docker-compose run php php amphp_sql_query.php
```
