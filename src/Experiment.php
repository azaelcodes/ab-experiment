<?php
namespace azaelcodes\utils\ab;
class Experiment implements ExperimentInterface {

    private $experimentName;
    private $variation;

    const EXPERIMENT_NAME_KEY = 'ab-experimentName';
    const EXPERIMENT_VARIATION_KEY = 'ab-experimentVariation';
    const EXPERIMENT_STATUS_KEY = 'ab-experimentStatus';

    public function __construct($experimentName)
    {
        if (is_null($experimentName)) {
            throw new \Exception('You must set an experiment name when instantiating this class');
        }
        $this->setExperimentName($experimentName);
    }

    /**
     * Create an experiment
     * @return mixed
     */
    public function createExperiment()
    {

        // Check if the experiment already exists, get the information from the
        // cookie if that is the case.
        if ($this->experimentExists()) {

            // Store the experiment data inside the class variables
            $this->setExperimentName(Cookie::get(self::EXPERIMENT_NAME_KEY));
            $this->setVariation(Cookie::get(self::EXPERIMENT_VARIATION_KEY));

            return;
        }

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
        // Choose a variation
        $this->chooseVariation();

        Cookie::set(self::EXPERIMENT_NAME_KEY, $this->experimentName);
        Cookie::set(self::EXPERIMENT_VARIATION_KEY, $this->variation);
    }

    /**
     * TODO : This function needs more thinking, currently not supported
     * Stop/Delete the experiment that is currently running. If a name is given then
     * only delete that experiment.
     * @param $experimentName
     * @return mixed
     *
     */
    public function stopExperiment($experimentName = null)
    {
        if (!is_null($experimentName)) {
        }
    }


    /**
     *
     * @return bool
     */
    private function experimentExists()
    {
        $experimentName = Cookie::get(self::EXPERIMENT_NAME_KEY);
        $variation = Cookie::get(self::EXPERIMENT_VARIATION_KEY);

        if (is_null($experimentName) || is_null($variation)) {
            return false;
        }

        return true;
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