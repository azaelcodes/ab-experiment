<?php
require '../vendor/autoload.php';
use azaelcodes\utils\ab\Experiment as Experiment;

$experiment = new Experiment('My First Experiment');
$experiment->createExperiment();

echo 'Variation: ' . $experiment->getVariation();
