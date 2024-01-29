<?php

declare(strict_types=1);

namespace GdprExtensionsCom\GdprExtensionsComYoutubeShorts\Tests\Unit\Controller;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;
use TYPO3Fluid\Fluid\View\ViewInterface;

/**
 * Test case
 */
class gdpryoutubeshortsControllerTest extends UnitTestCase
{
    /**
     * @var \GdprExtensionsCom\GdprExtensionsComYoutubeShorts\Controller\gdpryoutubeshortsController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\GdprExtensionsCom\GdprExtensionsComYoutubeShorts\Controller\gdpryoutubeshortsController::class))
            ->onlyMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

}
