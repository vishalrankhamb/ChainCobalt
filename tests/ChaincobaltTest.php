<?php
/**
 * Tests for ChainCobalt
 */

use PHPUnit\Framework\TestCase;
use Chaincobalt\Chaincobalt;

class ChaincobaltTest extends TestCase {
    private Chaincobalt $instance;

    protected function setUp(): void {
        $this->instance = new Chaincobalt(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chaincobalt::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
