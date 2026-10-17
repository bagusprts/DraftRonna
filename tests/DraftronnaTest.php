<?php
/**
 * Tests for DraftRonna
 */

use PHPUnit\Framework\TestCase;
use Draftronna\Draftronna;

class DraftronnaTest extends TestCase {
    private Draftronna $instance;

    protected function setUp(): void {
        $this->instance = new Draftronna(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Draftronna::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
