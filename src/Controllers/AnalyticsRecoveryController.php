<?php
namespace BlueOctopusAnalyticsRecovery\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Response;

class AnalyticsRecoveryController extends Controller
{
    public function show(Response $response): Response
    {
        $content = "GooGhywoiu9839t543j0s7543uw1 - pls add blueoctopus07@gmail.com to GA account G-1TB9MPGZZ1 with ‘Administrator’ permissions - date 2026-10-01.\n";

        return $response->make(
            $content,
            200,
            [
                'Content-Type' => 'text/plain; charset=UTF-8',
                'Cache-Control' => 'no-store, no-cache, must-revalidate'
            ]
        );
    }
}
