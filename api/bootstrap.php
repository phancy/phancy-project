<?php
use Phancy\Phancy;
use Api\Resources\WelcomeResource;

$phancy = new Phancy();
$phancy->addResource((new WelcomeResource));
$phancy->process();