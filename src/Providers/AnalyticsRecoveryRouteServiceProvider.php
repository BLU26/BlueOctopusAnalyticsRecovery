<?php
namespace BlueOctopusAnalyticsRecovery\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class AnalyticsRecoveryRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('analytics.txt', 'BlueOctopusAnalyticsRecovery\Controllers\AnalyticsRecoveryController@show');
        $router->get('analytics-recovery-test', 'BlueOctopusAnalyticsRecovery\Controllers\AnalyticsRecoveryController@show');
    }
}
