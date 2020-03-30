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
 * BannerTrait Class
 */
trait BannerTrait
{
    public function getBanner($format = Constants::DEFAULT_IMAGE_FORMAT, $size = null)
    {
        // this resource does not support gifs
        if ($format === 'gif') {
            $format = Constants::DEFAULT_IMAGE_FORMAT;
        }

        $url = Constants::BANNER_URL . $this->id . '/' . $this->banner . '.' . $format;
        if ($size !== null) {
            $url .= '?size=' . $size;
        }

        return $url;
    }
}
