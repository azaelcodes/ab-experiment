<?php
class Experiment implements ExperimentInterface {

    private $experimentName;
    private $variation;

    public function __construct($experimentName = '')
    {
        $this->experimentName = $experimentName;
    }

    /**
     * Create an experiment with the given name
     * @return mixed
     */
    public function createExperiment()
    {
        // Check if the experiment has already been created by checking the cookie
        //
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