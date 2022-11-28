<?php

/**
 * This file is part of the Aldi C&C Project and there for Aldi new Project IP.
 * The license terms agreed between ALDI and Spryker in the Framework Agreement
 * on Software and IT Services under § 10 shall apply.
 */

namespace Pyz\Client\Training;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;

/**
 * @method TrainingFactory getFactory()
 */
class TrainingClient extends \Spryker\Client\Kernel\AbstractClient implements TrainingClientInterface
{

    public function getAntelope(AntelopeCriteriaTransfer $antelopeCriteriaTransfer): AntelopeResponseTransfer
    {
        return $this->getFactory()
            ->createTrainingStub()
            ->getAntelope($antelopeCriteriaTransfer);
    }
}
