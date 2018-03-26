<?php

namespace Xushre\Captcha\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Xushre\Captcha\Captcha
 */
class Captcha extends Facade
{

    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'captcha';
    }

}
