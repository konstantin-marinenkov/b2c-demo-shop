<?php

/**
 * This file is part of the Aldi C&C Project and there for Aldi new Project IP.
 * The license terms agreed between ALDI and Spryker in the Framework Agreement
 * on Software and IT Services under § 10 shall apply.
 */

namespace Pyz\Yves\TrainingPage\Plugin\Router;

use Spryker\Yves\Router\Route\RouteCollection;

class TrainingPageRouteProviderPlugin extends \Spryker\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin
{
    public const ROUTE_NAME_TRAINING_ANTELOPE_NAME = 'training/antelope/_name_';

    /**
     * @inheritDoc
     */
    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection = $this->addTrainingAntelopeGetRoute($routeCollection);

        return $routeCollection;
    }

    private function addTrainingAntelopeGetRoute(RouteCollection $routeCollection): RouteCollection

    {
        $route = $this->buildRoute('training/antelope/{name}', 'TrainingPage', 'Antelope', 'getAction');
        $route = $route->setMethods(['GET']);
        $routeCollection->add(static::ROUTE_NAME_TRAINING_ANTELOPE_NAME, $route);

        return $routeCollection;

    }
}
