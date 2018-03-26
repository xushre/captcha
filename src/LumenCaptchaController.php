<?php

namespace Xushre\Captcha;

use Laravel\Lumen\Routing\Controller;

/**
 * Class CaptchaController
 * @package Xushre\Captcha
 */
class LumenCaptchaController extends Controller
{

    /**
     * get CAPTCHA
     *
     * @param \Xushre\Captcha\Captcha $captcha
     * @param string $config
     * @return \Intervention\Image\ImageManager->response
     */
    public function getCaptcha(Captcha $captcha, $config = 'default')
    {
        return $captcha->create($config);
    }

}
