<?php
namespace azaelcodes\utils\ab;
interface ExperimentInterface {

    /**
     * Create an experiment with the given name
     * @return mixed
     */
    public function createExperiment();

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


    /**
     * Stop/Delete the experiment that is currently running. If a name is given then
     * only delete that experiment.
     * @param $experimentName
     * @return mixed
     */
    public function stopExperiment($experimentName = null);

    /**
     * true or false if the current experiment variation is A.
     * To be used in the front-end
     * @return boolean
     */
    public function isVariationA();

    /**
     * true or false if the current experiment variation is B.
     * To be used in the front-end
     * @return boolean
     */
    public function isVariationB();

}