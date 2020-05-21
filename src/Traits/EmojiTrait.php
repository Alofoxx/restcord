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
 * EmojiTrait Class
 */
trait EmojiTrait
{
    public function getUrl($format = Constants::DEFAULT_IMAGE_FORMAT, $size = null)
    {
        if ($this->animated === true) {
            $format = 'gif';
        }

        $url = Constants::EMOJI_URL . $this->id . '.' . $format;
        if ($size !== null) {
            $url .= '?size=' . $size;
        }

        return $url;
    }
}
