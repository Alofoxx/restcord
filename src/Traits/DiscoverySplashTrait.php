<?php

/*
 * Copyright 2017 Aaron Scherer
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE
 *
 * @package     restcord/restcord
 * @copyright   Aaron Scherer 2017
 * @license     MIT
 */

namespace RestCord\Traits;

use RestCord\Constants;

/**
 * @author Aaron Scherer <aequasi@gmail.com>
 *
 * DiscoverySplashTrait Class
 */
trait DiscoverySplashTrait
{
    public function getDiscoverySplash($format = Constants::DEFAULT_IMAGE_FORMAT, $size = null)
    {
        // this resource does not support gifs
        if ($format === 'gif') {
            $format = Constants::DEFAULT_IMAGE_FORMAT;
        }

        $url = Constants::DISCOVERY_SPLASH_URL . $this->id . '/' . $this->discovery_splash . '.' . $format;
        if ($size !== null) {
            $url .= '?size=' . $size;
        }

        return $url;
    }
}
