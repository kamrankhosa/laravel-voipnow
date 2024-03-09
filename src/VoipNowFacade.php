<?php

namespace KamranKhosa\VoipNow;

use Illuminate\Support\Facades\Facade;
class VoipNowFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'voipnow';
    }
}
