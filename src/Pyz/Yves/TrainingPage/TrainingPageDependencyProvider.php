<?php

/**
 * This file is part of the Aldi C&C Project and there for Aldi new Project IP.
 * The license terms agreed between ALDI and Spryker in the Framework Agreement
 * on Software and IT Services under § 10 shall apply.
 */

namespace Pyz\Yves\TrainingPage;


use Spryker\Yves\Kernel\Container;
use Spryker\Yves\Kernel\AbstractBundleDependencyProvider;

class TrainingPageDependencyProvider extends AbstractBundleDependencyProvider
{
    public const CLIENT_TRAINING = 'CLIENT_TRAINING';

    public function provideDependencies(Container $container)
    {
        $container = $this->addTrainingClient($container);

        return $container;
    }

    protected function addTrainingClient(Container $container): Container
    {
        $container->set(static::CLIENT_TRAINING, function (Container $container) {
            return $container->getLocator()
                ->training()
                ->client();
        });

        return $container;
    }
}
