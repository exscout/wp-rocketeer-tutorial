<?php
use Rocketeer\Facades\Rocketeer;

Rocketeer::after('deploy', 'sudo /etc/init.d/php5-fpm restart');
?>
