<?php
interface ExperimentInterface {

    /**
     * Create an experiment with the given name
     * @param string $experimentName
     * @return mixed
     */
    public function createExperiment($experimentName = 'experiment');

    /**
     * Choose a variation
     * @return mixed
     */
    public function chooseVariation();

    /**
     * Get the variation that was created during the chooseVariation process
     * @return mixed
     */
    public function getVariation();

    /**
     * Save the experiment
     * @return mixed
     */
    public function saveExperiment();

}