<?php

namespace Webapix\GLS\Services;

use Webapix\GLS\Contracts\Service;

/**
 * Locker Return Service.
 */
class LockerReturn implements Service
{
    public function toArray(): array
    {
        return [
            'Code' => 'LRS',
        ];
    }
}
