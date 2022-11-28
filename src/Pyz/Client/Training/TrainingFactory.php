<?php

/**
 * This file is part of the Aldi C&C Project and there for Aldi new Project IP.
 * The license terms agreed between ALDI and Spryker in the Framework Agreement
 * on Software and IT Services under § 10 shall apply.
 */

namespace Pyz\Client\Training;

use Pyz\Client\Training\Stub\TrainingStub;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;

class TrainingFactory extends \Spryker\Client\Kernel\AbstractFactory
{
    public function createTrainingStub(): TrainingStub
    {
        return new TrainingStub(
            $this->getZedRequestClient()
        );
    }

    public function getZedRequestClient(): ZedRequestClientInterface
    {
        return $this->getProvidedDependency(TrainingDependencyProvider::CLIENT_ZED_REQUEST);
    }
}
