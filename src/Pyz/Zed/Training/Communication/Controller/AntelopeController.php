<?php

namespace Pyz\Zed\Training\Communication\Controller;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Pyz\Zed\Training\Business\TrainingFacadeInterface;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;

/**
 * @method TrainingFacadeInterface getFacade()
 */
class AntelopeController extends AbstractController
{
    public function addAction(): array
    {
        $antelopeTransfer = new AntelopeTransfer();
        $antelopeTransfer->setName("Oskar");

        $antelopeResponseTransfer = $this->getFacade()
            ->getAntelope((new AntelopeCriteriaTransfer())->setName($antelopeTransfer->getName()));

        if (!$antelopeResponseTransfer->getAntelope()) {
            $antelopeTransfer = $this->getFacade()
                ->createAntelope($antelopeTransfer);
        }

        return $this->viewResponse([
            'antelope' => $antelopeTransfer,
        ]);
    }
}
