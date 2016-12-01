<?php
require '../vendor/autoload.php';
use azaelcodes\utils\ab\Experiment as Experiment;

$experiment = new Experiment();
$experiment->createExperiment('myAwesome Experimemt');
