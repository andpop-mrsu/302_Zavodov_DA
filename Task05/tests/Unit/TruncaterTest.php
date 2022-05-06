<?php

namespace DZavodov\Tests;
use \PHPUnit\Framework\TestCase;
use DZavodov\Task05\Truncater;

class TruncaterTest extends TestCasep
{
    /** @test */
    public function Reduction()
    {
        $truncater = new Truncater();
        $this->assertSame('Длинн...', $truncater->truncate('Длинный текст', ['length' => 5 ]));
        $this->assertSame('...', $truncater->truncate(''));
        $this->assertSame('Заводов Дмитрий Александрович...', $truncater->truncate('Заводов Дмитрий Александрович'));
        $this->assertSame('Заводов Дм...', $truncater->truncate('Заводов Дмитрий Александрович', ['length' => 10]));
        $this->assertSame('Заводов Дмитрий Александрович...', $truncater->truncate('Заводов Дмитрий Александрович', ['length' => 50]));
        $this->assertSame('Заводов Дмитрий Александрович...', $truncater->truncate('Заводов Дмитрий Александрович', ['length' => -10]));
        $this->assertSame('Заводов Дм*', $truncater->truncate('Заводов Дмитрий Александрович', ['length' => 10, 'separator' => '*']));
        $this->assertSame('Заводов Дмитрий Александрович*', $truncater->truncate('Заводов Дмитрий Александрович', ['separator' => '*']));
    }
}
