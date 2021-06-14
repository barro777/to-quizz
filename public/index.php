<?php
error_reporting(-1);
require_once (dirname(__DIR__).'/config/constant.php');
require_once (dirname(__DIR__).'/config/require.php');
open_session();
require_once ROUTE_DIR.'lib/router.php';
?>