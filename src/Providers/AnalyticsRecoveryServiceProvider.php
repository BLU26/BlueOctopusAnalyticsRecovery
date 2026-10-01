<?php
namespace BlueOctopusAnalyticsRecovery\Providers;

use Plenty\Plugin\ServiceProvider;

class AnalyticsRecoveryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->getApplication()->register(AnalyticsRecoveryRouteServiceProvider::class);
    }
}
