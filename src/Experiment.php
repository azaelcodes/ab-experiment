<?php
namespace azaelcodes\utils\ab;

class Experiment implements ExperimentInterface {

    private $experimentName;
    private $variation;

    const EXPERIMENT_NAME_KEY = 'azaelcodes/experimentName';
    const EXPERIMENT_VARIATION_KEY = 'azaelcodes/experimentVariation';

    public function __construct()
    {
    }

    /**
     * Create an experiment with the given name
     *
     * @param $experimentName
     * @return mixed
     */
    public function createExperiment($experimentName = '')
    {
        // Check if the experiment already exists, get the information from the
        // cookie if that is the case.
        if ($this->experimentExists()) {

            // Store the experiment data inside the class variables
            $this->setExperimentName('-get-from-cookie');
            $this->setVariation('-get-it-from-cookie');
            return;

        }

        // Choose a variation
        $this->chooseVariation();

        // Create the experiment and store the data
        $this->saveExperiment();
    }

    /**
     * Choose a variation
     * @return mixed
     */
    public function chooseVariation()
    {
        $this->variation = rand(0, 1);
    }


    /**
     * Save the experiment into a Cookie
     * @return mixed
     */
    public function saveExperiment()
    {
        Cookie::set(self::EXPERIMENT_NAME_KEY, $this->experimentName);
        Cookie::set(self::EXPERIMENT_VARIATION_KEY, $this->variation);
    }

    /**
     *
     * @return bool
     */
    private function experimentExists()
    {
        return false;
    }

    // GETTERS AND SETTERS

    /**
     *
     * @return mixed
     */
    public function getVariation()
    {
        return $this->variation;
    }

    /**
     * @param $variation
     */
    public function setVariation($variation)
    {
        $this->variation = $variation;
    }

    /**
     * @param $experimentName
     */
    public function setExperimentName($experimentName)
    {
        $this->experimentName = $experimentName;
    }

    public function getExperimentName()
    {
        return $this->experimentName;
    }


}