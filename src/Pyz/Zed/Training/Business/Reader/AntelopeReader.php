<?php

namespace Pyz\Zed\Training\Business\Reader;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Pyz\Zed\Training\Persistence\TrainingRepositoryInterface;

class AntelopeReader
{
    /**
     * @var TrainingRepositoryInterface
     */
    protected $trainingRepository;

    public function __construct(TrainingRepositoryInterface $trainingRepository)
    {
        $this->trainingRepository = $trainingRepository;
    }

    public function getAntelope(AntelopeCriteriaTransfer $antelopeCriteriaTransfer): AntelopeResponseTransfer
    {
        $antelopeTransfer = $this->trainingRepository->getAntelope($antelopeCriteriaTransfer);

        $antelopeResponseTransfer = new AntelopeResponseTransfer();
        $antelopeResponseTransfer->setIsSuccessful(false);

        if ($antelopeTransfer) {
            $antelopeResponseTransfer->setAntelope($antelopeTransfer)
                ->setIsSuccessful(true);
        }

        return $antelopeResponseTransfer;
    }
}
