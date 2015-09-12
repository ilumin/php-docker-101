<?php 

try {
  $pdo = new \PDO(
    'mysql:host=db;dbname=demo',
    'root',
    '1234'
  );
}
catch (Exception $e) {
  echo $e->getMessage();
}

phpinfo();

