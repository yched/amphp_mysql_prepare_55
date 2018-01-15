<?php

include (__DIR__ . '/vendor/autoload.php');

\Amp\Promise\wait(
    \Amp\call(function() {
        $db = yield \Amp\Mysql\connect('host=db;user=root;pass=root;db=db');

        for ($i = 0; $i < 10; $i++) {
            $time = microtime(true);

            $results = yield $db->execute("SELECT :rand as rand", [ 'rand' => rand() ]);
            yield $results->advance();

            echo round((microtime(true) - $time) * 1000, 2) . " ms" . PHP_EOL;
        }
    })
);
