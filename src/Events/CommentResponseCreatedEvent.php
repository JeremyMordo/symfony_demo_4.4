<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Events;

use App\Entity\CommentResponse;
use Symfony\Contracts\EventDispatcher\Event;

class CommentCreatedEvent extends Event
{
    protected CommentResponse $commentResponse;

    public function __construct(CommentResponse $commentResponse)
    {
        $this->commentResponse = $commentResponse;
    }

    public function getComment(): CommentResponse
    {
        return $this->commentResponse;
    }
}
