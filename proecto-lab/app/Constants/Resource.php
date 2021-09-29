<?php

namespace App\Constants;

use App\Constants\Concerns\HasEnumValues;
use MyCLabs\Enum\Enum;

class Resource extends Enum
{
    public const USER_INDEX = 'user.index';
    public const PRODUCT_INDEX = 'product.index';
    public const PRODUCT_CREATE = 'product.create';

    public static function supported(): array
    {
        return collect(static::toArray())->values()->toArray();
    }
}