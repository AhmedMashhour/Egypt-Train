<?php

include_once('database.php');

$t =<<<EOSQL
CREATE TABLE IF NOT EXISTS train_list(
  t_id int(11) NOT NULL,
  go varchar (255) DEFAULT NULL,
  arrive varchar (255) DEFAULT NULL,
  interval_time varchar (255) DEFAULT NULL,
  speed varchar (255) DEFAULT NULL,
  level varchar (255) DEFAULT NULL,
  from_station varchar (255) DEFAULT NULL,
  to_station varchar (255) DEFAULT NULL,
  PRIMARY KEY (t_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
EOSQL;
$r = $db->Execute($t);

?>
