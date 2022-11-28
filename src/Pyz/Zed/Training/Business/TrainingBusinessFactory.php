<?php

/**
 * This file is part of the Aldi C&C Project and there for Aldi new Project IP.
 * The license terms agreed between ALDI and Spryker in the Framework Agreement
 * on Software and IT Services under § 10 shall apply.
 */

namespace Pyz\Zed\Training\Business;

use Pyz\Zed\Training\Business\Reader\AntelopeReader;
use Pyz\Zed\Training\Business\Writer\AntelopeWriter;
use Pyz\Zed\Training\Persistence\TrainingEntityManagerInterface;
use Pyz\Zed\Training\Persistence\TrainingRepositoryInterface;

/**
 * @method TrainingEntityManagerInterface getEntityManager()
 * @method TrainingRepositoryInterface getRepository()
 */
class TrainingBusinessFactory extends \Spryker\Zed\Kernel\Business\AbstractBusinessFactory
{
    public function createAntelopeWriter(): AntelopeWriter
    {
        return new AntelopeWriter(
            $this->getEntityManager()
        );
    }

    public function createAntelopeReader(): AntelopeReader
    {
        return new AntelopeReader(
            $this->getRepository()
        );
    }
}
