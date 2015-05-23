<?php
use Rocketeer\Facades\Rocketeer;

Rocketeer::after('deploy', 'composer install');
?>
