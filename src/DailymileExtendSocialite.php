<?php
namespace SocialiteProviders\Dailymile;

use SocialiteProviders\Manager\SocialiteWasCalled;

class DailymileExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('dailymile', __NAMESPACE__.'\Provider');
    }
}
