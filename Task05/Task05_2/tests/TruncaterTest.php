<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Truncater;

class TruncaterTest extends TestCase
{
    public function testDefaultTruncate()
    {
        $truncater = new Truncater();
        $this->assertEquals("Иванов Иван Иванович", $truncater->truncate("Иванов Иван Иванович"));
    }

    public function testCustomLength()
    {
        $truncater = new Truncater();
        $this->assertEquals("Иванов Ива...", $truncater->truncate("Иванов Иван Иванович", ['length' => 10]));
    }

    public function testLongerThanDefault()
    {
        $truncater = new Truncater();
        $this->assertEquals("Иванов Иван Иванович", $truncater->truncate("Иванов Иван Иванович", ['length' => 50]));
    }

    public function testNegativeLength()
    {
        $truncater = new Truncater();
        $this->assertEquals("", $truncater->truncate("Иванов Иван Иванович", ['length' => -10]));
    }

    public function testCustomSeparator()
    {
        $truncater = new Truncater();
        $this->assertEquals("Иванов Ива*", $truncater->truncate("Иванов Иван Иванович", ['length' => 10, 'separator' => '*']));
    }

    public function testCustomSeparatorDefaultLength()
    {
        $truncater = new Truncater();
        $this->assertEquals("Иванов Иван Иванович", $truncater->truncate("Иванов Иван Иванович", ['separator' => '*']));
    }
}
