<?php

namespace dispatch\core\tests\tests\unit;

$app = __DIR__.'/../../..';
require_once $app.'/PollVulnerabilities.php';
require_once $app.'/interfaces/VulnerabilityPoller.php';

use PHPUnit\Framework\TestCase;
use dispatch\core\PollVulnerabilities;
use dispatch\core\interfaces\VulnerabilityPoller;

class PollVulnerabilitiesTest extends TestCase
{
	/**
	 * @testdox The PollVulnerabilities class must be instantiable
	 */
	public function testPollVulnerabilitiesIsInstantiable()
	{
		$Poller = new PollVulnerabilities();

		$this->assertNotNull($Poller);
	}

	/**
	 * @testdox The PollVulnerabilities class must implement the VulnerabilityPoller interface
	 */
	public function testPollVulnerabilitiesImplementsVulnerabilityPoller()
	{
		$Poller = new PollVulnerabilities();

		$this->assertTrue($Poller instanceof VulnerabilityPoller);
	}
}
