<?php

declare(strict_types=1);

namespace App\Facade\Component;


class BarCodeUtil
{
    public static function generateBarCode()
    {
        /**
         * This is just an example. It's not a real barcode as you can see.
         */
        return rand(1000000000000, 9000000000000);
    }
}