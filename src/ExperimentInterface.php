<?php
namespace azaelcodes\utils\ab;
interface ExperimentInterface {

    /**
     * Create an experiment with the given name
     * @param $experimentName
     * @return mixed
     */
    public function createExperiment($experimentName);

    /**
     * Choose a variation
     * @return mixed
     */
    public function chooseVariation();

    /**
     * Save the experiment whether into a Cookie or database. Up to the
     * implementing function.
     * @return mixed
     */
    public function saveExperiment();

}