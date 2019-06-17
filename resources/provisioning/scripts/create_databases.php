#!/usr/bin/php
<?php

$config = json_decode(file_get_contents("/vagrant/config.json"));

foreach($config->databases as $database)
{
    // This assumes you wouldn't inject your own box..
    echo system("sudo mysql -e 'CREATE DATABASE {$database};'");
}

