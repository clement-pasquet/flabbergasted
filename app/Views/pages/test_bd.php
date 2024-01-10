<?php
$db = \Config\Database::connect();
echo "test";
echo $db->connID;