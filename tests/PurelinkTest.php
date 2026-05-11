<?php
/**
 * Tests for PureLink
 */

use PHPUnit\Framework\TestCase;
use Purelink\Purelink;

class PurelinkTest extends TestCase {
    private Purelink $instance;

    protected function setUp(): void {
        $this->instance = new Purelink(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Purelink::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
