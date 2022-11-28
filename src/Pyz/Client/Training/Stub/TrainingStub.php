<?php

namespace Pyz\Client\Training\Stub;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Spryker\Client\ZedRequest\Stub\ZedRequestStub;

class TrainingStub extends ZedRequestStub
{
    public function getAntelope(AntelopeCriteriaTransfer $antelopeCriteriaTransfer): AntelopeResponseTransfer
    {
        /** @var $antelopeResponseTransfer AntelopeResponseTransfer */
        $antelopeResponseTransfer = $this->zedStub->call('/training/gateway/get-antelope', $antelopeCriteriaTransfer);

        return $antelopeResponseTransfer;
    }
}
