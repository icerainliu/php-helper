<?php declare(strict_types=1);

namespace SwoftTest\Stdlib\Unit\Helper;

use PhpHelper\Stdlib\Helper\ObjectHelper;
use PHPUnit\Framework\TestCase;

/**
 * Class ObjectHelperTest
 *
 */
class ObjectHelperTest extends TestCase
{
    public function test(): void
    {
        $samples = [
            'int' => 0,
            'string' => '',
            'float' => 0,
            'bool' => false,
        ];

        foreach ($samples as $sample => $want) {
            $this->assertSame($want, ObjectHelper::getDefaultValue($sample));
        }
    }
}
