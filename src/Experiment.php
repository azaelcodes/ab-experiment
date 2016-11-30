<?php
class Experiment implements ExperimentInterface {

    public function __construct()
    {
        //Empty constructor
    }

    /**
     * Create an experiment with the given name
     * @param string $experimentName
     * @return mixed
     */
    public function createExperiment($experimentName = 'experiment')
    {
        // TODO: Implement createExperiment() method.
    }

    /**
     * Choose a variation
     * @return mixed
     */
    public function chooseVariation()
    {
        // TODO: Implement chooseVariation() method.
    }

    /**
     * Get the variation that was created during the chooseVariation process
     * @return mixed
     */
    public function getVariation()
    {
        // TODO: Implement getVariation() method.
    }

    /**
     * Save the experiment
     * @return mixed
     */
    public function saveExperiment()
    {
        // TODO: Implement saveExperiment() method.
    }


}