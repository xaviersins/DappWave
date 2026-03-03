<?php
/**
 * Tests for DappWave
 */

use PHPUnit\Framework\TestCase;
use Dappwave\Dappwave;

class DappwaveTest extends TestCase {
    private Dappwave $instance;

    protected function setUp(): void {
        $this->instance = new Dappwave(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Dappwave::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
