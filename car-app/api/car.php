<?php

require_once('../services/car.service.php');

$q = (isset($_REQUEST['q'])) ? $_REQUEST['q'] : '';

$res = query($q);
echo json_encode($res);
