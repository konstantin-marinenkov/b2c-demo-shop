<?php

namespace Pyz\Zed\Training\Business\Writer;

use Generated\Shared\Transfer\AntelopeTransfer;
use Pyz\Zed\Training\Persistence\TrainingEntityManagerInterface;

class AntelopeWriter
{
    /**
     * @var TrainingEntityManagerInterface
     */
    protected $trainingEntityManager;

    public function __construct(TrainingEntityManagerInterface $trainingEntityManager)
    {
        $this->trainingEntityManager = $trainingEntityManager;
    }

    public function create(AntelopeTransfer $antelopeTransfer): AntelopeTransfer
    {
        return $this->trainingEntityManager
            ->createAntelope($antelopeTransfer);
    }
}
