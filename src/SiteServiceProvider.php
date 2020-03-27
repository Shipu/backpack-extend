<?php

namespace Shipu\BackpackExtend;

use Backpack\CRUD\BackpackServiceProvider;
use Backpack\CRUD\LicenseCheck;
use Backpack\CRUD\Stats;

class SiteServiceProvider extends BackpackServiceProvider
{
    use LicenseCheck {
        checkLicenseCodeExists as traitCheckLicenseCodeExists;
    }
    use Stats {
        sendUsageStats as traitSendUsageStats;
    }

    public function checkLicenseCodeExists()
    {
        return;
    }

    public function sendUsageStats()
    {
        return;
    }

}
