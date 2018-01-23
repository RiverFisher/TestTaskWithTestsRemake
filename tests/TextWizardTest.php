<?php
declare(strict_types=1);

use App\TextWizard;

final class TextWizardTest extends \PHPUnit\Framework\TestCase
{
    public function testCountFailure()
    {
        $text = 'QWER QWEr QWeR QwER qwe qWER QWer QWE QweR qwER QwEr qWeR Qwe qweR qwEr qWer Qwer qwer QWER';

        $uniqueWords = TextWizard::findUniqueWordsOfLength(3, $text);
        $this->assertCount(15, $uniqueWords);
    }

    public function testEqualFailure()
    {
        $text = 'QWER QWEr QWeR QwER qwe qWER QWer QWE QweR qwER QwEr qWeR Qwe qweR qwEr qWer Qwer qwer QWER';

        $expectedWords = [
            0 => 'QWER', 1 => 'QWEr', 2 => 'QWeR', 3 => 'QwER',
            5 => 'qWER', 6 => 'QWer', 8 => 'QweR', 9 => 'qwER',
            10 => 'QwEr', 11 => 'qWeR', 13 => 'qweR', 14 => 'qwEr',
            15 => 'qWer', 16 => 'Qwer', 17 => 'qwer'
        ];
        $this->assertEquals($expectedWords, TextWizard::findUniqueWordsOfLength(3, $text));
    }
}
