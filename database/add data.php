<?php
include_once ('database.php');
$d = <<<EOSQL
INSERT INTO train_list(t_id, go, arrive,interval_time,speed,level,from_station,to_station) VALUES
(1562,'2:30 AM','11:30 AM','4 hour','120km/h','expries','Cairo','Suez'),
(1531,'2:30 AM','18:30 AM','7 hour','160km/h','vip','Assuit','Cairo'),
 (173,'2:30 AM','1:30 AM','2 hour','180km/h','vip','Sohag','Assuit'),
 (164,'2:30 AM','5:30 AM','9 hour','110km/h','expries','Suez','Sohag'),
 (204,'2:30 AM','8:30 AM','4 hour','100km/h','sleap','Minya','Suez'),
 (114,'2:30 AM','4:30 AM','2 hour','150km/h','expries','Cairo','Suez'),
 (124,'2:30 AM','5:30 AM','6 hour','170km/h','sleap','Alex','Suez'),
 (194,'2:30 AM','8:30 AM','9 hour','110km/h','expries','Qena','Ramses'),
 (1593,'2:30 AM','9:30 AM','10 hour','160km/h','expries','Banha','Qalub'),
 (1373,'2:30 AM','1:30 AM','12 hour','180km/h','vip','Cairo','Assuit');
) ENGINE=InnoDB
EOSQL;


$r = $db->Execute($d);











?>
