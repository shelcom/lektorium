<?php

namespace App\Services;
use Sinergi\BrowserDetector\Browser;


use Carbon\Carbon;

class IndexService
{
    public function carbon()
    {

        $browser = new Browser();
        $browser = $browser->getName();
        
        $carbon = printf("Now: %s", Carbon::now());
        return $carbon . '<br>' . $browser;
    }
}