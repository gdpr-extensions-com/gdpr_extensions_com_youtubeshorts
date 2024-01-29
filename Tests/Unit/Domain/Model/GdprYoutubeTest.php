<?php

declare(strict_types=1);

namespace GdprExtensionsCom\GdprExtensionsComYoutubeShorts\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class gdpryoutubeshortsTest extends UnitTestCase
{
    /**
     * @var \GdprExtensionsCom\GdprExtensionsComYoutubeShorts\Domain\Model\gdpryoutubeshorts|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \GdprExtensionsCom\GdprExtensionsComYoutubeShorts\Domain\Model\gdpryoutubeshorts::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty(): void
    {
        self::markTestIncomplete();
    }
}
