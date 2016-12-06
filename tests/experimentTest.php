<?php
require '../vendor/autoload.php';
use azaelcodes\utils\ab\Experiment as Experiment;

$experiment = new Experiment('My First Experiment');
$experiment->createExperiment();

if ($experiment->isVariationA()) {
    echo '<p>Showing a different text for this variation A</p>';
}

if ($experiment->isVariationB()) {
    echo '<p>Testing different text to display for variation B</p>';
}
