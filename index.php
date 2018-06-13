<?php
require __DIR__.'/InMemoryDataStorage.php';
$storage = new InMemoryDataStorage();
$storage->create('login','vasya556');
$storage->create('email','user@example.com');
$storage->create('dataDir','./data');
$storage->delete('login');