<?php
require '../vendor/autoload.php';
use azaelcodes\utils\abetest\Experiment as Experiment;

$experiment = new Experiment();
$experiment->createExperiment('myAwesome Experimemt');
