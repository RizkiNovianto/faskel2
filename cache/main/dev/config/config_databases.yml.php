<?php
// auto-generated by sfDatabaseConfigHandler
// date: 2018/02/13 03:05:45

$database = new sfPropelDatabase();
$database->initialize(array (
  'dsn' => 'mysql://root@localhost/faskel_symfony',
  'password' => NULL,
), 'propel');
$this->databases['propel'] = $database;
