<?php

require_once('../services/fruit.service.php');

$q = (isset($_REQUEST['q']))? $_REQUEST['q'] : '';

$res = query($q);
echo json_encode($res);
?>