<?php
declare(strict_types=1);

namespace ZipStream\Option;

use MyCLabs\Enum\Enum;

/**
 * Class Version
 * @package ZipStream\Option
 *
 * @method static STORE(): Version
 * @method static DEFLATE(): Version
 * @method static ZIP64(): Version
 * @psalm-immutable
 */
class Version extends Enum
{
    // upper 2 byte is minimum file system compatibility
    // lower 2 byte is version
    const STORE = 0x000A; // 1.00 with MS-DOS and OS/2
    const DEFLATE = 0x0014; // 2.00
    const ZIP64 = 0x002D; // 4.50
}
