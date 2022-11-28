<?php

/**
 * This file is part of the Aldi C&C Project and there for Aldi new Project IP.
 * The license terms agreed between ALDI and Spryker in the Framework Agreement
 * on Software and IT Services under § 10 shall apply.
 */

namespace Pyz\Zed\Training\Business;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;

/**
 * @method TrainingBusinessFactory getFactory()
 */
class TrainingFacade extends \Spryker\Zed\Kernel\Business\AbstractFacade implements TrainingFacadeInterface
{

    public function createAntelope(AntelopeTransfer $antelopeTransfer): AntelopeTransfer
    {
        return $this->getFactory()
            ->createAntelopeWriter()
            ->create($antelopeTransfer);
    }

    public function getAntelope(AntelopeCriteriaTransfer $antelopeCriteriaTransfer): AntelopeResponseTransfer
    {
        return $this->getFactory()
            ->createAntelopeReader()
            ->getAntelope($antelopeCriteriaTransfer);
    }
}
