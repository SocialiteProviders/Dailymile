<?php
namespace SocialiteProviders\Dailymile;

use SocialiteProviders\Manager\SocialiteWasCalled;

class DailymileExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'dailymile', __NAMESPACE__.'\Provider'
        );
    }
}
