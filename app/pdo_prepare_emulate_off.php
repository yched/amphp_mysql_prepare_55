<?php

$db = new \PDO('mysql:dbname=db;host=db', 'root', 'root');
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

for ($i = 0; $i < 10; $i++) {
    $time = microtime(true);

    $statement = $db->prepare("SELECT :rand as rand");
    $statement->execute([ 'rand' => rand() ]);
    $statement->fetchAll();

    echo round((microtime(true) - $time) * 1000, 2) . " ms" . PHP_EOL;
}
